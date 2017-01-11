@include('index.public.head')
{{--@include('index.public.login')--}}
{{--@include('index.public.request')--}}


<div class="content" id="index">

    <div class="main">
        <!--[diy=diy1]--><div id="diy1" class="area"><div id="frameJb1Jz1" class="frame move-span cl frame-1">
                <div id="frameJb1Jz1_left" class="column frame-1-c">
                    <div id="frameJb1Jz1_left_temp" class="move-span temp"></div><div id="portal_block_12" class="block move-span"><div id="portal_block_12_content" class="dxb_bc">		<div class="recommend_pic _slide">
                                <div class="recommend_pic_list">
                                    <ul class="_slidepic">
                                        <li style="display: none;">
                                            <a href="thread-41-1-1.html" target="_blank">
                                                <img src="/data/upload/images/1.jpg" width="770" height="350"></a></li>
                                        <li style="display: none;">
                                            <a href="thread-39-1-1.html" target="_blank">
                                                <img src="/data/upload/images/1.jpg" width="770" height="350"></a></li>
                                        <li style="display: list-item;">
                                            <a href="thread-38-1-1.html" target="_blank">
                                                <img src="/data/upload/images/2.jpg" width="770" height="350"></a></li>
                                    </ul>
                                </div>
                                <div class="recommend_pic_title">
                                    <ul class="_slidetit"><li class=""><a href="thread-41-1-1.html" target="_blank">食材创意摄影</a></li><li class=""><a href="thread-39-1-1.html" target="_blank">南宁｜Missed Call</a></li><li class="current"><a href="thread-38-1-1.html" target="_blank">春风里EXIF</a></li></ul>
                                </div>
                            </div></div></div></div></div></div><!--[/diy]-->
        <!-- 列表推荐 -->
        <div class="box main_box">
            <!--[diy=diy2]-->
            <div id="diy2" class="area"><div id="frametVRynP" class="frame move-span cl frame-1"><div id="frametVRynP_left" class="column frame-1-c"><div id="frametVRynP_left_temp" class="move-span temp"></div><div id="portal_block_13" class="block move-span"><div id="portal_block_13_content" class="dxb_bc">			<!-- 小图推荐 -->
                                <h3 class="modname">推荐阅读</h3>
                                <div class="recommend_pic_small">
                                    <ul><li><a href="thread-31-1-1.html" target="_blank" title="如何创造智能硬件 | EmieLab x bong"><img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100"></a>
                                        </li><li><a href="thread-22-1-1.html" target="_blank" title="SONY的轻型捆绑 A25+PHA-1A浅谈"><img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100">
                                            </a></li><li><a href="thread-29-1-1.html" target="_blank" title="LifeSmart智能蓝牙变色灯泡"><img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100"></a></li></ul>
                                </div>
                                <!-- 文字推荐（原首页推荐列表） -->
                                <div class="recommend_article_list">
                                    <ul>
                                        @foreach($postData as $vo)
                                            <li>
                                                <a href="{{url('forum/showPost?id='.$vo['id'].'&postBar='.$vo['postBar'])}}" target="_blank" title="Tesla Model S 地球上最酷的量产纯电动轿车">
                                                    <em>●</em>{{$vo['postName']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div><!--[/diy]-->
            <!-- 帖子列表分类 -->


            <div class="graybg graytopborder index_tab" name="threadsbody" id="threadsbody">
                <h3 class="modname">社区讨论</h3>

                <div class="tab" style="width: 330px;">
                    <div id="threadthumb" class="threadthumb_yes" onclick="changethreadthumb()" style="padding-right: 20px;"><i></i>图片</div>
                    <ul>
                        <li  @if(@$_GET['order']=='postAddTime' || @$_GET['order']=='') class="a"  @endif ><a href="{{url('/?order=postAddTime')}}">时间<span></span></a></li>
                        <li  @if(@$_GET['order']=='numberOfReviews') class="a"  @endif><a href="{{url('/?order=numberOfReviews')}}">回复<span></span></a></li>
                        <li  @if(@$_GET['order']=='postAccessTimes') class="a"  @endif><a href="{{url('/?order=postAccessTimes')}}">查看<span></span></a></li>
                        <li  @if(@$_GET['order']=='postEssence') class="a"  @endif><a href="{{url('/?order=postEssence')}}">精华<span></span></a></li>
                    </ul>
                </div>
            </div>


            <!-- 帖子列表 -->
            <div class="thread minh" style="position: relative;">

                @foreach($barPostDataHome as $vo)
                    <div class="threadlist">
                        <div class="threadlist_stat threadlist_stat_hot">
                            <a href="{{url('forum/showPost?postBar='.$vo['postBar'].'&id='.$vo['id'])}}" title="{{$vo['postAccessTimes']}}个查看">{{$vo['postAccessTimes']}}</a>
                        </div>
                        <div class="threadlist_title">
                            <div class="right">
                            </div>
                            <a href="{{url('forum/showPost?postBar='.$vo['postBar'].'&id='.$vo['id'])}}" >{{$vo['postName']}}</a>
                            <img src="/static/images/filetype/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle"></div>

                        <div class="threadlist_imglist">
                            <?php echo $vo['postContent']?>
                        </div>

                        <div class="threadlist_info">
                            <div class="lastreply">
                                <a href="#"> <span title="">{{date('Y-m-d H:i:s',$vo['postAddTime'])}}</span></a>
                            </div>
                            <a href="#">{{$vo['creator_name']}}</a> @ {{date('Y-m-d H:i:s',$vo['bar_addtime'])}}<span class="pipe">|</span>
                        <span class="greencolor">
                            <a href="{{url('forum/postForum?id='.$vo['postBar'].'')}}"><strong>{{$vo['bar_name']}}</strong></a>
                        </span>
                        </div>
                    </div>
                @endforeach
            </div>

            {{--<div class="nextpage">--}}
            {{--<a href="javasctipt:;">下一页</a>--}}
            {{--</div>--}}
        </div>
        <div class="pg">
            {!! $barPostDataHome->links()  !!}
        </div>
    </div>
    <div class="sidebar">
        <div class="box forum_user_stat">
            <div class="signin">
                <a href="javascript:;" onclick="userfnbox('checkin');"><font class="font16">签到可获随机金币奖励  ?</font></a>
                <div class="signin_arrow"></div>
            </div>
            <div class="grid_stat myinfo_stat">
                <div class="grid_list" >
                    <ul>
                        <li><a href="home.php?mod=task" target="_blank"><span class="grid_list_num"  style="width: 85px;">0</span>今日任务</a></li>
                        <li><a href="home.php?mod=medal" target="_blank"><span class="grid_list_num"  style="width: 85px;">0</span>我的勋章</a></li>
                        <li><a href="home.php?mod=magic" target="_blank"><em><span class="grid_list_num"  style="width: 85px;"><font class="greencolor">0</font></span>我的道具</em></a></li>
                    </ul>
                </div>
            </div>

            <div class="featured _flslide">
                <div class="featured_list">
                    <ul class="_flslidelist">
                        <li style="display: inline-block;">
                            <h4 class="bluecolor">社区金币</h4>
                            <p class="bluecolor"><span><i class="left_line bluebg"></i>金币可以在社区兑换及消费<i class="right_line bluebg"></i></span></p>

                            <p><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=transfer" class="whitesmallbutton color2" target="_blank">我要转账<em>?</em></a><small class="pipe"></small><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=log" class="whitesmallbutton color2" target="_blank">收支明细<em>?</em></a></p>
                        </li>
                        <li style="display: none;">
                            <h4 class="bluecolor">帖子动态</h4>
                            <p class="bluecolor"><span><i class="left_line bluebg"></i>登陆查看帖子动态<i class="right_line bluebg"></i></span></p>
                            <p><a href="home.php?mod=space&amp;do=thread&amp;view=me" class="whitesmallbutton color2" target="_blank">我的帖子<em>?</em></a><small class="pipe"></small><a href="home.php?mod=space&amp;do=thread&amp;view=me&amp;type=reply" class="whitesmallbutton color2" target="_blank">我的回复<em>?</em></a></p>
                        </li>
                    </ul>
                </div>
                <div class="slide_picshow_status _flslidetit">
                    <span class="current"></span>
                    <span class=""></span>
                </div>
            </div>
        </div><!--[diy=diy5]--><div id="diy5" class="area"><div id="frameraciFi" class="frame move-span cl frame-1">
                <div id="frameraciFi_left" class="column frame-1-c"><div id="frameraciFi_left_temp" class="move-span temp"></div>
                    <div id="portal_block_14" class="block move-span"><div id="portal_block_14_content" class="dxb_bc">
                            <div class="box">
                                <h3 class="modname"><span class="more">{{CMS}}</span>全民话题</h3>
                                <div class="s_topic" style="background:url(/static/images/4.jpg); " width="292" height="180">
                                    <a href="#" class="s_topic_content">
                                        真正的智能硬件是什么？每个人心中都有属于自己的答案，而小编认为真正的智能应不仅是
                                        <span class="bluesmallblankbutton">参与讨论</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="portal_block_15" class="block move-span"><div id="portal_block_15_content" class="dxb_bc">		<div class="box s_forumlist">
                                <h3 class="modname">快速入口</h3>
                                <div class="s_links">
                                    <ul class="s_grid_line">
                                        @foreach($postBar as $vo)
                                            <li>
                                                <a href="{{url('forum/postForum?id='.$vo['PId'])}}"><i>
                                                        <img src="{{$vo['thumbnail']}}" width="24" height="24">
                                                    </i><small class="a_arrow"></small><em>{{$vo['describe']}}</em><span>{{$vo['bar_name']}}</span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="grid_stat">
                                    <div class="grid_list">
                                        <ul>
                                            @foreach($Bar  as $vo)
                                                <li>
                                                    <a href="{{url('forum/postForum?id='.$vo['PId'])}}" style="width:75px;">
                                                    <span class="grid_list_img">
                                                <img src="{{$vo['thumbnail']}}" width="30" height="30"></span>{{$vo['bar_name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div></div></div><div id="portal_block_16" class="block move-span"><div id="portal_block_16_content" class="dxb_bc">		<div class="box s_toplist">
                                <h3 class="modname"><span class="more">最近48小时贴量数据榜单</span>排行榜</h3>
                                <div class="s_links">
                                    <ul>
                                        @foreach($userList as $k=>$vo)
                                            <li>
                                                <a href="#" target="_blank"><span class="s_top_num redcolor"> @if($k+11=='3') <span class="s_top_num bluecolor">...</span> @else {{$k+1}}  @endif </span>
                                                    <i>
                                                        <img src="{{$vo['head_portrait']}}" onerror="this.onerror=null;this.src='/data/upload/images/10_avatar_middle.jpg'">
                                                    </i>
                                                    <em>0</em>
                                                    <span>{{$vo['name']}}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[/diy]-->
        <div class="box">
            <h3 class="modname"><span class="more"><a href="javascript:void(0)">{{CMS}}固件列表<em>&gt;&gt;</em></a></span> {{CMS}} 更新</h3>
            <div class="s_zui_update">
                <h3 title="MIUI 1.6.348">V1.0</h3>
                <p class="font12 color3">最后更新：2016年11月25日17:02:36</p>
                <p><a href="javascript:void(0)" class="bluesmallblankbutton">更新说明</a><span class="pipe"></span><a href="javascript:void(0) class="bluesmallblankbutton">卡刷包下载</a></p>
            </div>
            <div class="lh50 tc graytopborder">
                <a href="javascript:void(0)" target="_blank">OTA及卡刷教程</a><span class="pipe">|</span><a href="javascript:void(0)" target="_blank">开发版和稳定版说明</a>
            </div>
        </div>
        <div class="box _helplide">
            <div class="s_tab_title">
                <ul class="_helplidetit">
                    <li class="current">售后服务</li>
                    <li class="">关注我们</li>
                    <li>社区新手</li>
                </ul>
            </div>
            <div class="_helplidelist">
                <div style="display: block;">
                    <div class="grid_list">
                        <ul>
                            <li><a href="#" target="_blank"><span class="grid_list_img" style="width: 80px;"><img src="/static/images/s_customer.png" width="30" height="30"></span>在线咨询</a></li>
                            <li><a href="#" target="_blank"><span class="grid_list_img" style="width: 80px;"><img src="/static/images/s_map.png" width="30" height="30"></span>售后网点</a></li>
                            <li><a href="#" target="_blank"><span class="grid_list_img" style="width: 80px;"><img src="/static/images/s_service.png" width="30" height="30"></span>服务中心</a></li>
                        </ul>
                    </div>
                    <div class="customer_service">
                        <h4 class="fullfont color">400-8888-888</h4>
                        <p class="font12 color3">电话服务热线时间：9:00 - 21:00</p>
                    </div>
                </div>
                <div class="snswidget" style="display: none;">
                    <div class="sns_widget">
                        <a href="#" title="官方微博" target="_blank"><img src="/static/images/wb_sidebar.jpg" height="120" width="120"></a>
                        <p><a href="#" target="_blank" title="官方微博">官方微博</a></p>
                    </div>
                    <div class="sns_widget">
                        <img src="/static/images/wx.png" height="120" width="120" title="扫一扫关注微信">
                        <p>官方微信</p>
                    </div>
                </div>
                <div class="forum_newbie" style="display: none;">
                    <a href="#" target="_blank"><span class="a_arrow"></span>发帖与回复</a>
                    <a href="#" target="_blank"><span class="a_arrow"></span>社区总版规</a>
                    <a href="#" target="_blank"><span class="a_arrow"></span>赚金币</a>
                    <a href="#" target="_blank"><span class="a_arrow"></span>任务体系</a>
                    <a href="#" target="_blank"><span class="a_arrow"></span>荣誉勋章</a>
                    <a href="#" target="_blank"><span class="a_arrow"></span>产品认证</a>
                </div>
            </div>
        </div></div>
</div>


@include('index.public.tail')