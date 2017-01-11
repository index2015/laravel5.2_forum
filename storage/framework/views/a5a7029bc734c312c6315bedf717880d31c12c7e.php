<?php echo $__env->make('admin.public.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style type="text/css">
    body{background:url(/data/upload/images/adminImg.png) #56bc94 ;}

</style>
<div class="middle-box text-center loginscreen   animated fadeInDown" style="color:#fff">
    <div>
        <div>
            <h1 class="logo-name">Xw</h1>
        </div>

        <p>创建一个<?php echo e(CMS); ?>新账户</p>
        <form class="m-t" role="form" action="#" id="formRe">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="请输入用户名" >
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="请输入邮箱" >
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="请输入密码" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="请再次输入密码">
            </div>
            <div class="form-group text-left">
                <div class="checkbox i-checks">
                    <label class="no-padding">
                        <input type="checkbox"><i></i> 我同意注册协议</label>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary block full-width m-b" id="adminRegister">注 册</button>

        <p class="text-muted text-center"><small>已经有账户了？</small><a href="<?php echo e(url('admin/login')); ?>"  style="color:#fff">点此登录</a>
        </p>


    </div>
</div>

<script>
    $('#adminRegister').click(function(){
//        error();
                <?php /*url:'<?php echo e(url('admin/RegisterForm')); ?>',*/ ?>
        var data=$('#formRe').serialize();
        $.ajax({
            'type':'POST',
            '_token':'',
            'url':'<?php echo e(url('admin/register')); ?>',
            'dataType':'json',
            'data':data,
            success:function(msg){
                if(msg.state==2){
                    this_error(msg.msg);
                }if(msg.state==0){
                    this_error(msg.msg);
                }if(msg.state==1){
                    success(msg.msg);
                }
            }
        })
    });

</script>

<?php echo $__env->make('admin.public.tail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
