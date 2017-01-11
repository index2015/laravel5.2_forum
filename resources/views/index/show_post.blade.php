@include('index.public.head')
<div class="breadcrumbs content">
    <a href="./" title="首页">首页</a><em>»</em>论坛<em>»</em><a href="forum-2-1.html">{{$info['nameBarName']}}</a><em>»</em>
    <a href="thread-44-1-1.html">{{$info['postName']}}</a>
</div>
<div class="content" id="viewthread">
    <div class="main viewthread">
        <div class="box"><div id="post_72" class="viewthread_main firstfloor">
                <div class="viewthread_title">
                    <a href="javascript:;" id="manage2_72" class="manage_group2 opacity" onmouseover="$('manage2_72').id = 'manage2_72tmp';this.id = 'manage2_72';showMenu({'ctrlid':this.id})"></a>
                    <div class="viewthread_con">
                        <h1>
                            <a href="forum.php?mod=viewthread&amp;tid=44&amp;fromuid=12" onclick="return copyThreadUrl(this, '唯美设计')"><span id="thread_subject">{{$info['postName']}}</span></a>

                        </h1>
<span>
</span>
                        <div class="viewthread_top">
                            <em id="authorposton72">{{date('Y-m-d H:i:s',$info['postAddTime'])}}</em><div class="viewthreadtop_storey right"><span class="s_view" title="查看">
                                </span>{{$info['postAccessTimes']}}<span class="pipe"></span>
                                <span class="s_reply" title="回复">
                                </span>{{$info['numberOfReviews']}}</div>
                        </div>

                    </div>
                </div>

                <div class="viewthread_con_first " id="pid72" summary="pid72">
                    <div class="viewthread_content" author="test" pid="72" formhash="d163235f">
                        <div class="viewthread_table">
                            <table cellspacing="0" cellpadding="0"><tbody><tr><td id="postmessage_99">
                                        <?php echo $info['postContent'];?><br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--回复帖回复列表-->
                    <div id="comment_72">
                    </div>

                    <div id="viewthread_foot">
                        <div class="viewthread_foot">
                            <div class="right">
                                <a class="greencolor" href="forum.php?mod=post&amp;action=edit&amp;fid=2&amp;tid=44&amp;pid=72&amp;page=1">编辑</a>
                                <a href="forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=44&amp;repquote=72&amp;extra=page%3D1&amp;page=1"><span class="s_reply"></span>回复</a>
                            </div>
                            <div class="bdsharebuttonbox dib bdshare-button-style0-16" data-bd-bind="1480052776199">分享至：<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">微博<i></i></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_more" data-cmd="more"></a></div>
                            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["mshare","qzone","kaixin001","tieba","sqq"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                            <span class="cutline"></span><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=44&amp;formhash=d163235f" class="k_favorite" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖"><span class=""></span>收藏</a>
                        </div>
                    </div>
                </div>
                <ul id="manage2_72_menu" class="p_pop " style="display: none;">
                    <li>
                    </li>
                    <li>
                        <a href="forum.php?mod=viewthread&amp;tid=44&amp;page=1&amp;authorid=12" rel="nofollow" class="" title="只看该作者">只看该作者</a>  </li>
                </ul></div>
            <form method="post" autocomplete="off" id="vfastpostform"  onsubmit="this.message.value = parseurl(this.message.value);ajaxpost('vfastpostform', 'return_reply', 'return_reply', 'onerror');return false;">
                <input type="hidden" name="formhash" value="d163235f">
                <div id="viewthread_fastreply">
                    <div class="viewthread_fastreply" id="vfastposttb">
                        <div class="viewthread_fastreplybutton">
                            <button type="submit" name="replysubmit" id="vreplysubmit" value="true">快速回复</button></div>
                        <div class="viewthread_fastreplyinput"><input type="text" name="message" id="vmessage" ></div>
                    </div>
                    <div id="vfastpostseccheck"></div>
                </div>
            </form>

        </div>
        <div class="box" id="replylists">
            <div class="viewthread_main replylist_title">
                <strong>0</strong> 条回帖
            </div>

            <div id="postlistreply"><div id="post_new" class="viewthread_main" style="display: none"></div></div>

            <form method="post" autocomplete="off" name="modactions" id="modactions">
                <input type="hidden" name="formhash" value="d163235f">
                <input type="hidden" name="optgroup">
                <input type="hidden" name="operation">
                <input type="hidden" name="listextra" value="page%3D1">
                <input type="hidden" name="page" value="1">
            </form>


            <div class="nextpage"></div>


        </div>
        <div class="clear">
            <div class="right">
            </div>
        </div>
        <script type="text/javascript">
            var postminchars = parseInt('10');
            var postmaxchars = parseInt('10000');
            var disablepostctrl = parseInt('0');
        </script>
        <style>.swfupload {margin: -7px 0 0 -5px;}</style>

        <div id="f_pst" class="box">
            <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=44&amp;extra=page%3D1&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)">
                <div class="viewthread_pst">
                    <div class="viewthread_reply">
                        <span id="fastpostreturn"></span>
                        <div class="cl">

                            <div class="hasfsl" id="fastposteditor">
                                <div class="tedt mtn">

                                    <div class="area">
                                        <textarea rows="6" cols="80" name="message" id="fastpostmessage" onkeydown="seditor_ctlent(event, 'fastpostvalidate($(\'fastpostform\'))');" tabindex="4" class="pt"></textarea>
                                    </div>
                                    <div class="bar">
                                                                    <span class="y">
                                                                               <a href="">高级模式</a>
                                                                    </span>
                                        <div class="fpd">
                                            <a href="javascript:;" class="fsml" id="fastpostsml" onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;">Smilies</a>
                                            <script type="text/javascript" reload="1">smilies_show('fastpostsmiliesdiv', 8, 'fastpost');</script>
                                            <object id="SWFUpload_0" type="application/x-shockwave-flash" data="" width="39" height="39" class="swfupload">
                                                <param name="wmode" value="transparent">
                                                <param name="movie" value="template/iscwo_zuk/iscwo/common/swfupload.swf?preventswfcaching=1480052775980"><param name="quality" value="high">
                                                <param name="allowScriptAccess" value="always">
                                                <param name="flashvars" value=""></object>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="seccheck_fastpost"></div>
                    <script type="text/javascript">
                        var editorid = '';
                        var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
                    </script>

                    <input type="hidden" name="posttime" id="posttime" value="1480052724">
                    <div class="upfl hasfsl">
                        <table cellpadding="0" cellspacing="0" border="0" id="attach_tblheader" style="display: none;">
                            <tbody><tr>
                                <td>点击附件文件名添加到帖子内容中</td>
                                <td class="atds" style="display:none;">描述</td>
                                <td class="attc"></td>
                            </tr>
                            </tbody></table>
                        <div class="fieldset flash" id="attachlist"></div>

                    </div>

                    <input type="hidden" name="formhash" value="d163235f">
                    <input type="hidden" name="usesig" value="1">
                    <input type="hidden" name="subject" value="  ">
                    <p class="ptm pnpost clear">
                        <button type="submit"  name="replysubmit" id="fastpostsubmit" class="greensmallbutton right" value="replysubmit" tabindex="5"><strong>发表回复</strong></button>

                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="sidebar">
        <div class="box">
            <div class="viewthread_author">
                <div class="r_arrow"></div>
                <div class="viewthread_author_avatar" id="favatar72">
                    <a href="space-uid-12.html" target="_blank"><img src="http://120.25.120.167/demo/zuk/uc_server/avatar.php?uid=12&amp;size=middle"></a>
                </div>
                <div class="viewthread_author_info">
                    <p>
                        <a href="space-uid-12.html" target="_blank"><strong>test</strong></a>
                    </p>
                    <a href="home.php?mod=spacecp&amp;ac=usergroup&amp;gid=13" target="_blank"><font class="redcolor">666</font></a>
                </div>
                <div class="viewthread_author_stat"><ul>
                        <li><a href="home.php?mod=space&amp;uid=12&amp;do=profile&amp;from=space" target="_blank">0</a><p>积分</p></li>
                        <li><a href="home.php?mod=space&amp;uid=12&amp;do=thread&amp;view=me&amp;from=space" target="_blank">0</a><p>主题</p></li>
                        <li><a href="home.php?mod=space&amp;uid=12&amp;do=thread&amp;view=me&amp;from=space&amp;type=reply" target="_blank">0</a><p>回帖</p></li>
                        <li><a href="home.php?mod=space&amp;uid=12&amp;do=profile&amp;from=space" target="_blank">0</a><p>好友</p></li>
                    </ul>
                </div>
                <div class="viewthread_medal">
                    <a href="home.php?mod=medal">
                        <img src="/static/image/common/badge06.png" alt="最佳新人" title="最佳新人
注册账号后积极发帖的会员">
                    </a>
                </div>

                <div class="viewthread_author_act">
                    <a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_12&amp;touid=12&amp;pmid=0&amp;daterange=2" id="a_sendpm_12" class="bluesmallbutton" onclick="showWindow('showMsgBox', this.href, 'get', 0)" title="发消息">发消息</a><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=12&amp;handlekey=addfriendhk_12" class="greensmallbutton" id="a_friend" onclick="showWindow(this.id, this.href, 'get', 0);">加好友</a>
                </div>

            </div>
            <div class="viewthread_author_threads s_timeline">
                <div class="s_text_list">
                    <ul>
                        <li><i><span></span></i><a href="thread-63-1-1.html" title="我想做一个很完整的测试" target="_blank">我想做一个很完整的测试</a><p></p></li>
                        <li><i><span></span></i><a href="thread-62-1-1.html" title="7000元买iPhone7P不如2000元买微单，小蚁再放大招助力单身狗！" target="_blank">7000元买iPhone7P不如2000元买微单，小蚁再放大招助力单身狗！</a><p></p></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@include('index.public.tail')