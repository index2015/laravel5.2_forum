@include('admin.public.head')<div class="">

    <div class="animated fadeInRight" style="background: #fff;;">
        <!--tab标签-->
        <table class="table">
            <tbody>
            <tr>
                <td>网站域名</td>
                <td>{{$data['domainName']}}</td>
            </tr>
            <tr>
                <td>网站目录</td>
                <td>{{$data['root']}}</td>
            </tr>
            <tr>
                <td>服务器操作系统</td>
                <td>{{$data['system']}}</td>
            </tr>
            <tr>
                <td>服务器端口</td>
                <td>{{$_SERVER['SERVER_PORT']}}</td>
            </tr>
            <tr>
                <td>服务器IP</td>
                <td>{{$data['serverIp']}}</td>
            </tr>
            <tr>
                <td>服务器环境</td>
                <td>{{$data['EnvironmentalScience']}}</td>
            </tr>

            <tr>
                <td>服务器语言</td>
                <td>{{$_SERVER['HTTP_ACCEPT_LANGUAGE']}}</td>
            </tr>
            <tr>
                <td>PHP版本</td>
                <td>{{$data['PHP']}}</td>
            </tr>
            <tr>
                <td>MySQL版本</td>
                <td>{{$data['mysql']}}</td>
            </tr>
            <tr>
                <td>最大上传限制</td>
                <td>{{$data['dada']}}</td>
            </tr>
            <tr>
                <td>最大上传文件</td>
                <td>{{$data['max_file_uploads']}}</td>
            </tr>
            <tr>
                <td>Zend版本</td>
                <td>{{Zend_Version()}}</td>
            </tr>
            </tbody></table>
    </div>
</div>



@include('admin.public.tail')
