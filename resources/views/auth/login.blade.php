@extends('auth.master')
@section('content')
    <div class="col-12 col-md-8">
        <form method="post" action="{{ route('http-request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="device_type" value="web">
            <input type="hidden" name="device_token" value="1234567890">
            <input type="hidden" name="user_group_id" value="4">
            <div class="login-text-box">
                @include('flash-message')
                <p class="color-b38c2d">Login to your existing account</p>
                <h2>
                    Welcome to <br> Five Four Health
                </h2>
                @if( Request::input('email-verify') == true )
                    <div class="alert alert-success">
                        Your account has been verified successfully
                    </div>
                @endif
                <div class="form__group">
                    <input type="email" required id="Email" name="email" class="form__field" placeholder="Your Email">
                    <label for="Email" class="form__label">Email</label>
                    <div class="form-icon">
                    <img src="{{ URL::to('frontend') }}/assets/img/message-icon.png" alt="message-icon" class="img-fluid message-icon">
                    </div>
                </div>
                <div class="form__group">
                    <input type="password" required name="password" id="loginPassword" class="form__field" placeholder="Your Email">
                    <label for="loginPassword" class="form__label">Password</label>
                    <div class="form-icon">
                    <i class="fa-solid hide-icon toggle-password fa-eye-slash" toggle="#loginPassword"></i>
                    </div>
                </div>
                <div class="sigin-button">
                    <button class="signin-btn" id="signButton">
                        Sign in
                    </button>
                </div>
                <div class="forget-pass text-center">
                    <a href="{{ route('forgot-password') }}">
                    <p class="color-696982"> Forgot Password?</p>
                    </a>
                    <a href="{{ route('signup') }}">
                    <p class="color-b38c2d">Join Our Community</p>
                    </a>
                </div>
            </div>
        </form>
    </div>
    @push('script')
        <script>
            $('form').submit( function(){
                $('button').attr('disabled','disabled');
                $('input[type="submit"]').attr('disabled','disabled');
                loaderBar()
            })
        </script>
    @endpush
@endsection
