@extends('frontend.fontend-header')
@section('title', 'Blog')
@section("content")

<main id="main">
<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
  <div class="home-overly"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom">
            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <h1 class="title2">My Blog</h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h2 class="title3">Profesional Blog Page</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Header -->

<!-- ======= Blog Page ======= -->
<div class="blog-page area-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="page-head-blog">
          <div class="single-blog-page">
            <!-- search option start -->
            <form action="#">
              <div class="search-option">
                <input type="text" placeholder="Search...">
                <button class="button" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
            <!-- search option end -->
          </div>
          <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
              <h4>recent post</h4>
              <div class="recent-post">

              @foreach ($recentposts as $recp)
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                    <img src="{{URL('/')}}/public/uploads/posts/{{$recp->post_image}}" alt="">
                    </a>
                  </div>
                  <div class="pst-content">
                    <p><a href="{{URL('/post-details/')}}/{{$recp->id}}/">{{ Str::limit($recp->post_title,40)}}</a></p>
                  </div>
                </div>
                <!-- End single post -->
@endforeach

              </div>
            </div>
            <!-- recent end -->
          </div>
          <div class="single-blog-page">
            <div class="left-blog">
              <h4>categories</h4>
              <ul>
                @foreach ($categories as $cat)
                <li>
                  <a href="#">{{$cat->category_name}}</a>
                </li>
                @endforeach
             
              
              </ul>
            </div>
          </div>
          <div class="single-blog-page">
            <div class="left-blog">
              <h4>archive</h4>
              <ul>
                <li>
                  <a href="#">07 July 2016</a>
                </li>
                <li>
                  <a href="#">29 June 2016</a>
                </li>
                <li>
                  <a href="#">13 May 2016</a>
                </li>
                <li>
                  <a href="#">20 March 2016</a>
                </li>
                <li>
                  <a href="#">09 Fabruary 2016</a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <!-- End left sidebar -->
      <!-- Start single blog -->
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="row">
        @foreach ($posts as $ps)
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog-details.html">
                  <img src="{{URL('/')}}/public/uploads/posts/{{$ps->post_image}}" alt="{{$ps->post_title}}">
                </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">11 comments</a>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>{{ $ps->created_at->format('d M, Y')}}
                </span>
              </div>
              <div class="blog-text" style="  font-style: normal;">
                <h4>
                  <a href="#">{{$ps->post_title}}</a>
                </h4>
            
                {!! Str::limit(fgets(fopen(Storage::path("\posts\\" . $ps->postDescription . '"'), 'r')), 150); !!}
              </div>
              <span>
                <a href="{{URL('/post-details/')}}/{{$ps->id}}/" class="ready-btn">Read more</a>
              </span>
            </div>
          </div>
          @endforeach
        
          <!-- End single blog -->
          <div class="blog-pagination">
            <ul class="pagination justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Page -->

</main><!-- End #main -->


@endsection