<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vandhi Online Shop</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{URL::asset('admin/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    
    <script src="https://kit.fontawesome.com/9a2e3a210e.js" crossorigin="anonymous"></script>
    <!-- No Extra plugin used -->


    <link href="{{URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('admin/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" />
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{URL::asset('admin/assets/css/sleek.css')}}" />
    <!-- FAVICON -->
    <link href="{{URL::asset('admin/assets/img/favicon.png')}}" rel="shortcut icon" />
    <script src="{{URL::asset('admin/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">


    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.header')
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>

    
    @yield('modal')
    <script src="{{URL::asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/jekyll-search.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                jQuery(this).val('');
            });
        });

    </script>
    <script src="{{URL::asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/js/sleek.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        $(".delete").on("submit", function(){
            return confirm('Do you want to remove this data?')
        })

        function showHideConfigurableAttributes() {
			var productType = $(".product-type").val();
				
			if (productType == 'configurable') {
				$(".configurable-attributes").show();
			} else {
				$(".configurable-attributes").hide();
			}
		}

		$(function(){
			showHideConfigurableAttributes();
			$(".product-type").change(function() {
				showHideConfigurableAttributes();
			});
		});

    </script>
    
    @stack('page-scripts')
</body>

</html>
