@include('admin.public.head')
<style type="text/css">
    body{background:url(/data/upload/images/adminImg.png) #56bc94 ;}

</style>
<div style="text-align: center">
    <h1 class="logo-name">Xw</h1>
</div>
<div class="signinpanel">

    <div class="row">
        <div class="col-sm-12">

            <form method="post" action="{{url('admin/login')}}">
                <div style="text-align: center;color:#fff"> {{ $errors->first('timeout') }} </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <h4 class="no-margins" style="color:#fff">登录：</h4>
                <input type="text" name="email" class="form-control uname" value="admin@qq.com" placeholder="邮箱" />
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <input type="password" name="password"  value="wyl6553382" class="form-control pword m-b" placeholder="密码" />
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <button class="btn btn-success btn-block">登录</button>
                <div style="height: 20px;"></div>
                <p class="text-muted text-center" > <a href="#"><small style="color:#fff;">忘记密码了？</small></a> | <a href="{{url('admin/register')}}" style="color:#fff;">注册一个新账号</a>
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


@include('admin.public.tail')
