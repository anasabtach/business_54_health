@extends('master')
@section('content')
<main>
   <section class="sec-community-single">
      <div class="single-card-top">
         <div class="single-card">
            <div style="width:100%; height:200px;" class="single-img">
               <img style="width:100%; height:100%; object-fit:cover;" src="{{ $record->banner_image_url }}" title="{{ $record->name }}" alt="{{ $record->name }}" class="img-fluid">
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="back-arrows">
                     <a href="{{ route('community') }}">
                        <ul class="d-flex align-items-center ">
                           <li><img src="{{ URL::to('frontend') }}/assets/img/back-arrow.png" alt="back-arrow" class="img-fluid"></li>
                           <li class="back-arrow  ms-1"> Back</li>
                        </ul>
                     </a>
                  </div>
                  <div class="soup-salad-box d-flex align-items-center justify-content-between">
                     <div class="soup-text">
                        <h1>{{ $record->name }}</h1>
                     </div>
                     <div class="about-button">
                        <button class="about-btn"  data-bs-toggle="modal" data-bs-target="#aboutIdModal">
                            About
                        </button>
                     </div>
                  </div>
                  <div class="address-text d-flex align-items-center">
                     @if( !empty($record->business_category->title) )
                        <ul class="d-flex align-items-center">
                            <li><img src="{{ URL::to('frontend') }}/assets/img/noun-food.png" alt="noun-food" class="img-fluid"></li>
                            <li class="ms-1" >{{ $record->business_category->title }}</li>
                        </ul>
                     @endif
                     <ul class="d-flex align-items-center ms-4">
                        <li><img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="noun-food" class="img-fluid"></li>
                        <li class="ms-1">{{ $record->address }}</li>
                     </ul>
                  </div>
                  <div class="reviews-text">
                    <div class="star-img">
                        <ul class="review-star d-flex align-items-center">
                            <li>
                                @for( $r=1; $r <= 5; $r++ )
                                    @if( $record->total_rating >= $r )
                                        <img style="width:15px;" src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                                    @else
                                        <img style="width:15px;" src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                                    @endif
                                @endfor
                            </li>
                            <li class="ms-2 color-2e3336">({{ $record->total_review > 1 ? "{$record->total_review} reviews" : "{$record->total_review} review" }})</li>
                        </ul>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <nav class="promtomal-deal-tab">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <div class="container">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PROMOTIONAL DEALS</button>
               </div>
         </nav>
         </div>
         <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="promotion-title">
                           <h1>Promotional Deals</h1>
                        </div>
                     </div>
                  </div>
                  <div id="deal-container" class="row"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<div class="review-modal">
   <div class="modal fade officail-code-modal" id="aboutIdModal" data-bs-backdrop="static" data-bs-keyboard="false"
      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
         <div class="modal-content modal-wid">
            <div class="modal-header">
               <button type="button close-button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="modal-bottom-border">
                  <div class="single-text-modal text-center">
                     <h1 class="font-26">{{ $record->name }}</h1>
                     <div class="d-flex align-items-center text-center modal-img-text">
                        @if( !empty($record->business_category->title) )
                            <div class="modal-text food-text ">
                                <img src="{{ URL::to('frontend') }}/assets/img/noun-food.png" alt="noun-food" class="img-fluid font-20">
                                <span class="font-12">{{ $record->business_category->title }}</span>
                            </div>
                        @endif
                        <div class="modal-img california-text ">
                           <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="Location" class="img-fluid font-10">
                           <span class="font-12">{{ $record->address }}</span>
                        </div>
                     </div>
                     <p class="single-star">
                        @if( $record->total_rating > 0 )
                            <img src="{{ URL::to('frontend') }}/assets/img/star-heading.png" alt="star " class="img-fluid me-1">
                        @else
                            <img width="20px" src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star " class="img-fluid me-1">
                        @endif
                        <span class=" me-1">{{ $record->total_rating }}</span>
                        <span class="color-2e3336 me-1"> {{ $record->total_review > 1 ? '('.$record->total_review.' reviews)' : '('.$record->total_review.' review)' }}</span>
                     </p>
                  </div>
               </div>
               <div class="modal-tabs">
                  <nav>
                     <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active font-10" id="nav-about-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">
                        ABOUT
                        </button>
                        <button class="nav-link font-10" id="nav-profile-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                           aria-selected="false">
                        REVIEWS
                        </button>
                     </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="tab-content-about">
                           <div class="d-flex  justify-content-between">
                              <div class="tab-text">
                                 <p class="font-500">Working Hours</p>
                                 <p class="font-12 color-333">Mon - Sun<br>
                                    {{ date('h:i A',strtotime($record->open_time)) }} - {{ date('h:i A',strtotime($record->close_time)) }}
                                 </p>
                                 <p class="font-500 top-1">Address</p>
                                 <p class="font-12 color-333">{{ $record->address }}</p>
                              </div>
                              <div class="tab-img">
                                <div style="height:300px; width:420px;" id="map"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="tab-content-review">
                           <div class="review-text">
                              <p class="font-500 review-bottom">{{ $record->total_review > 1 ? $record->total_review.' reviews' :  $record->total_review.' review' }}</p>
                              <span id="review_container"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@push('script')
    <script>
        let deal_user_id     = '{{ $record->id }}';
        let vendor_name = '{{ $record->name }}';
        let vendor_lat  = '{{ $record->latitude }}';
        let vendot_lng  = '{{ $record->longitude }}';
    </script>
    <script src="{{ asset('frontend/assets/js/vendor-detail.js') }}"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&libraries=places,drawing&callback=initMap"></script>
@endpush
@endsection
