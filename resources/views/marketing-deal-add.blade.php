@extends('master')
@section('content')
<main>
   <section class="sec-promption-deal-menegment ">
      <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="promotion-text-box">
               <div class="edit-text">
                  <h1>Add Marketing Deals</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 col-md-8 col-lg-7 order-2 order-md-0">
            <div class="row">
               <div class="col-12 col-lg-9">
                  <div class="update-form">
                     <div class="from-box">
                        <div class="form__group">
                           <input type="text" id="PasswordConfrim" class="form__field" placeholder="Your Email">
                           <label for="PasswordConfrim" class="form__label">Name<span class="text-red">*</span></label>
                        </div>
                     </div>
                     <div class="input-group">
                        <select class="form-select" id="price_type" aria-label="Example select with button addon">
                           <option selected>I would like to list</option>
                           <option value="special_price">Special price</option>
                           <option value="off">Off %</option>
                           <option value="free">Free product or service</option>
                        </select>
                     </div>
                     <div id="special_price_field" class="from-box d-none mt-5">
                        <div class="form__group">
                           <input type="text" id="Price" class="form__field" placeholder="Price">
                           <label for="Price" class="form__label">Price<span class="text-red">*</span></label>
                        </div>
                     </div>
                     <div id="off_field" class="from-box d-none mt-5">
                        <div class="form__group">
                           <input type="text" id="sale_price" class="form__field" placeholder="Price">
                           <label for="sale_price" class="form__label">Sale Price<span class="text-red">*</span></label>
                        </div>
                     </div>
                     <div class="description-text">
                        <textarea name="" id=""  placeholder="Description"  class="text-areas"></textarea>

                     </div>
                     <div class="input-group top-1">
                        <select class="form-select" id="time_bound" aria-label="Example select with button addon">
                           <option selected>Deal type</option>
                           <option value="ongoing">Ongoing</option>
                           <option value="time_bound">Time bound</option>
                        </select>
                     </div>
                     <div id="time_bond_field" class="row top-2 d-none">
                        <div class="col-12 col-md-6">
                           <div class="from-box">
                              <div class="form__group">
                                 <p><input type="text" id="datepicker" class="border-1"></p>
                                 <label for="datepicker" class="postion-nan">Start Date</label>
                                 <div class="form-icon">
                                    <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" alt="calendar_" class="img-fluid calander-icon"  >
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="from-box">
                              <div class="form__group ">
                                 <p><input type="text" id="startDate" class="border-1 "></p>
                                 <label for="startDate" class="postion-nan">End Date</label>
                                 <div class="form-icon">
                                    <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" alt="calendar_" class="img-fluid calander-icon">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="remeded-check-box d-flex align-items-center">
                        <div class="check-remeded">
                           <p>Redeem Type</p>
                        </div>
                        <div class="check-boxes ms-5">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="inlineCheckbox1" >
                              <label class="form-check-label" for="inlineCheckbox1">One Time</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="inlineCheckbox2" >
                              <label class="form-check-label" for="inlineCheckbox2">Multiple</label>
                           </div>
                        </div>
                     </div>
                     <div class="from-box mt-4">
                        <div class="form__group">
                           <input type="number" id="deal-code" class="form__field" placeholder="Your Email">
                           <label for="deal-code" class="form__label">Deal Code</label>
                        </div>
                     </div>
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
                  <img src="{{ URL::to('frontend') }}/assets/img/gellary-img.png" alt="gellary-img" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@push('script')
    <script src="{{ asset('frontend/assets/js/create-deal.js') }}"></script>
@endpush
@endsection
