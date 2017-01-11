<?php

namespace App\Http\Controllers\Admin;

use App\http\models\PrivilegeGrouping;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    public function webSiteOverview(){

        $ewo=  mysqli_connect("127.0.0.1","root","");
        $res=$ewo->query("select VERSION()");
        $row=mysqli_fetch_row($res);
        $data['domainName']=$_SERVER["HTTP_HOST"];
        $data['root']=HOME;
        $data['system']=$_SERVER['HTTP_USER_AGENT'];
        $data['serverIp']=apache_getenv("server_addr");
        $data['EnvironmentalScience']=apache_get_version();
        $data['PHP']=phpversion();
        $data['mysql']=$row[0];
        $data['dada']=ini_get('upload_max_filesize');
        $data['max_file_uploads']=ini_get('max_file_uploads');
        return view('admin.web_site_overview',['data'=>$data]);
    }

    /**
     * 清除缓存
     */
    public function delCache(){

        $path ='./_runtime';
        $return= $this->delDirAndFile($path,1);
        $msg=[];
        if($return==true){
            $msg['state']=B;
            $msg['msg']='清除成功';
        }else{
            $msg['state']=A;
            $msg['msg']='清除失败';
        }
        echo json_encode($msg);
    }

    /** 删除缓存
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delCacheView(){

        return view('admin.del_cache_view');
    }

    /** 删除缓存方法
     * @param $path 路径
     * @param bool $delDir  返回 true  or false
     * @return bool
     */
    public  function delDirAndFile($path, $delDir = FALSE) {
        // @mkdir('_runtime', 0777, true);

        if(file_exists($path))
        {
            $handle = opendir($path);
            if ($handle) {
                while (false !== ( $item = readdir($handle) )) {
                    if ($item != "." && $item != "..")
                        is_dir("$path/$item") ? $this->delDirAndFile("$path/$item", $delDir) : unlink("$path/$item");
                }
                closedir($handle);
                if ($delDir)
                    return rmdir($path);
            }else {
                if (file_exists($path)) {
                    return @unlink($path);
                } else {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
    /** 统计缓存大小 已KB 计算成MB
     * @param $dir
     * @return int
     */
    public function dirsize($dir)
    {
        @$dh = opendir($dir);
        $size = 0;
        while ($file = @readdir($dh)){
            if ($file != "." and $file != ".."){
                $path = $dir."/".$file;
                if (is_dir($path)){
                    $size += $this->dirsize($path);
                }elseif (is_file($path)){
                    $size += filesize($path);
                }
            }
        }@closedir($dh);
        $dir_size = $size/1024/1024;
        return $dir_size;
    }

    /**
     *  获得缓存大小
     */
    public function cacheBM(){
        if($_POST['view_cache']=='view_cache'){
            $path =storage_path('framework\views');
            $dir_size=$this->dirsize($path);
            $arr=[];
            $arr['data']=$dir_size;
        }if($_POST['view_cache']=='data_cache'){
            $path ='./_runtime';
            $dir_size=$this->dirsize($path);
            $arr=[];
            $arr['data']=$dir_size;
        }
        echo json_encode($arr);
    }
    /**
     * 页面缓存
     */
    public function ViewCache(){
        $path =storage_path('framework\views');
        $return= $this->delDirAndFile($path,1);
        $msg=[];
        if($return==true){
            $msg['state']=B;
            $msg['msg']='清除成功';
            @mkdir(storage_path('framework\views'), 0777, true);
        }else{
            $msg['state']=A;
            $msg['msg']='清除失败';
        }
        echo json_encode($msg);
    }

    /**  后台权限菜单
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jurisdiction(){
        return view('admin.jurisdiction');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function showJurisdictionData(Request $request){
        $search = $request->input('_search');
        $rows = $request->input('rows');
        $page = $request->input('page');
        $sidx = $request->input('sidx');
        $sord = $request->input('sord');

        if($sidx==''){
            $sidx='id';
        }
        $offset = (int)($page - 1) * $rows;
        if($search == 'true')
        {
            //查找...
            $searchField = $request->input('searchField');
            $searchString = $request->input('searchString');
            $searchOper = $request->input('searchOper');
            if($searchOper == 'eq') {
                $records = count(DB::table('privilege_grouping')->where($searchField,'=',$searchString)->get());
                $total = ceil($records/$rows);

            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('privilege_grouping')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('privilege_grouping')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->get());
                $total = ceil($records/$rows);
            }
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $mpc
            );
            return json_encode($json);
        }else{
            $asc = DB::table('privilege_grouping')
                ->orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)
                ->get();
            $records = count(PrivilegeGrouping::all());
            $total = ceil($records/$rows);
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $asc
            );
            return json_encode($json);
        }
    }


    /** @param  操作类型  新增：add  修改：edit  删除：del
     * @param Request $request
     */
    public function saveJurisdictionData(Request $request){


        $oper = $request->input('oper');
        $addReturnModel= DB::table('privilege_grouping');
        $msg=[];
        $data=[];
        $data['groupName']=$request->input('groupName');
        $data['Icon']=$request->input('Icon');
        $data['describe']=$request->input('describe');

        if($oper == 'add') //新增
        {  $data['addTime']=time();

            $addReturn=$addReturnModel->Insert($data);
            if($addReturn){
                $msg['state']='1';
                $msg['msg']='保存成功';
                echo json_encode($msg);
                exit;
            }else{
                $msg['state']='1';
                $msg['msg']='编辑成功';
                echo json_encode($msg);
                exit;
            }

        }
        if($oper == 'edit') //修改
        {
            $editReturn= $addReturnModel->where(array('id'=>$request->input('id')))->update($data);
            if($editReturn){
                $msg['state']='1';
                $msg['msg']='编辑成功';
                echo json_encode($msg);
                exit;
            }else{
                $msg['state']='1';
                $msg['msg']='编辑失败';
                echo json_encode($msg);
                exit;
            }
        }

        if($oper == 'del')//删除
        {
            DB::table('privilege_grouping') ->where('id','=',$request->input('id'))->delete();
        }
    }
}
