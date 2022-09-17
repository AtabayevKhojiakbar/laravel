@extends('welcome')
@section('amal')

    <!-- Begin Article
================================================== -->
    <div class="container">
        <div class="row">

            <!-- Begin Post -->
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="mainheading">

                    <!-- Begin Top Meta -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <a href="{{route('authors',$post->user_id)}}"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
                        </div>
                        <div class="col-md-10">
                            <a class="link-dark" href="{{route('authors',$post->user_id)}}">{{$post->avtor->name}}</a><a href="#" class="btn follow">Follow</a>
                            <span class="author-description">Founder of WowThemes.net and creator of <b>"Mediumish"</b> theme that you're currently previewing. Developing professional premium themes, templates, plugins, scripts since 2012.</span>
                            <span class="post-date">{{$post->updated_at}}</span><span class="dot"></span><span class="post-read">6 min read</span>
                        </div>
                    </div>
                    <!-- End Top Menta -->

                    <h1 class="posttitle">{{$post->title}}</h1>

                </div>

                <!-- Begin Featured Image -->
                <img class="featured-image img-fluid" src='{{asset("/posts/images/$post->img")}}' alt="rasm">
                <!-- End Featured Image -->

                <!-- Begin Post Content -->
                <div class="article-post">
                    <p>
                        {{$post->text}}

                    </p>

                </div>
                <!-- End Post Content -->

                <!-- Begin Tags -->
                <div class="after-post-tags">
                    <ul class="tags">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Growth Mindset</a></li>
                        <li><a href="#">Productivity</a></li>
                        <li><a href="#">Personal Growth</a></li>
                    </ul>
                </div>
                <!-- End Tags -->

            </div>
            <!-- End Post -->

        </div>
    </div>
    <!-- End Article
    ================================================== -->

    <div class="hideshare"></div>

    <!-- Begin Related
    ================================================== -->
    <div class="graybg">
        <div class="container">
            <div class="row listrecent listrelated">
            @foreach($datas as $data)
                <!-- begin post -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('single',$data->id) }}">
                            <img class="img-fluid img-thumb" src='{{asset("posts/images/$data->img")}}' alt="rasm">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="{{ route('single',$data->id) }}">{{ $data->title }}</a></h2>
                            <div class="metafooter">
                                <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="{{route('authors',$data->user_id)}}"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
                                    <span class="author-meta">
								<span class="post-name"><a href="{{route('authors',$data->user_id)}}">{{ $data->avtor->name }}</a></span><br/>
								<span class="post-date">{{ $data->updated_at }}</span><span class="dot"></span><span class="post-read">{{$data->view}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></span></span>
								</span>
                                    <span class="post-read-more"><a href="" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Related Posts
    ================================================== -->


    <!-- Begin AlertBar
    ================================================== -->
    <div class="alertbar">
        <div class="container text-center">
            <img src="{{asset('assets/img/logo.png')}}" alt=""> &nbsp; Never miss a <b>story</b> from us, get weekly updates in your inbox. <a href="#" class="btn subscribe">Get Updates</a>
        </div>
    </div>
    <!-- End AlertBar
    ================================================== -->


@endsection
