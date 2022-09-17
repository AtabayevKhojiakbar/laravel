@extends('welcome')

@section('amal')


    <!-- Begin Site Title
================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Mediumish</h1>
            <p class="lead">
                Bootstrap theme, medium style, simply perfect for bloggers
            </p>
        </div>
        <!-- End Site Title
        ================================================== -->

        <!-- Begin Featured
        ================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">
@foreach($yangipost as $post)
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5 wrapthumbnail">

                                <a href="{{route('single',$post->id)}}">
                                    <div class="thumbnail" style='background-image:url({{asset("posts/images/$post->img")}});'>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="card-block">
                                    <h2 class="card-title"><a href="{{route('single',$post->id)}}">{{ $post->title }}</a></h2>
                                    <h4 class="card-text">{{ \Illuminate\Support\Str::words($post->text,10) }}</h4>
                                    <div class="metafooter">
                                        <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="{{route('authors',$post->user_id)}}"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
                                            <span class="author-meta">
								<span class="post-name"><a href="{{route('authors',$post->user_id)}}">{{ $post->avtor->name }}</a></span><br/>
								<span class="post-date">{{ $post->updated_at }}</span><span class="dot"></span><span class="post-read">{{$post->view}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
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
                    </div>
                @endforeach
                    <!-- end post -->


            </div>
        </section>
        <!-- End Featured
        ================================================== -->

        <!-- Begin List Posts
        ================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Stories</span></h2>
            </div>
            <div class="card-columns listrecent">
                @foreach($alpost as $alp)
                <!-- begin post -->
                <div class="card">
                    <a href="{{route('single',$alp->id)}}">
                        <img class="img-fluid" src='{{asset("posts/images/$alp->img")}}' alt="img">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="">{{ $alp->title }}</a></h2>
                        <h4 class="card-text">{{ \Illuminate\Support\Str::substr($alp->text,0,80) }}</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="{{route('authors',$alp->user_id)}}"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
						</span>
                                <span class="author-meta">

						<span class="post-name"><a href="{{route('authors',$alp->user_id)}}">{{ $alp->avtor->name }}</a></span><br/>
						<span class="post-date">{{ $alp->updated_at }}</span>
                                    <span class="dot"></span><span class="post-read">{{$alp->view}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></span>
						</span>
                                <span class="post-read-more"><a href="" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
                @endforeach

            </div>
            <div class="d-flex justify-content-center pb-10 w-4/5">{{$alpost->links()}}</div>
        </section>
        <!-- End List Posts
        ================================================== -->

@endsection
