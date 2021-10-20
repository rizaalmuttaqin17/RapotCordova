<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>e-Raport | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/faviconRapot.png')}}">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css')}}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0eb23feecc.js" crossorigin="anonymous"></script>
    @yield('css')
</head>
<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/logo2.svg')}}" alt="" width="32">
                <img class="logo-compact" src="{{ asset('images/logoText.png')}}" alt="">
                <img class="brand-title" src="{{ asset('images/logoText.png')}}" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								@yield('title_header')
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('images/profile/17.jpg')}}" width="20" alt=""/>
									<div class="header-info mr-3">
										<span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
										<p class="fs-12 mb-0">{{ Auth::user()->email }}</p>
									</div>
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="./app-profile.html" class="dropdown-item ai-icon">
                                            <i class="fa fa-user"></i>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                        <a href="route('logout')" class="dropdown-item ai-icon" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="fa fa-sign-out-alt"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="deznav">
            @include('layouts.menu')
        </div>
        <div class="content-body">
			<div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Owaf's Technology 2021</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('js/custom.min.js')}}"></script>
	<script src="{{ asset('js/deznav-init.js')}}"></script>
	<script src="{{ asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('vendor/peity/jquery.peity.min.js')}}"></script>
	<script src="{{ asset('vendor/apexchart/apexchart.js')}}"></script>
	<script src="{{ asset('js/dashboard/dashboard-1.js')}}"></script>
	<script src="{{ asset('vendor/apexchart/apexchart.js')}}"></script>
	<script>
		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},
					
					1150:{
						items:3
					},			
					
					1200:{
						items:2
					},
					1749:{
						items:3
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
    @yield('js')
</body>
</html>