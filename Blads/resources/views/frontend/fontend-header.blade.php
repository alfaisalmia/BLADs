<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  use App\Models\Header;

  $headers = Header::all();
  foreach ($headers as $head) {
    $icon = $head->site_icon;
    $title = $head->site_title;
    $logo = $head->site_logo;
  }
  ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$title}} - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{URL('/')}}/public/uploads/images/{{$icon}}" rel="icon">
  <link href="{{asset('public/assets/frontend/img/favicon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="{{asset('public/assets/frontend/vendor/googleapis/googleapis.css')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets/frontend/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/assets/frontend/css/style.css')}}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>{{$title}}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--    <a href="{{route('home')}}"><img src="{{URL('/')}}/public/uploads/images/{{$logo}}" alt="" class="img-fluid"></a>--> -->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">Marketing Concept</a></li>
          <li><a href="{{route('service')}}">Degital Concent</a></li>
          <li><a href="{{route('ourteam')}}">Retails</a></li>
          <li><a href="{{route('portfolio')}}">Brands</a></li>
          <li><a href="{{route('blog')}}">Bloging</a></li>
          <li><a href="{{URL('/contact')}}">Videos</a></li>
          @if (Auth::user())
          <li><a href="{{route('signout')}}" style="border: 1.5px solid cornflowerblue;
padding: 2px 19px;
margin: 9px 0px;"><i class="fa fa-user" aria-hidden="true"></i> Signout</a></li>
          @else
          <li><a href="{{route('login')}}" style="border: 1.5px solid cornflowerblue;
padding: 2px 19px;
margin: 9px 0px;"><i class="fa fa-user" aria-hidden="true"></i> Signin</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <?php


  use App\Models\ContactInfo;
  use App\Models\FooterAbout;
  use App\Models\SocialLink;
  use App\Models\Copyright;
  use App\Models\ServiceLists;
  use App\Models\UsefulLinks;
  use App\Models\Post;

  $contactInfo = ContactInfo::all();
  $footer_about = FooterAbout::all();
  $socialLinks = SocialLink::all();
  $copys = Copyright::all();
  $servicesLists = ServiceLists::all();
  $usefullinks = UsefulLinks::all();
  //print_r($contactInfo);
  ?>



  @yield("content")


  <!-- ======= Footer ======= -->

  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  @foreach ($footer_about as $fa)
                  <h2><span>BlAds</span></h2>
                </div>

                <p style="text-align: justify;">{{$fa->footer_about_text}}</p>
                @endforeach

                <div class="footer-icons">
                  <ul>
                    @foreach ($socialLinks as $sl)
                    <li>
                      <a href="{{$sl->facebook}}"><i class="fa fa-facebook"></i></a>
                    </li>

                    <li>
                      <a href="{{$sl->twitter}}"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="{{$sl->instagram}}"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="{{$sl->linkedin }}"><i class="fa fa-linkedin"></i></a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Useful Links</h4>
                <ul>
                  @foreach ($usefullinks as $usl)
                  <li style="color:#011936"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{$usl->title}}" style="color:#011936;">{{$usl->title}}</a></li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head" style="padding: 0px 44px !important;">
                <h4>Our Services</h4>
                <ul>
                  @foreach ($servicesLists as $slss)
                  <li style="color:#011936"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{$slss->service_link }}" style="color:#011936;">{{$slss->service_title}}</a></li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Contact Us</h4>
                @foreach ($contactInfo as $con)
                <p>
                  {{$con->address_line1}}<br>
                  {{$con->address_line2}}<br>
                  {{$con->address_line3}}<br>
                </p>

                <div class="footer-contacts">
                  <p><span>Tel:</span>{{$con->phone }}</p>
                  <p>Email: {{$con->email }}</p>

                </div>
                @endforeach
              </div>
            </div>
          </div>
          <!-- end single footer -->

        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                @foreach ($copys as $cp)
                {{$cp->copyright}}
                @endforeach
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!--  <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{asset('public/assets/frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/parallax/parallax.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/assets/frontend/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/assets/frontend/js/main.js')}}"></script>

</body>

</html>