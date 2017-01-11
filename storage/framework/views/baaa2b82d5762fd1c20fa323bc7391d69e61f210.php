<?php echo $__env->make('admin.public.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style type="text/css">
    body{background:url(/data/upload/images/adminImg.png) #56bc94 ;}

</style>
<div style="text-align: center">
    <h1 class="logo-name">Xw</h1>
</div>
<div class="signinpanel">

    <div class="row">
        <div class="col-sm-12">

            <form method="post" action="<?php echo e(url('admin/login')); ?>">
                <div style="text-align: center;color:#fff"> <?php echo e($errors->first('timeout')); ?> </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <h4 class="no-margins" style="color:#fff">登录：</h4>
                <input type="text" name="email" class="form-control uname" value="admin@qq.com" placeholder="邮箱" />
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                <?php endif; ?>

                <input type="password" name="password"  value="wyl6553382" class="form-control pword m-b" placeholder="密码" />
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                <?php endif; ?>
                <button class="btn btn-success btn-block">登录</button>
                <div style="height: 20px;"></div>
                <p class="text-muted text-center" > <a href="#"><small style="color:#fff;">忘记密码了？</small></a> | <a href="<?php echo e(url('admin/register')); ?>" style="color:#fff;">注册一个新账号</a>
                </p>
            </form>

        </div>
    </div>
    <div class="signup-footer">
        <div>
            &copy; hAdmin
        </div>
    </div>
</div>


<?php echo $__env->make('admin.public.tail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
