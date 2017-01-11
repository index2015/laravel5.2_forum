<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', "门户社区-首页")</title>

    {{--layui组件--}}
    <script src="{{asset('/public/static/js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('/public/layui/mobile/need/layer.css')}}">
    <script src="{{asset('/public/layui/layer.js')}}" type="text/javascript"></script>
    <script src="{{asset('/public/layui/core.js')}}" type="text/javascript"></script>

    {{--end layui组件--}}
    <link rel="stylesheet" type="text/css" href="{{asset('/public/static/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/static/css/nanoscroller.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/static/css/style_5_common.css?Nnj')}}">
    <script src="{{asset('/public/static/js/common.js?Nnj')}}" type="text/javascript"></script>
    <script src="{{asset('/public/static/js/jquery.forum.js?Nnj')}}" type="text/javascript"></script>

</head>
<body id="nv_forum" class="pg_viewthread" style="background: #eaeaea url('{{asset('/static/images/bg.png')}}') repeat-x 0 70px;" onkeydown="if(event.keyCode==27) return false;">
<div class="fm_header">
    <div class="content"><div class="fm_logo"><a href="../" title="唯美设计">唯美设计</a></div>
        <div class="fm_nav">
            <ul>
{{-- class="current"--}}
                <li  id="mn_portal">
                    <a href="/?" title="Portal">首页<span>Portal   </span></a>
                </li>
                @foreach($navLis as $k=>$nav)

                    <li>
                        <a href="{{url($nav->url)}}?nav={{$k}}"   @if($nav->The_newpage == 1)  target="_blank" @endif   style="color:@if($nav->colour !='') {{$nav->colour}}  @endif"  title="{{$nav->name}}"> {{$nav->name}}  <span>BBS</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="fm_userinfo fm_noinfo" <?php  if(session('uid')){echo "hidden";};?>>
            <a href="{{url('/login')}}"  class="ppdiag">登录</a><span class="pipe">|</span>
            <a href="{{url('/register')}}" onclick="showRequestWindow()">立即注册</a>

            {{--<a href="#" onclick="showWindow('login', this.href);return false;" class="ppdiag">登录</a><span class="pipe">|</span>--}}
            {{--<a href="#" onclick="showRequestWindow()">立即注册</a>--}}
        </div>
        <div class="fm_userinfo" <?php if(session('uid')==''){echo "hidden";};?>>
            <div class="fm_dibavatar js_dibavatar">
                <a href="{{url('home?&uid='.session('uid'))}}" target="_blank" title=""><?php echo session('name')?></a> ( <em><a href="{{url('home?&uid='.session('uid'))}}" class="colorlink">高级会员</a></em>  )
                <div class="flu_grid js_grid" style="display: none;">
                    <div class="flu_grid_t">
                        <a href="#" class="grid_avatar"><img src=""><div class="grid_edit">编辑<br>头像</div>
                        </a>
                    </div>
                    <div class="grid_stat flu_grid_c">
                        <div class="grid_list">
                            <ul>
                                <li><a href="#" target="_blank"><span class="grid_list_num threadNum">14</span>帖子</a></li>
                                <li><a href="#" target="_blank"><span class="grid_list_num favoriteNum">9</span>收藏</a></li>
                                <li><a href="#" target="_blank"><span class="grid_list_num friendNum">0</span>好友</a></li>
                                <li><a href="#" target="_blank"><span class="grid_list_num extcredits5">719</span>金钱</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flu_grid_f"><a href="#" class="greensmallbutton">修改资料</a><span class="pipe"></span><a href="{{url('/logout')}}" class="graysmallbutton">退出登录</a></div>
                </div>
            </div>

            <div class="fm_dibavatar js_dibavatar">
                <span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm">通知</a>

            </div>
        </div>

    </div>
    <div class="fm_line"></div>
</div>
<div class="wp">
    <div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div><div id="mu" class="box cl">
    </div>
</div>
<style type="text/css">
    .oneway_text>ul>li>a>i, .manage_group2, .s_reply, .s_rate, .s_view {
        height: 16px;
        width: 16px;
        background-image: url(/static/images/icon16.png);
        margin: -2px 5px 0 0;
    }
</style>
