<!DOCTYPE html>
<html lang="en">
   @include('head')
   <body>
      <div id="overlay"></div>
      <header class="sticky-top header-shadow">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand order-1 order-lg-0" href="{{ URL::to('/') }}">
                <img src="{{ URL::to('frontend/assets/img/logo.png') }}" alt="logo" class="img-fluid">
               </a>
               <button class="navbar-toggler  order-last order-lg-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse order-3 order-lg-0  order-last order-lg-0" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                     <li>
                        <a class="nav-link  font-14" href="{{ URL::to('/') }}">Home</a>
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
                        <li>
                            <a class="nav-link bg-yellow"  href="{{ route('login') }}">Sign in</a>
                        </li>
                        <li>
                            <a class="nav-link color-yellow font-14" href="{{ route('signup') }}">Join our community</a>
                        </li>
                    @endif
                  </ul>
               </div>
                @if( Auth::check() )
                    <div class="notification  order-2 order-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ URL::to('frontend') }}/assets/img/notification.png" alt="notification" class="img-fluid font-24">
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
                                            <img src="{{ URL::to('frontend') }}/assets/img/setting-logout-1.png" alt="setting-logout-1">
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
                                            <img src="{{ URL::to('frontend') }}/assets/img/logout-settimg-1.png" alt="logout-settimg-1" class="img-fluid">
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
      @yield('content')
      @if( $is_show_footer )
        @include('footer')
      @endif
      @if( !empty(session('user')) )
        <script>
            let user_id = '{{ session("user")->id }}';
        </script>
      @endif
      <script src="{{ asset('frontend/assets/js/skylo.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
      <script src="{{ asset('frontend/assets/js/function.js') }}"></script>
      @stack('script')
    </body>
</html>
