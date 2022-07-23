@extends('frontend.fontend-header')
@section('title', 'Blog')
@section("content")

<main id="main">

    <br>
    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
        <div class="container">

            <div class="row">

                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href=""> <img src="{{URL('/')}}/public/uploads/adds/1.jpg" alt=""> </a>
                        </div>
                    </div>

                    <br>
                    <div class="row">

                        @foreach ($posts as $ps)
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-blog">
                                <h3>
                                    <a href="{{URL('/post-details/')}}/{{$ps->id}}/">{{$ps->post_title}}</a>
                                </h3>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-user"></i>
                                        {{$ps->post_author_name}}
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        {{$ps->categories->category_name}}
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>{{ $ps->created_at->format('d M, Y')}}
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-blog-img">
                                            <a href="blog-details.html">
                                                <img src="{{URL('/')}}/public/uploads/posts/{{$ps->post_image}}" alt="{{$ps->post_title}}" style="width: 100%;height:171px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="blog-text">
                                            <p style="line-height: 25px;">
                                            {{$ps->post_short_desc}}
                                            </p>
                                            <span>
                                    <a href="{{URL('/post-details/')}}/{{$ps->id}}/" class="ready-btn">Read more</a>
                                </span>
                                        </div>
                                    </div>
                                </div>




                             
                            </div>
                        </div>

                        @endforeach

                        <!-- End single blog -->
                        <div class="blog-pagination">
                            <ul class="pagination">
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="page-head-blog">

                        <a href="">
                            <div class="single-blog-page">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{URL('/')}}/public/uploads/adds/5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <br>
                        <a href="">
                            <div class="single-blog-page">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{URL('/')}}/public/uploads/adds/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </a>
                        <div class="single-blog-page">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="{{URL('/')}}/public/uploads/adds/4.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="single-blog-page">
                      
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                @foreach ($recentposts as $recp)
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="{{URL('/')}}/public/uploads/posts/{{$recp->post_image}}" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="{{URL('/post-details/')}}/{{$recp->id}}/">{{ Str::limit($recp->post_title,30)}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- recent end -->

                         
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>categories</h4>
                                <ul>
                                    <li>
                                        <a href="#">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->

</main><!-- End #main -->


@endsection