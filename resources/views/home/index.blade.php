<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{@$site->title}}</title>
    <meta name="description" content="{{@$site->desc}}">
    <meta name="keywords" content="{{@$site->keywords}}">
    <link rel="shortcut icon" href="/home/img/iocn.jpg">
    <link rel="stylesheet" href="/home/css/main.css"/>
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
            <P>网站简单的介绍</P>
        </div>
        @foreach($articles as $article)
            <div class="article" data-id="{{$article->id}}">
                <div class="thumb">
                    <a href="{{route('home.show',$article->id)}}" title="{{$article->title}}">
                        <img style="width: 130px;height: 100px" width="130" height="100" src="{{$article->image}}" alt="{{$article->title}}" title=""></a>
                </div>
                <div class="artcont">
                    <h2 style="height: 18px;"><a href="{{route('home.show',$article->id)}}"
                                                 title="{{$article->title}}" rel="bookmark">{{$article->title}}</a></h2>
                    <div class="time" style="height: 30px">
                        <ul>
                            <li>{{substr($article->updated_at,0,10)}} @</li>
                            <li><a href="{{route('home.category',$category->id)}}">{{$article->category->name}}</a></li>
                        </ul>
                    </div>
                    <div class="p" style="height: 58px">
                        <p>{{$article->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="page">
            {{$articles->links()}}
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
