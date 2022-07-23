@extends('frontend.fontend-header')
@section('title', 'Homepage')
@section("content")

<!-- ======= Slider Section ======= -->
<div id="home" class="slider-area">
  <div class="bend niceties preview-2">
    <div id="ensign-nivoslider" class="slides">
      <img src="{{asset('public/assets/frontend/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
      <img src="{{asset('public/assets/frontend/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
      <img src="{{asset('public/assets/frontend/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
    </div>

    <!-- direction 1 -->
    <div id="slider-direction-1" class="slider-direction slider-one">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1">The Best Business Information </h2>
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                <a class="ready-btn page-scroll" href="#about">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 2 -->
    <div id="slider-direction-2" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1">The Best Business Information </h2>
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                <a class="ready-btn page-scroll" href="#about">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 3 -->
    <div id="slider-direction-3" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 -->
              <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1">The Best business Information </h2>
              </div>
              <!-- layer 2 -->
              <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">Helping Business Security & Peace of Mind for Your Family</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                <a class="ready-btn page-scroll" href="#about">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Slider -->

<main id="main">

  <!-- ======= About Section ======= -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <a href="#">
            <img src="{{asset('public/uploads/adds/1.jpg')}}" alt="">
          </a>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About eBusiness</h2>
          </div>
        </div>
        <br>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="{{asset('public/assets/frontend/img/about/1.jpg')}}" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">project Maintenance</h4>
              </a>
              <p>
                Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div><!-- End About Section -->

  <!-- ======= Services Section ======= -->

  <div id="services" class="services-area area-padding">
    <div class="container">
    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <a href="#">
      <img src="{{asset('public/uploads/adds/1.jpg')}}" alt="">
    </a>
  </div>
</div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <!-- Start Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-code"></i>
                </a>
                <h4>Expert Coder</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-camera-retro"></i>
                </a>
                <h4>Creative Designer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-wordpress"></i>
                </a>
                <h4>Wordpress Developer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-camera-retro"></i>
                </a>
                <h4>Social Marketer </h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-bar-chart"></i>
                </a>
                <h4>Seo Expart</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="fa fa-ticket"></i>
                </a>
                <h4>24/7 Support</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Services Section -->

  <!-- ======= Skills Section ======= -->
  <div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <!-- single-skill start -->
          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <div class="single-skill">
              <div class="progress-circular">
                <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#82A3A1" data-thickness=".20" data-readonly="true" disabled>
                <h3 class="progress-h4">Web Design</h3>
              </div>
            </div>
          </div>
          <!-- single-skill end -->
          <!-- single-skill start -->
          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <div class="single-skill">
              <div class="progress-circular">
                <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#82A3A1" data-thickness=".20" data-readonly="true" disabled>
                <h3 class="progress-h4">Graphics Design</h3>
              </div>
            </div>
          </div>
          <!-- single-skill end -->
          <!-- single-skill start -->
          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <div class="single-skill">
              <div class="progress-circular">
                <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#82A3A1" data-thickness=".20" data-readonly="true" disabled>
                <h3 class="progress-h4">Php Developer</h3>
              </div>
            </div>
          </div>
          <!-- single-skill end -->
          <!-- single-skill start -->
          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <div class="single-skill">
              <div class="progress-circular">
                <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#82A3A1" data-thickness=".20" data-readonly="true" disabled>
                <h3 class="progress-h4">Java Script</h3>
              </div>
            </div>
          </div>
          <!-- single-skill end -->
        </div>
      </div>
    </div>
  </div><!-- End Skills Section -->

  <!-- ======= Team Section ======= -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our special Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{asset('public/assets/frontend/img/team/1.jpg')}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Jhon Mickel</h4>
              <p>Seo</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{asset('public/assets/frontend/img/team/2.jpg')}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Andrew Arnold</h4>
              <p>Web Developer</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{asset('public/assets/frontend/img/team/3.jpg')}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Lellien Linda</h4>
              <p>Web Design</p>
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{asset('public/assets/frontend/img/team/4.jpg')}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Jhon Powel</h4>
              <p>Seo Expert</p>
            </div>
          </div>
        </div>
        <!-- End column -->
      </div>
    </div>
  </div><!-- End Team Section -->

  <!-- ======= Rviews Section ======= -->
  <div class="reviews-area">
    <div class="row no-gutters">
      <div class="col-lg-6 py-0">
        <img src="{{asset('public/assets/frontend/img/about/2.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 work-right-text d-flex align-items-center">
        <div class="px-5 py-5 py-lg-0">
          <h2>working with us</h2>
          <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
          <a href="#contact" class="ready-btn scrollto">Contact us</a>
        </div>
      </div>
    </div>
  </div><!-- End Rviews Section -->

  <!-- ======= Portfolio Section ======= -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row wesome-project-1 fix">
        <!-- Start Portfolio -page -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="awesome-menu ">
            <ul class="project-menu">
              <li>
                <a href="#" class="active" data-filter="*">All</a>
              </li>
              <li>
                <a href="#" data-filter=".development">Development</a>
              </li>
              <li>
                <a href="#" data-filter=".design">Design</a>
              </li>
              <li>
                <a href="#" data-filter=".photo">Photoshop</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row awesome-project-content">
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 design development">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/1.jpg')}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/1.jpg')}}">
                    <h4>Business City</h4>
                    <span>Web Development</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 photo">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/2.jpg')}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/2.jpg')}}">
                    <h4>Blue Sea</h4>
                    <span>Photosho</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 design">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/3.jpg')}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/3.jpg')}}">
                    <h4>Beautiful Nature</h4>
                    <span>Web Design</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 photo development">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/4.jpg')}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/4.jpg')}}">
                    <h4>Creative Team</h4>
                    <span>Web design</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 development">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/5.jpg')}}" alt="" /></a>
              <div class="add-actions text-center text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/5.jpg')}}">
                    <h4>Beautiful Flower</h4>
                    <span>Web Development</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
        <!-- single-awesome-project start -->
        <div class="col-md-4 col-sm-4 col-xs-12 design photo">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{asset('public/assets/frontend/img/portfolio/6.jpg')}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                  <a class="venobox" data-gall="myGallery" href="{{asset('public/assets/frontend/img/portfolio/6.jpg')}}">
                    <h4>Night Hill</h4>
                    <span>Photoshop</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-awesome-project end -->
      </div>
    </div>
  </div><!-- End Portfolio Section -->

  <!-- ======= Pricing Section ======= -->
  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pricing Table</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>basic <br /> <span>$80 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check cross">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check cross">Free domin</li>
              <li class="check cross">Support unlimited</li>
              <li class="check">Payment online</li>
              <li class="check cross">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list active">
            <span class="saleon">top sale</span>
            <h3>standard <br /> <span>$110 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check cross">Free domin</li>
              <li class="check">Support unlimited</li>
              <li class="check">Payment online</li>
              <li class="check cross">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>premium <br /> <span>$150 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check">Free domin</li>
              <li class="check">Support unlimited</li>
              <li class="check">Payment online</li>
              <li class="check">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Pricing Section -->

  <!-- ======= Testimonials Section ======= -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="owl-carousel testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Fleming</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div><!-- End Testimonials Section -->

  <!-- ======= Blog Section ======= -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
                  <img src="{{asset('public/assets/frontend/img/blog/1.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">13 comments</a>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html">Assumenda repud eum veniam</a>
                </h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
                <a href="blog.html" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
                  <img src="{{asset('public/assets/frontend/img/blog/2.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">130 comments</a>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html">Explicabo magnam quibusdam.</a>
                </h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
                <a href="blog.html" class="ready-btn">Read more</a>
              </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
                  <img src="{{asset('public/assets/frontend/img/blog/3.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">10 comments</a>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html">Lorem ipsum dolor sit amet</a>
                </h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
                <a href="blog.html" class="ready-btn">Read more</a>
              </span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div><!-- End Blog Section -->

  <!-- ======= Suscribe Section ======= -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Welcome to our eBusiness company</h3>
            <a class="sus-btn" href="#">Get A quate</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Suscribe Section -->

  <!-- ======= Contact Section ======= -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php

          use App\Models\ContactInfo;

          $contactInfo = ContactInfo::all(); ?>
          <!-- Start contact icon column -->
          @foreach ($contactInfo as $con)
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: {{$con->phone }}<br>
                </p>
              </div>
            </div>
          </div>

          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: {{$con->email }}<br>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  {{$con->address_line1}} {{$con->address_line2}}
                  <br>
                  <span> {{$con->address_line3}}</span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div><!-- End Contact Section -->

</main><!-- End #main -->

@endsection