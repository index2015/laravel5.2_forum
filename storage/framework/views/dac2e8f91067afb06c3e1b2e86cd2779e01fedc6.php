<?php echo $__env->make('admin.public.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><div class="">

    <div class="animated fadeInRight" style="background: #fff;;">
        <!--tab标签-->
        <table class="table">
            <tbody>
            <tr>
                <td>网站域名</td>
                <td><?php echo e($data['domainName']); ?></td>
            </tr>
            <tr>
                <td>网站目录</td>
                <td><?php echo e($data['root']); ?></td>
            </tr>
            <tr>
                <td>服务器操作系统</td>
                <td><?php echo e($data['system']); ?></td>
            </tr>
            <tr>
                <td>服务器端口</td>
                <td><?php echo e($_SERVER['SERVER_PORT']); ?></td>
            </tr>
            <tr>
                <td>服务器IP</td>
                <td><?php echo e($data['serverIp']); ?></td>
            </tr>
            <tr>
                <td>服务器环境</td>
                <td><?php echo e($data['EnvironmentalScience']); ?></td>
            </tr>

            <tr>
                <td>服务器语言</td>
                <td><?php echo e($_SERVER['HTTP_ACCEPT_LANGUAGE']); ?></td>
            </tr>
            <tr>
                <td>PHP版本</td>
                <td><?php echo e($data['PHP']); ?></td>
            </tr>
            <tr>
                <td>MySQL版本</td>
                <td><?php echo e($data['mysql']); ?></td>
            </tr>
            <tr>
                <td>最大上传限制</td>
                <td><?php echo e($data['dada']); ?></td>
            </tr>
            <tr>
                <td>最大上传文件</td>
                <td><?php echo e($data['max_file_uploads']); ?></td>
            </tr>
            <tr>
                <td>Zend版本</td>
                <td><?php echo e(Zend_Version()); ?></td>
            </tr>
            </tbody></table>
    </div>
</div>



<?php echo $__env->make('admin.public.tail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
