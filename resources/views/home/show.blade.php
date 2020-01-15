<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> {{$article->category->name}}-{{$article->title}} </title>
    <meta name="description" content="{{$article->description}}">
    <meta name="keywords" content="{{objToString($article->tags,'name')}}">
    <link rel="shortcut icon" href="/home/img/iocn.jpg">
    <link rel="stylesheet" href="/home/css/main.css"/>
    <link rel="stylesheet" href="/home/css/show.css"/>
    <script type="text/javascript" src="/home/js/jquery.min.js"></script>
</head>
<body>
<header id="nav">
    <div class="nav">
        <lu class="nav_left">
            <li><a href="{{route('home.index')}}">首页</a></li>
            @foreach($categories as $category)
                <li><a href="{{route('home.category',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </lu>
    </div>
</header>
<section id="content">
    <div class="cont_l">
        <div class="broadcast">
            <a href="{{route('home.index')}}">首页</a><span> » » </span><a
                    href="{{route('home.category',$article->category_id)}}">{{$article->category->name}}</a>
        </div>
        <div class="show_article">
            <h1>{{$article->title}}</h1>
            <div class="time_f">
                <ul>
                    <li>
                        发布：{{substr($article->updated_at,0,10)}} ┊ 分类：
                    </li>
                    <li>
                        <a href="{{route('home.category',$article->category_id)}}">{{$article->category->name}}</a>
                    </li>
                </ul>
            </div>
            <div class="show_content">
                {!!   $article->markdown_html_code !!}
            </div>
        </div>
        <div class="updown">@if($articleup->id == $article->id)
                <div class="updowen_on" style="float:left">« « <a href="{{route('home.index')}}"
                                                                  title="首页">首页</a>
                </div>@else
                <div class="updowen_on" style="float:left">« « <a href="{{route('home.show',$articleup->id)}}"
                                                                  title="{{$articleup->title}}">{{$articleup->title}}</a>
                </div>@endif
            @if($articledown->id == $article->id)
                <div class="updowen_on" style="float:right"><a href="{{route('home.index')}}"
                                                               title="首页">首页</a>» »
                </div>@else
                <div class="updowen_on" style="float:right"><a href="{{route('home.show',$articledown->id)}}"
                                                               title="{{$articledown->title}}">{{$articledown->title}}</a>»
                    »
                </div>@endif
        </div>
        <div class="clear"></div>
        <div class="tuijian">
            <ul>
                @foreach($post2 as $post)
                    <li>
                        <div class="tui_img">
                            <a href="{{route('home.show',$post->id)}}" title="{{$post->title}}">
                                <img width="130" height="100"
                                     src="{{$post->image}}" alt="{{$post->title}}" >
                            </a>
                        </div>
                        <div class="r_title" style="padding: 10px;"><a href="{{route('home.show',$post->id)}}"
                                                                       title="{{$post->title}}" target="_blank"
                                                                       rel="bookmark">{{$post->title}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="cont_r">
        <div class="ad_one"></div>
        <div class="ad_two"></div>
        <div class="ad_three"></div>
    </div>
</section>
<div class="clear"></div>
<footer id="footer">
    <div class="link">
        <a href="http://www.miibeian.gov.cn" target="blank">{{@$site->site}}</a>
        <br/>
</footer>
</body>
</html>
