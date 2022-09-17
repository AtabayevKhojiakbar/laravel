@extends('welcome')
@section('amal')


<!-- Begin Top Author Page
================================================== -->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 col-md-offset-2">
            <div class="mainheading">
                <div class="row post-top-meta authorpage">
                    <div class="col-md-10 col-xs-12">
                        <h1>{{ $posts->first()->avtor->name }}</h1>
                        <span class="author-description">Founder of <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a> and creator of <strong>"Mediumish"</strong> theme that you're currently previewing. I professionally develop premium themes, templates & scripts since the Apocalypse (2012). You can reach me out on the social links below.</span>
                        <div class="sociallinks"><a  target="_blank" href=""><i class="fa fa-facebook"></i></a> <span class="dot"></span> <a target="_blank" href=""><i class="fa fa-google-plus"></i></a></div>
                        <a target="_blank" href="" class="btn follow">Follow</a>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Top Author Meta
================================================== -->

<!-- Begin Author Posts
================================================== -->
<div class="graybg authorpage">
    <div class="container">
        <div class="listrecent listrelated">

            <!-- begin post -->
            @foreach($posts as $user)
            <div class="authorpostbox">
                <div class="card">
                    <a href="">
                        <img class="img-fluid img-thumb" src='{{asset("/posts/images/$user->img")}}' alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="{{route('single',$user->id)}}">{{$user->title}}</a></h2>
                        <h4 class="card-text">{{ \Illuminate\Support\Str::words($user->text,10) }}</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
									<span class="meta-footer-thumb">
									<a href="{{route('authors',$user->user_id)}}"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
									</span>
                                <span class="author-meta">
									<span class="post-name"><a href="{{route('authors',$user->user_id)}}">{{ $user->avtor->name }}</a></span><br/>
									<span class="post-date">{{ $user->updated_at }}</span><span class="dot"></span><span class="post-read">{{$user->view}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></span>
									</span>
                                <span class="post-read-more"><a href="" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end post -->

        </div>
    </div>
</div>
<!-- End Author Posts
================================================== -->


@endsection

