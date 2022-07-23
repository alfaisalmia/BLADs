@extends('frontend.fontend-header')
@section('title', 'Products')
@section('content')


<main id="main">

  <!-- ======= Our Team Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>E-Shop</h2>
        <ol>
          <li>Our Online Store</li>
        </ol>
      </div>
      success-pay
    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Team Section ======= -->
  <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
      @if ($message = Session::get('success-pay'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="row">
        @foreach ($productsAll as $pro)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="{{URL('/')}}/public/uploads/products/{{$pro->product_image}}" class="img-fluid" alt="{{$pro->product_title}}" style="width: 250px; height:250px">
              <div class="social">
                <a href="{{route('product-details', $pro->id)}}"><i class=""></i>Details</a>
              </div>
            </div>
            <div class="member-info" style="float:left;">
              <a href="{{route('product-details', $pro->id)}}">
                <h6>{{$pro->product_title}}</h6>
              </a>
              @if ($pro->regular_price)
              <span style="color:red; font-size: 18px; display: inline;"> $ {{$pro->current_price}}</span>
              <span style="color:black; font-size: 14px; display:inline; padding-left:30px;"> <del>$ {{$pro->regular_price}} </del></span>
              @else
              <span style="color:red; font-size: 18px; display: inline;"> $ {{$pro->regular_price}}</span>
              @endif


            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="blog-pagination">
          <ul class="justify-content-center">
            {{ $productsAll->links('pagination::bootstrap-4') }}
          </ul>
        </div>
      </div>



    </div>
  </section><!-- End Team Section -->

</main><!-- End #main -->


@endsection