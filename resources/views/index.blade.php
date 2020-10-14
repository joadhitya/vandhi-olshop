@extends('app')
@section('content')


    <!-- Banner section start -->
    {{-- background-image: url(images/bg-1.jpg);height:500px --}}
    <section class="banner" style="">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6 order-1 order-md-0">
            <div class="banner-content">
              <span class="tagline">Shop with Us</span>
              <h1>Happy with Vandhi</h1>
              <a href="#" class="btn-default"><i class="ti-bag mr-3"></i>shop now</a>
            </div>
          </div>
          <div class="col-md-6 order-0 order-md-1">
            <div class="ban-img">
              <img src="{{asset('client/images/ban-1.png')}}" alt="">
            </div>
          </div>
        </div>        
      </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured Product start -->
    <section class="feat-product">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="sec-heading">
              <h3 class="sec-title">Best Product</h3>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($products as $product)
          <div class="col-sm-4">
            <div class="product-item">
              <figure class="product-thumb">
                <img style="border-radius:10px" src="storage/{{$product->product_image}}" alt="">
                <div class="action-links">
                  <a href="#" class="quick-view icon mx-1"><i class="ti-eye"></i></a>
                  <a href="javascript:void(0)" class="add-cart icon mx-1" onclick="manage_cart('{{$product->id}}','add')"><i class="ti-shopping-cart"></i></a>
                </div>
              </figure>
              <div class="product-content">
                <h5 class="product-name"><a href="#">{{$product->product_name}}</a></h5>
                @if ($product->is_recomended == 1 )
                  <div class="ratings">
                    <a href="#"><i class="ti-star"></i></a>
                    <a href="#"><i class="ti-star"></i></a>
                    <a href="#"><i class="ti-star"></i></a>
                    <a href="#"><i class="ti-star"></i></a>
                    <a href="#"><i class="ti-star"></i></a>
                  </div>                    
                @endif
                <p class="price">Rp. {{number_format($product->product_price)}}</p>
              </div>
            </div>
          </div>
              
          @endforeach
        </div>
      </div>
    </section>
    <!-- Featured Product end -->

    <!-- Banner 02 section start -->
    <section class="banner02">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1>50% off</h1>
              <h4>all women’s collection</h4>
              <a href="#" class="btn-default">shop now</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="ban-img">
              <img src="{{asset('client/images/ban-2.png')}}" alt="">
            </div>
          </div>
        </div>        
      </div>
    </section>
    <!-- Banner 02 section end -->

    <!-- Features section start -->
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{asset('client/images/feature-icons/1.png')}}" alt="Cash" class="feat-icon">
              <h5>Money back gurantee</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{asset('client/images/feature-icons/2.png')}}" alt="Delivery" class="feat-icon">
              <h5>Free Delivery</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{asset('client/images/feature-icons/3.png')}}"alt="Support" class="feat-icon">
              <h5>Alway support</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{asset('client/images/feature-icons/4.png')}}" alt="Secure payment" class="feat-icon">
              <h5>Secure payment</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features section end -->
@endsection
