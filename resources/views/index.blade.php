<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="token" content="{{ encryptData(config('constants.CLIENT_ID')) }}">
      <title>{{ env('APP_NAME') }}</title>
      <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-5/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsve.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/slick-slider/slick/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/slick-slider/slick/slick-theme.css') }}">
      <script>
            let base_url     = '{{ URL::to("/") }}';
            let api_base_url = '{{ env("API_URL") }}';
      </script>
   </head>
   <body class="home_banner">
      <header>
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
                        <a class="nav-link active font-14"  href="{{ URL::to('/') }}">Home</a>
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
                            <img style="border-radius:50%;width:50px;height:50px;object-fit:cover;" src="{{ asset(session('user')->image_url) }}" alt="dropdowm-user" class="img-fluid"> <span class="font-14">{{ session('user')->name }}</span>
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
         <section class="sec-benner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="banner-slider">
                           <!--1. About  -->
                           <div class="slider-item">
                              <div class="row">
                                 <div class="col-12 col-md-5">
                                    <div class="slider-first-img">
                                       <img src="{{ URL::to('frontend/assets/img/slider-home.png') }}" alt="benner-img" class="img-fluid" >
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-7">
                                       <div class="slider-title">
                                          <p>
                                             Five Four Health was founded in memory of Manuel A. Navarro. A dedicated educator who spent his final moments grading student’s work.
                                          </p>
                                          <p>
                                             We are dedicated to providing opportunities for our everyday heroes to invest in their physical, mental and social health.
                                          </p>
                                          <p>
                                             We value and appreciate everyday heroes by uniting local businesses in support of local heroes who dedicate their lives in service to their communities.
                                          </p>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <!--2. Local businesses supporting local heroes  -->
                           <div class="slider-item">
                              <div class="row">
                                    <div class="col-12">
                                       <div class="img-box text-center pt third-img">
                                          <img src="{{ URL::to('frontend/assets/img/slider-six-img.png') }}" alt="benner-img" class="img-fluid" >
                                       </div>
                                       <div class="benner-text-box pt text-center ">
                                          <h4 class="font-22">
                                             Local businesses supporting local heroes.
                                          </h4>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <!--3. Social health  -->
                           <div class="slider-item">
                              <div class="row">
                                    <div class="col-12">
                                       <div class="img-box text-center pt">
                                          <img src="{{ URL::to('frontend/assets/img/slider-third-img.png') }}" alt="benner-img" class="img-fluid" >
                                       </div>
                                       <div class="benner-text-box pt text-center ">
                                          <h4 class="font-22">
                                             Humans are inherently social. Whether with friends, family or strangers, we all  deserve  human connection.
                                          </h4>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <!--4. Mental health  -->
                           <div class="slider-item">
                              <div class="row">
                                    <div class="col-12">
                                       <div class="img-box text-center pt third-img">
                                          <img src="{{ URL::to('frontend/assets/img/slider-fourth-img.png') }}" alt="benner-img" class="img-fluid" >
                                       </div>
                                       <div class="benner-text-box pt text-center ">
                                          <h4 class="font-22">
                                          The mind controls our thoughts, feelings and actions. Take a proactive approach to mental health.
                                          </h4>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <!-- 5. Physical -health. -->
                           <div class="slider-item">
                              <div class="row">
                                    <div class="col-12">
                                       <div class="img-box text-center pt third-img">
                                          <img src="{{ URL::to('frontend/assets/img/slider-five.png') }}" alt="benner-img" class="img-fluid" >
                                       </div>
                                       <div class="benner-text-box pt text-center ">
                                          <h4 class="font-22">
                                          Move, improve and recover. Take control of your physical health one activity at a time.
                                          </h4>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <section class="img-section">
            <div class="container">
               <div class="row">
                  <div id="_quote_container" class="col-12">
                    <div align="center">
                        <span class="loader"></span>
                    </div>
                  </div>
                  {{-- <div class="col-12 text-center img-text-img">
                     <div class="img-row">
                        <div id="_vendor_container_1" class="img-col d-flex align-items-center">
                        </div>
                        <div id="_vendor_container_2" class="img-col d-flex align-items-center">
                        </div>
                     </div>
                  </div> --}}
               </div>
            </div>
         </section>
      </main>
      @include('footer')
      <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="{{ asset('frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/skylo.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
      <script src="{{ asset('frontend/assets/js/function.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/index.js') }}"></script>
      <script>
            $(document).ready(function(){
               $('.banner-slider').slick({
                  dots: true,
                  infinite: true,
                  slidesToShow: 1,
                  slidesToScroll: 1 ,
                  arrows: true,
                  autoplay:true,
               });
            });
        </script>
   </body>
</html>
