<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->
    <link rel="stylesheet"href="{{URL::asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet"href="{{URL::asset('client/css/themify-icons.css')}}">
    <link rel="stylesheet"href="{{URL::asset('client/css/owl.carousel.min.css')}}">
    {{-- {{URL::asset('admin/assets/plugins/nprogress/nprogress.css')}} --}}
    <link rel="stylesheet" href="{{URL::asset('client/css/style.css')}}">

    <title>Vandhi Olshop</title>
  </head>
  <body>


    <!-- Header strat -->
    <header class="header">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="home-01.html" class="logo">
            <h2>Vanol<span style="color:#ff5353">shop</span></h2>
            {{-- <img src="{{URL::asset('client/images/logo.png')}}" alt=""> --}}
          </a>
          <a href="javascript:void(0);" id="mobile-menu-toggler">
            <i class="ti-align-justify"></i>
          </a>
          <ul class="navbar-nav">    
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>

          <div class="d-inline-flex align-items-center">
            <a href="#" class="cart-bag icon">
              <i class="ti-shopping-cart"></i>
              <span class="itemCount">0</span>
            </a>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header strat -->

    <!-- Banner section start -->
    <section class="banner" style="background-image: url(images/bg-1.jpg);height:500px">
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
              <img src="{{URL::asset('client/images/ban-1.png')}}" alt="">
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
          <div class="col-sm-4">
            <div class="product-item">
              <figure class="product-thumb">
                <img src="{{URL::asset('client/images/products/1.jpg')}}" alt="">
                <div class="action-links">
                  <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                  <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                  <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                </div>
              </figure>
              <div class="product-content">
                <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                <div class="ratings">
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                </div>
                <p class="price">$35</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-item">
              <figure class="product-thumb">
                <img src="{{URL::asset('client/images/products/2.jpg')}}" alt="">
                <div class="action-links">
                  <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                  <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                  <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                </div>
              </figure>
              <div class="product-content">
                <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                <div class="ratings">
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                </div>
                <p class="price">$35</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-item">
              <figure class="product-thumb">
                <img src="{{URL::asset('client/images/products/3.jpg')}}" alt="">
                <div class="action-links">
                  <a href="#" class="quick-view icon"><i class="ti-eye"></i></a>
                  <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                  <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                </div>
              </figure>
              <div class="product-content">
                <h5 class="product-name"><a href="#">Red Women Purses</a></h5>
                <div class="ratings">
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                  <a href="#"><i class="ti-star"></i></a>
                </div>
                <p class="price">$35</p>
              </div>
            </div>
          </div>
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
              <img src="{{URL::asset('client/images/ban-2.png')}}" alt="">
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
              <img src="{{URL::asset('client/images/feature-icons/1.png')}}" alt="Cash" class="feat-icon">
              <h5>Money back gurantee</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{URL::asset('client/images/feature-icons/2.png')}}" alt="Delivery" class="feat-icon">
              <h5>Free Delivery</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{URL::asset('client/images/feature-icons/3.png')}}"alt="Support" class="feat-icon">
              <h5>Alway support</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="featureBox">
              <img src="{{URL::asset('client/images/feature-icons/4.png')}}" alt="Secure payment" class="feat-icon">
              <h5>Secure payment</h5>
              <p>Great fill signs he evening</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features section end -->

    <!-- Instagram start -->
    <section class="instagram">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="sec-heading">
              <h3 class="sec-title">follow us</h3>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img src="images/instagram/1.jpg" alt="">
              <i class="ti-instagram"></i>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img src="images/instagram/2.jpg" alt="">
              <i class="ti-instagram"></i>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img src="images/instagram/3.jpg" alt="">
              <i class="ti-instagram"></i>
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img src="images/instagram/4.jpg" alt="">
              <i class="ti-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Instagram end -->


    <!-- JS -->
    <script src="{{URL::asset('client/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('client/js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('client/js/scripts.js')}}"></script>
  </body>
</html>