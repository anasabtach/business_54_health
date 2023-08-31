<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{ env('APP_NAME') }}</title>
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-5/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsve.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/skylo.css') }}">
      @stack('stylesheet')
   </head>
   <body class="login-color">
      <!-- <header class="sticky-top before-login">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand order-1 order-lg-0" href="{{ URL::to('/') }}">
               <img src="{{ URL::to('frontend') }}/assets/img/logo.png" alt="logo" class="img-fluid">
               </a>
            </nav>
         </div>
      </header> -->
      <header class="before-login">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand order-1 order-lg-0" href="{{ URL::to('/') }}">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" class="img-fluid">
               </a>
               <button class="navbar-toggler  order-last order-lg-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse order-3 order-lg-0  order-last order-lg-0" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                     <li>
                        <a class="nav-link  font-14"  href="{{ URL::to('/') }}">Home</a>
                     </li>
                     <li >
                        <a class="nav-link font-14" href="{{ route('deal-management') }}">My Promotions</a>
                     </li>
                     <li >
                        <a class="nav-link font-14" href="{{ route('marketing-management') }}">Marketing</a>
                     </li>
                     <li >
                        <a class="nav-link font-14" href="{{ route('community') }}">Community</a>
                     </li>
                     @if( !Auth::check() )
                        <li >
                            <a class="nav-link bg-yellow" href="{{ route('login') }}">Sign in</a>
                        </li>
                        <li >
                            <a class="nav-link color-yellow font-14" href="{{ route('signup') }}">Join our community</a>
                        </li>
                     @endif
                  </ul>
               </div>
               @if( Auth::check() )
                <div class="notification  order-2 order-lg-0 ms-auto">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('frontend/assets/img/notification.png') }}" alt="notification" class="img-fluid font-24">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{ route('welcome') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-icon">
                                            <img style="object-fit: contain;width: 100%;height: 100%;" src="{{ URL::to('frontend/assets/img/logo.png') }}" alt="user-remed" class="img-fluid">
                                        </div>
                                        <div class="notification-text">
                                            <p>Welcome to 54 Health,</p>
                                            <Date class="date">{{ Auth::user()->created_at->format('m-d-Y h:i A') }}</Date>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user  order-2 order-lg-0 ">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('frontend/assets/img/dropdowm-user.png') }}" alt="dropdowm-user" class="img-fluid"> <span class="font-14">{{ session('user')->name }}</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                            <a class="dropdown-item" href="{{ route('my-account') }}">
                                <div class="d-flex align-items-center">
                                    <div class="icon-1">
                                        <img src="{{ asset('frontend/assets/img/setting-logout-1.png') }}" alt="setting-logout-1">
                                    </div>
                                    <div class="text-1 ms-3" >
                                        My Account
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <div class="d-flex align-items-center">
                                    <div class="icon-1">
                                        <img src="{{ asset('frontend/assets/img/logout-settimg-1.png') }}" alt="logout-settimg-1" class="img-fluid">
                                    </div>
                                    <div class="text-1 ms-3" >
                                        Logout
                                    </div>
                                </div>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
               @endif
            </nav>
         </div>
      </header>
      <main>
         <section class="{{ $main_section_class }}">
            <div class="container ">
               <div class="row  justify  ">
                  <div class="col-10">
                     <div class="row gx-0 {{ $box_class }} ">
                        <div class="col-12 col-md-4">
                           <div class="login-img">
                              <img src="{{ URL::to('frontend') }}/assets/img/banner-img-2.png" alt="" class="img-fluid">
                           </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
             </div>
          </div>
       </section>
    </main>
    <script src="{{ URL::to('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ URL::to('frontend') }}/assets/js/jquery-ui.js"></script>
    <script src="{{ URL::to('frontend') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/js/skylo.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/function.js') }}"></script>
    <script>
       $( document ).ready(function() {
            $(".toggle-password").click(function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
           });
       });
    </script>
    @stack('script')
 </body>
</html>
