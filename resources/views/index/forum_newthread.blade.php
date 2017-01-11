@include('index.public.head')
<div class="breadcrumbs content">
    <a href="./" title="首页">唯美设计</a> <em>›</em> <a href="forum.php">论坛</a> <em>›</em> <a href="forum.php?gid=1">演示</a> <em>›</em> <a href="forum-2-1.html">设计欣赏</a>

    <em>»</em>
    发表帖子
</div>
<link rel="stylesheet" href="{{asset('/static/css/post.css')}}">


<div id="ct" class="box content">

    <div id="editorbox">
        <div class="tab graybg">
            <ul class="graybg p20">
                <li style="float:right;"><a id="draftlist" href="javascript:;" onclick="clearLocalData()">清空草稿箱(<strong>0</strong>)</a></li>
                <li class="a"><a href="javascript:;" onclick="switchpost('forum.php?mod=post&amp;action=newthread')">发表帖子<span></span></a></li><li><a href="javascript:;" onclick="switchpost('forum.php?mod=post&amp;action=newthread&amp;special=1')">发起投票<span></span></a></li></ul>
        </div>

        <div id="draftlist_menu" style="display:none">
            <ul>
                <li>
                    <a href="forum.php?mod=post&amp;action=edit&amp;fid=2&amp;tid=57&amp;pid=125" class="xi2" target="_blank">3123123</a>
                </li>
            </ul>
        </div>


        <div id="postbox" class="p20">
            <form method="post" autocomplete="off" id="postform" action="" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="postBa" id="postBa" value="{{$postBar}}">
                <div class="clear mb15">
                    <div class="posttid">
                        <a href="javascript:;" id="typeid_ctrl" style="width:80px" tabindex="1" initialized="true">产品公告</a>
                    </div>
                    <input type="text" name="postName" id="postName" class="inputboxtitle" value=""  style="width: 25em" tabindex="1">

                    <span class="numstat" id="subjectchk">还可输入 <strong id="checklen">80</strong> 个字符</span>

                </div>
                <link rel="stylesheet" href="//res.layui.com/layui/build/css/layui.css"  media="all">
                <div >
                    <script type="text/javascript" charset="utf-8" src="{{asset('/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('/ueditor/ueditor.all.min.js')}}"> </script>
                    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                    <script type="text/javascript" charset="utf-8" src="{{asset('/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
                </div>
                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                    <legend>常规属性</legend>
                    <div class="exfm cl" id="extra_additional_c" style="display: block;">
                        <table cellspacing="0" cellpadding="0">
                            <tbody><tr>
                                <td class="xw1" valign="top">可见属性</td>
                                <td>
                                    <label for="hiddenreplies"><input checked type="checkbox" name="postJurisdiction"  class="pc" value="1">全部</label>
                                    <label for="hiddenreplies"><input type="checkbox" name="postJurisdiction" class="pc" value="2">游客可见</label>
                                    <label for="hiddenreplies"><input type="checkbox" name="postJurisdiction" class="pc" value="3">认证会员可见</label>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </fieldset>



            </form>
            <div class="postbutton">
                <button type="button" id="postsavesubmit" class="graysmallbutton" onclick="getLocalData()"><em>保存草稿</em></button>
                <button type="submit" id="postsubmit "  onclick="postsubmitForm()" class="bluesmallbutton" >
                    <span>发表帖子</span>
                </button>

            </div>

        </div>
    </div>
</div>


<script>
    function postsubmitForm(){

        var ValData=$('#postform').serialize();

        $.ajax({
            type:"POST",
            dataType:'json',
            url:'{{url('forum/memberPost')}}',
            data:ValData,
            success:function(msg){
                if(msg.state==1){
                    success(msg.msg,'{{url('forum/postForum')}}?_token={{csrf_token()}}&id=<?php echo  $_GET['id']?>');
                }else{
                    this_error("操作失败");
                }
            }
        });
    }
</script>

<script type="text/javascript">






    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
@include('index.public.tail')

