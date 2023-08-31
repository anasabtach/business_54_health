@extends('master')
@section('content')
<main>
   <section class="sec-promption-deal-menegment ">
      <div class="container">
      <div class="row">
         <div class="col-12">
            @include('flash-message')
            <div class="promotion-text-box">
               <div class="edit-text">
                    @if( $deal_type == 'marketing' )
                        <h1>Add Marketing Deals</h1>
                    @else
                        <h1>Add Promotion</h1>
                    @endif
               </div>
            </div>
         </div>
      </div>
      <form id="payment-form" method="post" action="{{ route('http-request') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="action" value="create-deal">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-7 order-2 order-md-0">
               <div class="row">
                  <div class="col-12 col-lg-9">
                     <div class="update-form">
                        <div class="from-box">
                           <div class="form__group">
                              <input type="text" value="{{ old('name') }}" required id="name" name="name" class="form__field" placeholder="Name">
                              <label for="name" class="form__label">Name<span class="text-red"></span></label>
                           </div>
                        </div>
                        <div class="input-group">
                           <select class="form-select" data-value="{{ old('price_type') }}" required name="price_type" id="price_type">
                              <option value="" selected>I would like to list</option>
                              <option {{ old('price_type') == 'special_price' ? 'selected' : '' }} value="special_price">Special price</option>
                              <option {{ old('price_type') == 'off' ? 'selected' : '' }} value="off">% off</option>
                              <option {{ old('price_type') == 'free' ? 'selected' : '' }} value="free">Free product or service</option>
                           </select>
                        </div>
                        <div id="special_price_field" class="from-box d-none mt-5">
                           <div class="form__group">
                              <input type="number" value="{{ old('price') }}" id="Price" name="price" class="form__field" placeholder="Price">
                              <label for="Price" class="form__label">Price<span class="text-red"></span></label>
                           </div>
                        </div>
                        <div id="off_field" class="from-box d-none mt-5 off_field">
                            <div class="form__group">
                               <input type="number" value="{{ old('discount_percentage') }}" id="discount_percentage" name="discount_percentage" class="form__field" placeholder="Discount Percentage">
                               <label for="discount_percentage" class="form__label">Discount Percentage (%)<span class="text-red"></span></label>
                            </div>
                         </div>
                        <div id="off_field" class="from-box d-none mt-5 off_field">
                           <div class="form__group">
                              <input type="number" readonly value="{{ old('sale_price') }}" id="sale_price" name="sale_price" class="form__field" placeholder="Price">
                              <label for="sale_price" class="form__label">Sale Price<span class="text-red"></span></label>
                           </div>
                        </div>
                        <div class="description-text">
                           <label for="description" class="des-text-label">Description</label>
                           <textarea name="description" required id="" placeholder="Use this space to describe your services/special. Description will appear on members end"  class="text-areas">{{ old('description') }}</textarea>
                        </div>
                        <div class="description-text">
                            <label for="description" class="des-text-label">Show 54Health membership will auto-populate on member’s end</label>
                            <textarea name="how_to_redeem" required id="how_to_redeem" placeholder="Optional: add any additional steps members should take to redeem discount. Example: mention this ad prior to check out"  class="text-areas">{{ old('how_to_redeem') }}</textarea>
                         </div>
                        <div class="input-group top-1">
                           <select class="form-select" required name="time_bound" id="time_bound" data-value="{{ old('time_bound') }}">
                              <option value="" selected>Deal type</option>
                              <option {{ old('time_bound') == 'ongoing' ? 'selected' : '' }} value="ongoing">Ongoing</option>
                              <option {{ old('time_bound') == 'time_bound' ? 'selected' : '' }} value="time_bound">Time bound</option>
                           </select>
                        </div>
                        <div id="time_bond_field" class="row top-2 d-none">
                           <div class="col-12 col-md-6">
                              <div class="from-box">
                                 <div class="form__group">
                                    <p><input type="text" value="{{ old('start_date') }}" name="start_date" id="datepicker" class="border-1"></p>
                                    <label for="datepicker" class="postion-nan">Start Date</label>
                                    <div class="form-icon">
                                       <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" alt="calendar_" data-id="datepicker" class="img-fluid calander-icon"  >
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6">
                              <div class="from-box">
                                 <div class="form__group ">
                                    <p><input type="text" value="{{ old('end_date') }}" name="end_date" id="startDate" class="border-1 "></p>
                                    <label for="startDate" class="postion-nan">End Date</label>
                                    <div class="form-icon">
                                       <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" alt="calendar_" data-id="startDate" class="img-fluid calander-icon">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="from-box">
                                    <div class="form__group">
                                        <select style="margin-top:40px;" class="form-select" required name="deal_type" id="deal_type" data-value="{{ old('deal_type') }}">
                                            <option value="" selected>Make Available Deal To</option>
                                            <option {{ old('deal_type') == 'member' ? 'selected' : '' }} value="member">Members</option>
                                            <option {{ old('deal_type') == 'both' ? 'selected' : '' }} value="both">Members and Participating Businesses</option>
                                         </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="remeded-check-box d-flex align-items-center">
                           <div class="check-remeded">
                              <p>Redeemable</p>
                           </div>
                           <div class="check-boxes ms-5">
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" {{ old('redeem_type') == 'one_time' ? 'checked' : '' }} required name="redeem_type" type="radio" value="one_time" name="flexRadioDefault" id="inlineCheckbox1" >
                                 <label class="form-check-label" for="inlineCheckbox1">One Time</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input"  required {{ old('redeem_type') == 'multiple' ? 'checked' : '' }} name="redeem_type" type="radio" value="multiple" name="flexRadioDefault" id="inlineCheckbox2" >
                                 <label class="form-check-label" for="inlineCheckbox2">Multiple</label>
                              </div>
                           </div>
                        </div>
                    
                        <div id="deal_code_fields" class="from-box mt-5 dhide">
                           <div class="form__group">
                              <input type="text" required id="deal-code" value="{{ Str::random(6) }}" name="deal_code" class="form__field" placeholder="Your Email">
                              <label for="deal-code" class="form__label">Deal Code</label>
                           </div>
                        </div>
                     
                        @if( $deal_type == 'marketing' )
                            <div class="from-box mt-4">
                                <div class="form__group">
                                    <div id="card-element"><!-- Elements will create form elements here --></div>
                                    <p id="card-errors" role="alert"></p>
                                </div>
                            </div>
                        @endif
                        <div></div>
                        <div class="post-button">
                           <button class="post-btn" id="postBtn" >
                               Post
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 order-1 order-md-0">
               <div class="upload-img-text">
                  <div class="imgge-text  mb-3">
                     <p>Upload Display Image</p>
                  </div>
                  <div class="edit-img">
                     <img id="_upload_image" src="{{ URL::to('frontend') }}/assets/img/gellary-img.png" alt="gellary-img" class="img-fluid">
                     <input type="file" class="" id="image_url" name="image_url" accept="image/*">
                  </div>
               </div>
            </div>
         </div>
      </form>
   </section>
</main>
@push('script')
    <script>
        var deal_type = '{{ $deal_type }}';
        var STRIPE_PUBLISHED_KEY = '{{ env("STRIPE_PUBLISHED_KEY") }}';
    </script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('frontend/assets/js/create-deal.js') }}"></script>
    
    <script>
          jQuery('document').ready(function () {
                        jQuery("input[name='redeem_type']").change(function () {
                        var data = $(this).val();
                        if (data == "one_time") {
                         $('.dhide').show();
                        } else {
                          
                          $('.dhide').hide();
                        }
                        });
          });
    </script>
@endpush
@endsection
