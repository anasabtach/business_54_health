@extends('master')
@section('content')
<main>
   <section class="my-account-sec">
      <div class="row gx-0">
         <div class="col-12 col-md-3 col-lg-2 ">
            <div class="nav account-tabs flex-column nav-pills " id="v-pills-tab" role="tablist"
               aria-orientation="vertical">
               <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                  aria-selected="true">
               <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk.png" alt="profile-bulk"
                  class="img-fluid non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk-colorfuul.png" alt="profile-bulk"
                  class="img-fluid display-active me-2">
               Profile
               </button>
               <button class="nav-link" id="v-pills-changepassword-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-changepassword" type="button" role="tab" aria-controls="v-pills-changepassword-tab"
                  aria-selected="true">
                    <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk.png" alt="profile-bulk"
                        class="img-fluid non-active me-2">
                    <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk-colorfuul.png" alt="profile-bulk"
                        class="img-fluid display-active me-2">
                    Change Password
               </button>
               <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                  aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/share.png" alt="share" class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/share-color-full.webp" alt="share-color-full"
                  class="img-fluid display-active me-2">
               Review & Rating
               </button>
               <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                  aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/static.png" alt="static" class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/static-colorfull.png" alt="static-colorfull"
                  class="img-fluid display-active me-2">
               Statistics
               </button>
               <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                  aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/notification-bing.png" alt="notification"
                  class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/notification-bing-color-full.png" alt="notification-bing"
                  class="img-fluid display-active me-2">
               Notifications
               </button>
               <button class="nav-link" id="v-pills-condition-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-condition" type="button" role="tab"
                  aria-controls="v-pills-condition" aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/document-text.png" alt="document-text"
                  class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/document-text-color-full.png" alt="document-text-color-full"
                  class="img-fluid display-active me-2">
               Terms & Conditions
               </button>
               <button class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-privacy" type="button" role="tab" aria-controls="v-pills-privacys"
                  aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/shield-tick.png" alt="notification"
                  class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/shield-tick-color-full.png" alt="notification-bing"
                  class="img-fluid display-active me-2">
               Privacy Policy
               </button>
               <button class="nav-link" id="v-pills-faq-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-faq" type="button" role="tab" aria-controls="v-pills-faq"
                  aria-selected="false">
               <img src="{{ URL::to('frontend') }}/assets/img/message-question.png" alt="notification"
                  class="img-fluid  non-active me-2">
               <img src="{{ URL::to('frontend') }}/assets/img/message-question-color-full.png" alt="notification-bing"
                  class="img-fluid display-active me-2">
               FAQs
               </button>
            </div>
         </div>
         <div class="col-12 col-md-9 col-lg-10 ">
            @include('flash-message')
            <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <form method="POST" enctype="multipart/form-data" action="{{ route('http-request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="action" value="update-profile">
                    <div class="my-account-tabs">
                        <div class="profile-tab-account">
                           <div class="profile-text">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="profile-tile">
                                    <h1>Profile</h1>
                                 </div>
                                 <div class="profile-btn">
                                    <button type="submit" class="edit-profile">
                                       Update
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <div class="profile-benner-img">
                              <img style="height:250px;object-fit:cover;" src="{{ session('user')->banner_image_url }}" id="banner_image" alt="profile-benner-img"
                                 class="img-fluid">
                                 <input type="file" id="banner_image_url" name="banner_image_url" class="d-none" accept="image/*">
                              <div class="add-profile-img">
                                 <img style="width:120px;height:120px;object-fit:cover;" src="{{ session('user')->image_url }}" id="_upload_image" alt="profle-add-img"
                                    class="img-fluid">
                                    <input type="file" class="d-none" id="image_url" name="image_url" accept="image/*">
                              </div>
                           </div>
                           <div class="profile-text">
                              <div class="profile-form-text">
                                 <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                       <div class="form__group">
                                          <input type="text" required value="{{ session('user')->business_name }}" id="business_name" name="business_name" class="form__field"
                                             placeholder="Business Name">
                                          <label for="business_name" class="form__label">Business Name</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                       <div class="form__group">
                                          <input type="text" id="about" value="{{ session('user')->about }}" name="about" class="form__field"
                                          placeholder="Tell us about your business">
                                          <label for="about" class="form__label">About Business</label>
                                       </div>
                                    </div>
                                    {{-- <div class="col-12 col-md-12 col-lg-6">
                                       <div class="form__group">
                                        <select id="business_category" name="business_category_id" class="form__field" placeholder="Business Category">
                                            <option value="">-- Select Business Category --</option>
                                            @if( !empty($business_categories) )
                                                @foreach( $business_categories->data as $business_category )
                                                    <option {{ session('user')->business_category_id == $business_category->id ? 'selected' : '' }} {{ old('business_category_id') == $business_category->id ? 'selected' : '' }} value="{{ $business_category->id }}">{{ $business_category->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label for="business_category" class="form__label">Business Category</label>
                                       </div>
                                    </div> --}}
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="text" required id="product_service" value="{{ session('user')->product_service }}" name="product_service" class="form__field" placeholder="What product service do you offer?">
                                            <label for="product_service" class="form__label">Product or Service Provided</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="number" required id="business_hours" value="{{ session('user')->business_hours }}" name="business_hours" class="form__field" placeholder="Business Hours">
                                            <label for="business_hours" class="form__label">Business Hours</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="time" required id="open_time" value="{{ session('user')->open_time }}" name="open_time" class="form__field" placeholder="Open Time">
                                            <label for="open_time" class="form__label">Open </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="time" required id="close_time" value="{{ session('user')->close_time }}" name="close_time" class="form__field" placeholder="Close Time">
                                            <label for="close_time" class="form__label">Close</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="text" required id="address" value="{{ session('user')->address }}" name="address" class="form__field" placeholder="Address">
                                            <label for="address" class="form__label">Address</label>
                                            <input type="hidden" name="latitude" id="latitude" value="{{ session('user')->latitude }}">
                                            <input type="hidden" name="longitude" id="longitude" value="{{ session('user')->longitude }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="text" required id="state" value="{{ session('user')->state }}" name="state" class="form__field" placeholder="State">
                                            <label for="state" class="form__label">State</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input type="text" required id="city" value="{{ session('user')->city }}" name="city" class="form__field" placeholder="City">
                                            <label for="city" class="form__label">City</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <select id="promote" required name="promote_category_id" class="form__field" placeholder="We Promote">
                                                <option value="">-- We Promote --</option>
                                                @if( !empty($promote_categories) )
                                                    @foreach( $promote_categories->data as $promote_categorie )
                                                        <option {{ session('user')->promote_category_id == $promote_categorie->id ? 'selected' : '' }} value="{{ $promote_categorie->id }}">{{ $promote_categorie->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="business_category" class="form__label">Promote Category</label>
                                        </div>
                                    </div>
                                    <!--<div class="col-12 col-md-12 col-lg-6">-->
                                    <!--    <div class="form__group">-->
                                    <!--        <select id="is_web_based_business" class="form-select form__field" name="is_web_based_business" aria-label="Is this a web based business">-->
                                    <!--            <option {{ session('user')->is_web_based_business == 1 ? 'selected' : '' }} value="1">Yes</option>-->
                                    <!--            <option {{ session('user')->is_web_based_business == 0 ? 'selected' : '' }} value="0">No</option>-->
                                    <!--        </select>-->
                                    <!--        <label for="is_web_based_business" class="form__label">Is this a web based business</label>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <input type="hidden" id="is_web_based_business" name="is_web_based_business" value="0">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input id="mobile_no" required name="mobile_no" value="{{ session('user')->mobile_no }}" class="form__field" placeholder="+1-2548963250">
                                            <label for="mobile_no" class="form__label">Add Mobile No (+1-2548963250)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <input disabled type="email" required id="workEmail" value="{{ session('user')->email }}" name="email" class="form__field" placeholder="Tell us about your business">
                                            <label for="workEmail" class="form__label">Work Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="form__group">
                                            <select id="web_based_service" required class="form__field" placeholder="Web Based Service">
                                                <option value=""> -- Is this a web-based service ? -- </option>
                                                <option {{ !empty(session('user')->site_url) ? 'selected' : '' }} value="1">Yes</option>
                                                <option {{ empty(session('user')->site_url) ? 'selected' : '' }} value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="website_div" class="col-12 col-md-12 col-lg-6" style="{{ !empty(session('user')->site_url) ? 'display:block;' : 'display:none;' }}">
                                        <div class="form__group">
                                            <input id="business_Site" name="site_url" value="{{ session('user')->site_url }}" class="form__field" placeholder="Add Business Website">
                                            <label for="business_Site" class="form__label">Website</label>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade" id="v-pills-changepassword" role="tabpanel"
                  aria-labelledby="v-pills-messages-tab">
                  <div class="my-account-tabs">
                    <form method="POST" action="{{ route('http-request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="action" value="change-password">
                        <div class="static-tab-account">
                            <div style="padding:0;" class="profile-text">
                                <div class="d-flex align-items-center justify-content-between">
                                <div class="profile-tile">
                                    <h1>Change Password</h1>
                                </div>
                                <div class="profile-btn">
                                    <button style="width: 100%;" type="submit" class="edit-profile">
                                        Update Password
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="row pt-4 mt-5">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form__group">
                                        <input type="password" required id="current_password" name="current_password" class="form__field"
                                            placeholder="Current Password">
                                        <label for="current_password" class="form__label">Current Password</label>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form__group">
                                        <input type="password" required id="new_password" name="new_password" class="form__field"
                                            placeholder="New Password">
                                        <label for="new_password" class="form__label">New Password</label>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form__group">
                                        <input type="password" required id="confirm_password" name="confirm_password" class="form__field"
                                            placeholder="Confirm Password">
                                        <label for="confirm_password" class="form__label">Confirm Password</label>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                  aria-labelledby="v-pills-profile-tab">
                  <div class="my-account-tabs">
                     <div class="profile-tab-account">
                        <div class="row">
                           <div class="col-12">
                              <div class="review-rating-text text-center">
                                 <div class="text-title">
                                    <h1>{{ session('user')->name }}</h1>
                                    <div
                                       class="gym-text d-flex align-items-center justify-content-center">
                                       <ul class="d-flex align-items-center">
                                          <li>
                                             <img src="{{ URL::to('frontend') }}/assets/img/gym-noun.png" alt="gym-noun"
                                                class="img-fluid">
                                          </li>

                                       </ul>
                                       <ul
                                          class="d-flex align-items-center justify-content-center ms-3">
                                          <li>
                                             <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="gym-noun"
                                                class="img-fluid">
                                          </li>
                                          <li>
                                             {{ session('user')->address }}
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-reviews">
                                 <ul class="d-flex align-items-center justify-content-center">
                                    <li class="ms-2">
                                        @if( session('user')->total_rating > 0 )
                                            <img src="{{ URL::to('frontend') }}/assets/img/star-heading.png" alt="star-heading"
                                                class="img-fluid">
                                        @else
                                            <img width="20px" src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                                        @endif
                                    </li>
                                    <li class="ms-2">{{ session('user')->total_rating }}</li>
                                    <li class="review-2e3336 ms-2">
                                        ({{ session('user')->total_review > 1 ? session('user')->total_review. " reviews" : session('user')->total_review . " review" }})
                                    </li>
                                 </ul>
                              </div>
                              <div class="review-tabs">
                                 <ul class="nav nav-tabs justify-content-center" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active border-width" id="home-tab"
                                          data-bs-toggle="tab" data-bs-target="#home" type="button"
                                          role="tab" aria-controls="home"
                                          aria-selected="true">REVIEWS</button>
                                    </li>
                                 </ul>
                                 <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                       aria-labelledby="home-tab">
                                       <div class="reviews-bussiness">
                                          <div class="review-title">
                                             <p>{{ session('user')->total_review > 1 ? session('user')->total_review. " reviews" : session('user')->total_review . " review" }}</p>
                                          </div>
                                       </div>
                                       <span id="_review_container"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                  aria-labelledby="v-pills-messages-tab">
                  <div class="my-account-tabs">
                     <div class="static-tab-account">
                        <div class="static-text">
                           <h1>Statistics</h1>
                        </div>
                        <div class="row pt-4">
                           <div class="col-12 col-md-4 pt-3">
                              <div class="total-user color-4b3b4d">
                                 <div id="total_users" class="total-text">
                                    <p>Total No. of App Users</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 pt-3">
                              <div class="total-user color-ba8b00">
                                 <div id="ongoing_deals" class="total-text">
                                    <p>Total No. of Ongoing Deals</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 pt-3  ">
                              <div class="total-user color-454f63">
                                 <div id="ongoing_marketing_deals" class="total-text">
                                    <p>Total No. of Ongoing Marketing Deals</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4  pt-3">
                              <div class="total-user color-ba8b00">
                                 <div id="total_deal_redeemed" class="total-text">
                                    <p>Total No. of Deals Redeemed</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4  pt-3">
                              <div class="total-user color-454f63">
                                 <div id="total_market_deal_redeemed" class="total-text">
                                    <p>Total No. of Marketing Deals Redeemed</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4  pt-3">
                              <div class="total-user color-ba8b00">
                                 <div id="total_user_deal_redeemed" class="total-text">
                                    <p>Total No. of Users Redeemed Deals</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-4 pt-3">
                              <div class="total-user color-454f63">
                                 <div id="total_user_merket_deal_redeemed" class="total-text">
                                    <p>Total No. of Users Redeemed marketing Deals</p>
                                    <h2>0</h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                  aria-labelledby="v-pills-settings-tab">
                  <div class="my-account-tabs">
                     <div class="static-tab-account">
                        <div class="notifaction-text">
                           <h1>Notifications</h1>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                           <div
                              class="notication-switch d-flex align-items-center justify-content-between">
                              <div class="switch-text">
                                 <span>Notifications On / Off</span>
                              </div>
                              <div class="swith">
                                 <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="notification_setting" value="1" {{ session('user')->notification_setting == 1 ? 'checked' : '' }}>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-condition" role="tabpanel"
                  aria-labelledby="v-pills-condition-tab">
                  <div class="my-account-tabs">
                     <div class="static-tab-account">
                        <div id="_terms_conditions" class="terms-text">
                           <h1 class="mb-3">Terms & Conditions</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel"
                  aria-labelledby="v-pills-privacy-tab">
                  <div class="my-account-tabs">
                     <div class="static-tab-account">
                        <div id="_privacy_policy" class="terms-text">
                           <h1 class="mb-3">Privacy Policy</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
                  <div class="my-account-tabs">
                     <div class="static-tab-account">
                        <div id="_faq_" class="terms-text">
                           <h1 class="mb-3">FAQs</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@push('script')
    <script>
        function _initMap(){}
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&libraries=places&callback=_initMap" defer></script>
    <script src="{{ asset('frontend/assets/js/my-account.js') }}"></script>
    @if( Session::has('tab') )
        <script>
            $('{{ Session::get("tab") }}').click();
        </script>
    @endif
@endpush
@endsection
