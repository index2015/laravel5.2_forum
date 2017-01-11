@include('admin.public.head')

<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold"> <?php echo session('admin_name')?> </strong>
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element"><?php echo session('admin_name')?>
                    </div>
                </li>

                <li>
                    <a class="J_menuItem" href="{{url('system/webSiteOverview')}}">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">网站概览</span>
                    </a>
                </li>
                <li>
                    <a class="J_menuItem" href="{{url('adminSystem')}}">
                        <i class="glyphicon glyphicon-cog"></i>
                        <span class="nav-label">系统运行</span>
                    </a>
                </li>

                <li>
                    <a class="J_menuItem" href="{{url('system/delCacheView')}}">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span class="nav-label">清除缓存</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-road"></i>
                        <span class="nav-label">系统管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('adminList')}}" class="J_menuItem">系统管理</a>
                        </li>
                        <li>
                            <a href="{{url('system/jurisdiction')}}" class="J_menuItem">权限管理</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('navigationList')}}">管理导航</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('userList')}}">管理用户</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('systemSeo')}}">管理SEO</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <span class="nav-label">文章管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a class="J_menuItem" href="{{url('userList')}}">文章列表</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-pencil"></i>
                        <span class="nav-label">帖子管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a class="J_menuItem" href="{{url('PostBar/index')}}">帖吧管理</a>
                            <a class="J_menuItem" href="{{url('PostBar/postDataList')}}">帖子管理</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">频道管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('adminList')}}" class="J_menuItem">创建频道</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('userList')}}">频道管理</a>
                        </li>
                    </ul>
                </li>

                <li class="line dk"></li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="#">收件箱</a>
                        </li>
                        <li><a class="J_menuItem" href="#">查看邮件</a>
                        </li>
                        <li><a class="J_menuItem" href="#">写信</a>
                        </li>
                    </ul>

                </li>



            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="m-t-xs">
                                <div class="dropdown-messages-box">
                                    <a href="#" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{asset('/hAdmin/img/a7.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 是不是只有我死了,你们才不骂爵迹
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="#" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{asset('/hAdmin/img/a4.jpg')}}">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>二愣子</strong> 呵呵
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>

                                <div class="text-center link-block" style="float: right">
                                    <a class="J_menuItem" href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                                <div class="text-center link-block" style="float: left">
                                    <a class="J_menuItem" href="/">
                                        <strong>网站首页 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>

        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe id="J_iframe" width="100%" height="100%" src="{{url('adminSystem')}}" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
    </div>
    <div class="layui-footer footer">
        <div class="layui-main" style="text-align: center">
            <p>2016 © <a href="#" target="_blank">{{CMS}} Admin</a></p>
        </div>
    </div>
    <!--右侧部分结束-->
</div>
@include('admin.public.tail')

