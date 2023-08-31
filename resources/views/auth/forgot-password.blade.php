@extends('auth.master')
@section('content')
<div class="col-12 col-md-8">
    <form method="post" action="{{ route('http-request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="action" value="forgot-password">
        <div class="forget-text-box">
            @include('flash-message')
            <h2>
               Forgot Password?
            </h2>
            <p>We get it, stuff happens. Just enter your email address below associated with your account.</p>
            <div class="form__group">
               <input type="email" id="Email" required name="email" class="form__field" placeholder="Your Email">
               <label for="Email" class="form__label">Email</label>
               <div class="form-icon">
                  <img src="{{ asset('frontend/assets/img/message-icon.png') }}" alt="message-icon" class="img-fluid message-icon">
               </div>
            </div>
            <div class="sigin-button">
               <button class="signin-btn" id="resetPassword">
                   Reset Password
               </button>
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

