@extends('auth.master')
@section('content')
<div class="col-12 col-md-8">
    <form method="post" action="">
        {{ csrf_field() }}
        <div class="forget-text-box">
            <h2>
               Reset Password
            </h2>
            @include('flash-message')
            <div class="form__group">
               <input type="password" id="new_password" required name="new_password" class="form__field" placeholder="New Password">
               <label for="new_password" class="form__label">New Password</label>
            </div>
            <div class="form__group">
                <input type="password" id="confirm_password" required name="confirm_password" class="form__field" placeholder="Confirm Password">
                <label for="new_password" class="form__label">Confirm Password</label>
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

