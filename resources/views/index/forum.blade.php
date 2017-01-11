@include('index.public.head')
<div class="breadcrumbs content">
    <a href="./" title="首页">唯美设计</a><em>»</em><a href="forum.php">论坛</a></div>
<div class="content" id="forumlist">
    <div class="oneway_text box">
        今日新帖<em>120</em>
        <span class="pipe">|</span>昨日贴数<em>0</em>
        <span class="pipe">|</span>总帖数<em>120</em>
        <span class="pipe">|</span>会员总数<em>12</em>
    </div>
    <style>.mainforumicon.img img {width: 150px;height: 90px;}.mainforumicon.vime a {width: 100px;display: block;overflow: hidden;}
        .mainforumicon.vime img{width: 80px;height: 80px;}
    </style>
    {{--我的收藏--}}
    <div class="box" <?php if(session('uid')==null){echo "hidden";};?>>
        <h3 class="modname">
            <a href="#">我收藏的版块</a></h3>
        <div class="forumlist">
            <div class="mainforum">
                <div class="mainforumicon vime">
                    <a href="{{url('forum/postForum')}}"><img src="http://127.0.0.1/static/images/common_39_icon.png" align="left" alt=""></a></div>
                <div class="mainforumcontent">
                    <h2><a href="{{url('forum/postForum')}}" >设计欣赏</a></h2>
                    <p style="max-height: 21px;overflow: hidden;">社区最新最快版块简介</p>
                    <p>今日：<font class="bluecolor">52</font><span class="pipe">|</span>主题: 34</p>
                </div>
            </div>
            <div class="mainforum">
                <div class="mainforumicon vime">
                    <a href="forum-39-1.html"><img src="http://127.0.0.1/data/upload/images/common_2_icon.png" align="left" alt=""></a></div>
                <div class="mainforumcontent">
                    <h2><a href="forum-39-1.html" style="color: a;">大杂烩</a></h2>
                    <p style="max-height: 21px;overflow: hidden;">在这里谈天说地，广交好友</p>
                    <p>今日：<font class="bluecolor">15</font><span class="pipe">|</span>主题: 5</p>
                </div>
            </div>
        </div>
    </div>

    <div class="big_forumlist">
        @foreach($recommendList as $vo)
            <div class="mainforum box">
                <div class="mainforumicon img">
                    <a href="{{url('forum/postForum')}}?_token={{csrf_token()}}&id={{$vo->PId}}"  @if($vo->the_new_page==1)  target="_blank" @endif><img src="{{$vo->thumbnail}}" align="left" alt=""></a></div>
                <div class="mainforumcontent">{{$vo->bar_name}}</a></h2>
                    <p style="max-height: 21px;overflow: hidden;">{{$vo->describe}}</p>
                    <p class="mainforumcontentinfo">今日: <font class="bluecolor">{{$vo->today}}</font><span class="pipe">|</span>主题: {{$vo->theme}}</p>
                </div>
            </div>
        @endforeach
    </div>
    @foreach($list as $v)
        <div class="box">
            <h3 class="modname"><a href="forum.php?gid=43" style="">{{$v->bar_name}}</a></h3>
            <div class="forumlist">
                 @foreach($v->data as $vo)
                <div class="mainforum">
                    <div class="mainforumicon vime">
                        <a href="{{url('forum/postForum')}}?_token={{csrf_token()}}&id={{$vo->PId}}"><img src="{{$vo->thumbnail}}" align="left" alt=""></a></div>
                    <div class="mainforumcontent">
                        <h2><a href="{{url('forum/postForum')}}?_token={{csrf_token()}}&id={{$vo->PId}}">{{$vo->bar_name}}</a></h2>
                        <p style="max-height: 21px;overflow: hidden;">{{$vo->describe}}</p>
                        <p>今日：<font class="bluecolor">{{$vo->today}}</font><span class="pipe">|</span>主题: {{$vo->theme}}</p>
                    </div>
                </div>
                     @endforeach
            </div>
        </div>
    @endforeach

</div>
@include('index.public.tail')