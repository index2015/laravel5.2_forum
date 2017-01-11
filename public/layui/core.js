/**
 * Created by Administrator on 2016/11/16 0016.
 */

//一般直接写在一个js文件中
//layui.use(['layer', 'form'], function(){
//    var layer = layui.layer
//        ,form = layui.form();
//
//    layer.msg('Hello World');
//});

//layui.config({
//    base: '/build/css/res/js/modules/' //你的模块目录
//}).use('index'); //加载入口


/**
 *  成功提示
 * @param msg
 */
function success(msg,url){

    if(msg==null){
        msg='操作成功';
    }
    layer.msg(msg,{time: 1000, icon:6},function(){
        if(url==null){
            url=document.referrer;
        }
        window.location.href=url;
    });
}

function this_success(msg){

    if(msg==null){
        msg='操作失败';
    }
    layer.msg(msg,{time: 1000, icon:6});

}function this_error(msg){

    if(msg==null){
        msg='操作失败';
    }
    layer.msg(msg,{time: 1000, icon:8});

}

function error(msg,url){

    if(msg==null){
        msg='操作失败';
    }
    //window.location 当前URL

    layer.msg(msg,{time: 1000, icon:8},function(){
        if(url==null){
            url=window.location;
        }
        window.location.href=url;
    });

}

