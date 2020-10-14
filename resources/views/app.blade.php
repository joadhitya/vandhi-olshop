<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->
    <link rel="stylesheet"href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet"href="{{asset('client/css/themify-icons.css')}}">
    <link rel="stylesheet"href="{{asset('client/css/owl.carousel.min.css')}}">
    {{-- {{asset('admin/assets/plugins/nprogress/nprogress.css')}} --}}
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <?php
        if(isset($_SESSION['cart'])){
          $totalProduct= count($_SESSION['cart']);      
        }
        else{
          $totalProduct=0;
        }
    ?>

    <title>Vandhi Olshop</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="/" class="logo">
            <h2>Vanol<span style="color:#ff5353">shop</span></h2>
            {{-- <img src="{{asset('client/images/logo.png')}}" alt=""> --}}
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
            {{-- Buttonlogin --}}
            <a href="{{route('sign_in')}}" class="btn-default mr-3" style="padding:10px 20px; min-width: 80px"><i class="ti-user mr-2" ></i>Login</a>
            <a href="transaction/cart" class="cart-bag icon">
              <i class="ti-shopping-cart"></i>
              <span class="itemCount"><?=$totalProduct?></span>
            </a>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header strat -->

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{asset('client/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('client/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/js/scripts.js')}}"></script>
    <script src="{{asset('client/js/process.js')}}"></script>
</body>

</html>
