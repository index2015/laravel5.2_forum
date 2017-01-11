<?php echo $__env->make('index.public.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="breadcrumbs content">
    <a href="./" title="首页">唯美设计</a><em>»</em><a href="#">论坛</a> <em>›</em> <a href="#">演示</a><em>›</em> <a href="">设计欣赏</a></div>

<div class="content forumdisplay">
    <div class="box">
        <div class="forum_top_icon"><img src="<?php echo e($barInfo->thumbnail); ?>" alt="<?php echo e($barInfo->bar_name); ?>" height="140" width="140"></div>
        <div class="forum_top_name">
            <div class="f_search"><form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
                    <input type="hidden" name="mod" id="scbar_mod" value="forum">
                    <input type="hidden" name="formhash" value="81696513">
                    <input type="hidden" name="srchtype" value="title">
                    <input type="hidden" name="srhfid" value="2">
                    <input type="hidden" name="srhlocality" value="forum::forumdisplay">
                    <div class="forum_search">
                        <ul>
                            <li class="scbarbox"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech="" speech="" class=" xg1" placeholder="请输入搜索内容"></li>
                            <li class="scbarbutton"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" value="true">搜索</button></li>
                        </ul>
                    </div>
                </form>


                <script type="text/javascript">
                    initSearchmenu('scbar', '');
                </script>
            </div>
            <h2><a href="forum-2-1.html"><?php echo e($barInfo->bar_name); ?></a></h2>
            <p><?php echo e($barInfo->describe); ?></p>
        </div>
        <div class="forum_top_info">
            <div class="right">
                <a href="#" id="a_favorite" class="greencolor" onclick="showWindow(this.id, this.href, 'get', 0);">收藏本版 <strong class="xi1" id="number_favorite">(<span id="number_favorite_num">1</span>)</strong></a>
            </div>
            <div class="right">
                版主: <a href="#" class="notabs" c="1" mid="card_2953">MARO_HO</a>, <a href="#" class="notabs" c="1" mid="card_6552">JamDeng</a>,
                <a href="#" class="notabs" c="1" mid="card_3634">Neven</a>, <a href="#" class="notabs" c="1" mid="card_5316">admin</a>
                <span class="pipe" style="margin:0 8px;">|</span></div>今日: <?php echo e($barInfo->today); ?><span class="pipe">|</span>主题:<?php echo e($barInfo->theme); ?></div>
    </div>

    <div class="main">


        <div class="box main_box">
            <!--[diy=diy1]--><div id="diy1" class="area"><div id="frameZoOCa1" class="frame move-span cl frame-1"><div id="frameZoOCa1_left" class="column frame-1-c">
                        <div id="frameZoOCa1_left_temp" class="move-span temp"></div><div id="portal_block_17" class="block move-span"><div id="portal_block_17_content" class="dxb_bc"><!-- 小图推荐 -->
                                <h3 class="modname">推荐阅读</h3>
                                <div class="recommend_pic_small">
                                    <ul>
                                        <li><a href="thread-31-1-1.html" target="_blank" title="如何创造智能硬件 | EmieLab x bong"><img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="thread-26-1-1.html" target="_blank" title="腕上精彩 不止一面 | HUAWEI WATCH经典系列">
                                                <img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100"></a>
                                        </li>
                                        <li>
                                            <a href="thread-23-1-1.html" target="_blank" title="高清旗舰，大有看投">
                                                <img src="/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg" width="228" height="100"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="portal_block_18" class="block move-span"><div id="portal_block_18_content" class="dxb_bc"><!-- 文字推荐（原首页推荐列表） -->
                                <div class="recommend_article_list">
                                    <ul>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                        <li><a href="#" target="_blank" title="老王家凉粉巨难吃"><em>●</em>如何创造智能硬件 | EmieLab x bong</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--[/diy]-->

            <div class="graybg graytopborder">
                <div class="tab"> <ul>
                        <li class="a"><a href="#">全部<span></span></a></li>
                        <li><a href="#">今日<span></span></a></li>
                        <li><a href="#">筛选<span></span></a></li>

                    </ul>
                </div>
            </div>


            <div class="oneway_text graybottomborder">
                <div id="atarget" onclick="setatarget(1)" class="atarget_-1" title="在新窗口中打开帖子"><i></i>新窗</div>

                <div id="threadthumb" class="threadthumb_yes" onclick="changethreadthumb()"><i></i>图片<span class="pipe">|</span></div>
                <ul>
                    <li><a href="<?php echo e(url('forum/postForum?id='.$_GET['id'].'&postAddTime=postAddTime')); ?>"><i class="newthead"></i>最新</a></li>

                    <li><a href="<?php echo e(url('forum/postForum?id='.$_GET['id'].'&postTop=1')); ?>"><i class="hotthead"></i>热门</a></li>
                    <li><a href="<?php echo e(url('forum/postForum?id='.$_GET['id'].'&postEssence=1')); ?>"><i class="verythead"></i>精华</a></li>
                </ul>
            </div>

            <script type="text/javascript">
                function txtChang(){
                    $('#livepostsubmit').css('display','block');
                }
            </script>



            <div class="thread minh flow-default">
                <form method="post" autocomplete="off" name="moderate" id="moderate" action="#">
                    <?php foreach($dataList as $k=>$vo): ?>
                        <div class="threadlist" id="stickthread_<?php echo e($k+1); ?>"  >
                            <div class="threadlist_stat"><a href="<?php echo e(url('forum/showPost?id='.$vo['id'].'&postBar='.$vo['postBar'])); ?>" title="0 个回帖" ><?php echo e($vo['read']); ?></a></div>
                            <div class="threadlist_title">
                                <div class="right"></div>
                                <a href="<?php echo e(url('forum/showPost?id='.$vo['id'].'&postBar='.$vo['postBar'])); ?>"  target="" class="gr" ><?php echo e($vo['postName']); ?></a>
                                <img src="/static/images/filetype/image_s.gif" alt="attach_img" title="图片附件" align="absmiddle">

                                <?php if($vo['postEssence']==1): ?>
                                    <span class="bluesmallbox" title="精华 2">精华</span>
                                <?php endif; ?>
                                <?php if($vo['postTop']==1): ?>
                                    <span class="redsmallbox" title="全局置顶">置顶</span>
                                <?php endif; ?>
                            </div>
                            <div class="threadlist_imglist">
                                <div>
                                    <a href="<?php echo e(url('forum/showPost?id='.$vo['id'].'&postBar='.$vo['postBar'])); ?>">
                                        <?php echo $vo['postContent'];?>
                                    </a>
                                </div>
                            </div>
                            <div class="threadlist_info">
                                <div class="lastreply"><a href="#"> <?php echo e($vo['userName']); ?> @ <?php echo e(date('Y-m-d H:i:s',$vo['postAddTime'])); ?></a></div>

                                <a href="#l" c="1" mid="card_9294">落尘寰</a> @ 2016-4-10
                            </div>
                        </div>
                    <?php endforeach; ?>


                    <div id="separatorline">帖子列表</div>

                </form>
            </div>

            <div class="nextpage"><a href="javascript:void(0)">加载更多</a></div>
        </div>


        <div class="pg" >


            <?php echo $dataList->appends(['id' =>$_GET['id']])->links(); ?>


        </div>
    </div>


    <div class="sidebar">
        <div class="box p20">
            <a href="<?php echo e(url('forum/newthread?id=')); ?><?php echo e($barInfo->PId); ?>" class="bluebigbutton" title="发新帖">发新帖</a>
        </div>
        <div class="box pic_text_list">
            <h3 class="modname">子版块</h3>
            <style>.s_tab_content a img {width: 48px;height: 48px;}</style>
            <div class="s_tab_content">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/static/images/common_42_icon.png" align="left" alt=""></a>
                        <a href="#" style="">
                            <strong>BUG中心</strong>
                        </a>
                        <p>今日：<font class="redcolor">0</font>
                            <span class="pipe">|</span>主题：0
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!--[diy=diy2]--><div id="diy2" class="area"><div id="frameN9ZUZl" class="frame move-span cl frame-1"><div id="frameN9ZUZl_left" class="column frame-1-c"><div id="frameN9ZUZl_left_temp" class="move-span temp"></div><div id="portal_block_20" class="block move-span"><div id="portal_block_20_content" class="dxb_bc">		<div class="box s_timeline">
                                <h3 class="modname">推荐阅读</h3>
                                <div class="s_text_list">
                                    <div class="nano has-scrollbar">
                                        <ul class="nano-content" tabindex="0" style="right: -17px;">
                                            <li><i><span></span></i><a href="thread-50-1-1.html" target="_blank">老王家凉粉巨难吃</a><div></div><p>2016-08-28</p></li>
                                            <li><i><span></span></i><a href="thread-26-1-1.html" target="_blank">腕上精彩 不止一面 | HUAWEI WAT</a><div></div><p>2016-04-10</p></li>
                                            <li><i><span></span></i><a href="thread-12-1-1.html" target="_blank">Tesla Model S 地球上最酷的量产</a><div></div><p>2016-04-10</p></li>
                                            <li><i><span></span></i><a href="thread-56-1-1.html" target="_blank">侧分哦</a><div><p class="redlightbg redcolor">
                                                        呃呃呃呃呃
                                                    </p></div><p>2016-10-25</p></li>

                                        </ul>
                                        <div class="nano-pane"><div class="nano-slider" style="height: 282px; transform: translate(0px, 0px);"></div></div>
                                    </div>
                                </div>
                            </div></div></div><div id="portal_block_19" class="block move-span"><div id="portal_block_19_content" class="dxb_bc"><div class="box">
                                <h3 class="modname"><span class="more">老王家凉粉巨难吃</span>全民话题</h3>
                                <div class="s_topic" style="background:url(/data/upload/article/c7eff45510ef6dc9de4742ef2e2ba291.jpg); " width="310" height="180">
                                    <a href="thread-50-1-1.html" class="s_topic_content">

                                        凉粉不好吃
                                        <span class="bluesmallblankbutton">参与讨论</span>
                                    </a>
                                </div>
                            </div></div></div></div></div></div><!--[/diy]-->		<div class="box">
            <h3 class="modname"><span class="more"><a href="#">MIUI固件列表<em>&gt;&gt;</em></a></span>MIUI更新</h3>
            <div class="s_zui_update">
                <h3 title="MIUI 1.6.348">1.6.348</h3>
                <p class="font12 color3">最后更新：2016年04月11日</p>
                <p><a href="#" class="bluesmallblankbutton">更新说明</a><span class="pipe"></span><a href="#" class="bluesmallblankbutton">卡刷包下载</a></p>
            </div>
            <div class="lh50 tc graytopborder">
                <a href="#" target="_blank">OTA及卡刷教程</a><span class="pipe">|</span><a href="#" target="_blank">开发版和稳定版说明</a>
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
                            <li><a href="#" target="_blank"><span class="grid_list_img"><img src="/static/images/s_customer.png" width="30" height="30"></span>在线咨询</a></li>
                            <li><a href="#" target="_blank"><span class="grid_list_img"><img src="/static/images/s_map.png" width="30" height="30"></span>售后网点</a></li>
                            <li><a href="#" target="_blank"><span class="grid_list_img"><img src="/static/images/s_service.png" width="30" height="30"></span>服务中心</a></li>
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
<?php echo $__env->make('index.public.tail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>