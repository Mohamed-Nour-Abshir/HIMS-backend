<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>HIMS-Dashboard</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/icon/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo-removebg-preview.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/admin/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/custom.css')}}">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .toast {
                min-width: 350px;
                min-height: 70px;
            }
        .toast-message {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px !important;
        }
    </style>
    @livewireStyles
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="/" id="site-logo-inner">
                            <style>
                                .gradient-text {
                                    background: linear-gradient(to right, #223a66, #e02453);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                    }
                            </style>
                            <img class="" id="logo_header" alt="" src="{{asset('assets/images/logo-removebg-preview.png')}}"
                                data-light="{{asset('assets/images/logo-removebg-preview.png')}}" data-dark="{{asset('assets/images/logo-removebg-preview.png')}}" width="50"> <span class="mt-5 h3 ms-3 gradient-text">HIMS</span>
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{route('dashboard')}}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{route('home-slider')}}" class="{{ Request::is('admin/home-slider') ? 'active' : '' }} {{ Request::is('admin/home-slider/edit/1') ? 'active' : '' }}">
                                        <div class="icon"><i class="icon-home"></i></div>
                                        <div class="text">Home Slider</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.course')}}" class="@if(request()->routeIs('admin.course') || request()->routeIs('course.create') || request()->routeIs('course.edit')) active @endif">
                                        <div class="icon"><i class="icon-book-open"></i></div>
                                        <div class="text">Manage Course</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.faculty')}}" class="@if(request()->routeIs('admin.faculty') || request()->routeIs('faculty.create') || request()->routeIs('faculty.edit')) active @endif">
                                        <div class="icon"><i class="icon-book-open"></i></div>
                                        <div class="text">Manage Faculty</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.gallery')}}" class="@if(request()->routeIs('admin.gallery') || request()->routeIs('gallery.create') || request()->routeIs('gallery.edit')) active @endif">
                                        <div class="icon"><i class="icon-book-open"></i></div>
                                        <div class="text">Manage Galllery</div>
                                    </a>
                                </li>
                                <li class="menu-item">

                                    <a href="{{route('settings')}}" class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                                        <div class="icon"><i class="icon-settings"></i></div>
                                        <div class="text">Settings</div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-content-right">

                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="/">
                                    <img class="" id="logo_header_mobile" alt="" src="{{asset('assets/images/logo-removebg-preview.png')}}"
                                        data-light="{{asset('assets/images/logo-removebg-preview.png')}}" data-dark="{{asset('assets/images/logo-removebg-preview.png')}}"
                                        data-width="154px" data-height="52px" data-retina="{{asset('assets/images/logo-removebg-preview.png')}}" width="50"><span class="mt-5 h3 ms-3 gradient-text">HIMS</span>
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>


                                {{-- <form class="flex-grow form-search">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search here..." class="show-search" name="name"
                                            tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mb-10 product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/17.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Dog Food
                                                                    Rachael Ray Nutrish®</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="mb-10 product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/18.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Natural
                                                                    Dog Food Healthy Dog Food</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/19.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Freshpet
                                                                    Healthy Dog Food and Cat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mb-10 product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/20.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Sojos
                                                                    Crunchy Natural Grain Free...</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="mb-10 product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/21.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Kristin
                                                                    Watson</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="mb-10 product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/22.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega
                                                                    Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/23.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between flex-grow gap20">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega
                                                                    Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form> --}}

                            </div>
                            <div class="header-grid">

                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                    <span class="image">
                                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                                    </span>
                                                @else
                                                    <span class="image">
                                                        <img src="{{asset('assets/admin/images/avatar/user-1.png')}}" alt="">
                                                    </span>
                                                @endif
                                                <span class="flex flex-column">
                                                    <span class="mb-2 body-title">{{Auth::user()->name}}</span>
                                                    <span class="text-tiny">{{Auth::user()->role}}</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <a href="{{route('profile.show')}}" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Profile</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="login.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="main-content">

                        {{$slot}}

                        <div class="bottom-page">
                            <div class="body-text">Copyright © <?php echo date('Y');?> HIMS</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/admin/js/main.js')}}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if(Session::has('message'))
            toastr.success("{{Session::get('message')}}");
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

        @endif
    </script>
    @livewireScripts
</body>

</html>
