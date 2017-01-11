
<script src="<?php echo e(asset('/static/js/jquery.min.js')); ?>"></script>
<script>

    var index = layer.load(3, {
        shade: [0.1,'#fff'],
        time:'1000'
    });

    document.onreadystatechange = subSomething;//当页面加载状态改变的时候执行这个方法.
    function subSomething() {
        //页面加载完成
    }

</script>
<div id="scrolltop" class="js_scrolltop" style="left: auto; right: 0px; visibility: visible; bottom: 100px; opacity: 1;">
    <a title="返回顶部" class="scrolltopa"><s class=""><img src="<?php echo e(asset('/data/common/scrolltop_1.png')); ?>" alt="" ></s><b>返回顶部</b></a>
</div>
<div class="fm_footer">
    <div class="fm_line"></div>
    <div id="ft" class="content">
        <div class="right font12 color3">© 2001-2013 <a href="javascript:void(0)" target="_blank">Comsenz Inc.</a>
            Powered by <a href="#" target="_blank">Discuz!</a>
            <em>X3.2</em>
        </div>
        <a href="#" target="_blank">Comsenz Inc.</a><span class="pipe">|</span>
        <a href="javascript:;" onclick="">举报</a>
        <span class="pipe">|</span>
        <a href="archiver/">Archiver</a>
        <span class="pipe">|</span>
        <a href="forum.php?mobile=yes">手机版</a>
        <span class="pipe">|</span>
        <a href="forum.php?mod=misc&amp;action=showdarkroom">小黑屋</a>
        <span class="pipe">|</span>
        <a href="misc.php?mod=tag">标签</a><span class="pipe">|</span>
    </div>
</div>

</body>
</html>
