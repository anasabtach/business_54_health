@extends('auth.master')
@section('content')
<div class="col-12 col-md-8">
    <form method="POST" action="{{ route('http-request') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="action" value="registration">
        <div class="login-text-box">
            <h2 style="text-align: center;">
                Join Our Community
            </h2>
            @include('flash-message')
            <div class="bussiens-profile-img">
                <img style="width:150px;height:100px;object-fit:contain; cursor:pointer;" src="{{ asset('frontend/assets/img/signup-user-icon.png') }}" alt="" id="_upload_image" class="img-fluid">
                <input type="file" class="d-none" id="image_url" name="image_url" accept="image/*">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="text" value="{{ old('business_name') }}" required id="business_name" name="business_name" class="form__field" placeholder="Business Name">
                        <label for="business_name" class="form__label">Business Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="text" required id="about" value="{{ old('about') }}" name="about" class="form__field" placeholder="Tell us about your business">
                        <label for="about" class="form__label">About</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form__group">
                        <input type="text" required id="product_service" value="{{ old('product_service') }}" name="product_service" class="form__field" placeholder="What product service do you offer?">
                        <label for="product_service" class="form__label">Product or Service Provided</label>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-12">
                    <div class="form__group">
                        <input type="number" required id="business_hours" value="{{ old('business_hours') }}" name="business_hours" class="form__field" placeholder="Business Hours">
                        <label for="business_hours" class="form__label">Business Hours</label>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="time" required id="open_time" value="{{ old('open_time') }}" name="open_time" class="form__field" placeholder="Open Time">
                        <label for="open_time" class="form__label">Open</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="time" required id="close_time" value="{{ old('close_time') }}" name="close_time" class="form__field" placeholder="Close Time">
                        <label for="close_time" class="form__label">Close</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form__group">
                        <input type="text" required id="address" value="{{ old('address') }}" name="address" class="form__field" placeholder="Address">
                        <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}">
                        <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                        <label for="address" class="form__label">Address</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="text" readonly required id="state" value="{{ old('state') }}" name="state" class="form__field" placeholder="State">
                        <label for="state" class="form__label">State</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="text" readonly required id="city" value="{{ old('city') }}" name="city" class="form__field" placeholder="City">
                        <label for="city" class="form__label">City</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form__group">
                        <select id="promote" required name="promote_category_id" class="form__field" placeholder="We Promote">
                            <option value="">-- We Promote --</option>
                            @if( !empty($promote_categories) )
                                @foreach( $promote_categories->data as $promote_categorie )
                                    <option {{ old('promote_category_id') == $promote_categorie->id ? 'selected' : '' }} value="{{ $promote_categorie->id }}">{{ $promote_categorie->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group">
                        <select id="web_based_service" required class="form__field" placeholder="Web Based Service">
                            <option value=""> -- Is this a web-based service? -- </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="website_div" class="row" style="display:none;">
                <div class="col-md-12">
                    <div class="form__group">
                        <input id="business_Site" data-toggle="tooltip" data-placement="top" title="https://www.google.com" name="site_url" value="{{ old('site_url') }}" class="form__field" placeholder="Add Business Website">
                        <label for="business_Site" class="form__label">Website</label>
                    </div>
                </div>
            </div>
            <div class="row">
            <!--<div class="col-md-6">-->
            <!--        <div class="form__group">-->
            <!--        <select class="form-select form__field" name="is_web_based_business" aria-label="Default select example">-->
            <!--            <option selected>Is this a web based business</option>-->
            <!--            <option value="1">Yes</option>-->
            <!--            <option value="0">No</option>-->
            <!--            </select>-->
            <!--        </div>-->
            <!--    </div>-->
                <div class="col-md-6">
                    <div class="form__group">
                        <input type="email" required id="workEmail" value="{{ old('email') }}" name="email" class="form__field" placeholder="Tell us about your business">
                        <label for="workEmail" class="form__label">Work Email Address</label>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="form__group">
                        <input type="password" required id="loginPassword" name="password" class="form__field" placeholder="Password">
                        <label for="loginPassword" class="form__label">Password</label>
                            <div class="form-icon">
                                <i class="fa-solid hide-icon toggle-password fa-eye-slash" toggle="#loginPassword"></i>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form__group">
                        <input type="password" required id="confirmPassword" name="confirm_password" class="form__field" placeholder="Confirm Password">
                        <label for="confirmPassword" class="form__label">Confirm Password</label>
                        <div class="form-icon">
                            <i class="fa-solid hide-icon toggle-password fa-eye-slash" toggle="#confirmPassword"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <p class="already-account" style="margin-top: 0;">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                </div>
                <div class="col-md-7">
                    <div class="signup-button text-end">
                        <button type="submit" class="signup-btn" id="signButton">
                            Join Our Community
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@push('script')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&libraries=places" defer></script>
    <script src="{{ asset('frontend/assets/js/signup.js') }}"></script>
    <script>
         $('[data-toggle="tooltip"]').tooltip()
    </script>
@endpush
@endsection
