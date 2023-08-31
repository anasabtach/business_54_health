@extends('master')
@section('content')
<main>
   <section class="sec-map">
      <div class="row gx-0">
         <div class="col-12 col-md-4 col-xl-3 relative">
            <div class="map-search-box">
               <div class="map-text d-flex align-items-center ">
                  <div class="back-button  ms-3">
                     <a href="{{ route('community') }}"><img src="{{ URL::to('frontend') }}/assets/img/com-icon.png" alt="back-arrow" class="com-icon img-fluid">  </a>
                  </div>
                  <div class="search-bar ms-2">
                     <div class="search-input">
                        <input type="text" id="_map_search" placeholder="Search" class="map-search">
                        <div class="map-search-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/search-map.png" style="cursor:pointer;" id="search-map" alt="search-map" class="img-fluid">
                        </div>
                        <div class="map-setting-icon" id="settingModal">
                           <img src="{{ URL::to('frontend') }}/assets/img/mapsetting.png" alt="map-img" class="img-fluid" >
                        </div>
                     </div>
                  </div>
               </div>
               <div class="category-text map-category-text">
                  <h6 class="">
                     Category
                  </h6>
                  @if( !empty($businessCategories) )
                    @foreach ( $businessCategories as $businessCategory )
                        <div class="d-flex align-items-center justify-content-between border-3-solid pb-2 pt-2">
                            <p>{{ $businessCategory->title }}</p>
                            <div class="form-check">
                                <input class="form-check-input business_category" type="checkbox" id="check1" name="business_category" value="{{ $businessCategory->id }}">
                            </div>
                        </div>
                    @endforeach
                  @endif
               </div>
               <div id="vendor_list_container" class="map-content-box"></div>
            </div>
         </div>
         <div class="col-12 col-md-8 col-xl-9">
            <div style="height: 100%;" id="map"></div>
         </div>
      </div>
   </section>
</main>
@push('script')
<script>
    let latitude  = '{{ !empty(session("user")) ? session("user")->latitude : null }}';
    let longitude = '{{ !empty(session("user")) ? session("user")->longitude : null }}';
</script>
<script src="{{ asset('frontend/assets/js/vendor-map.js') }}"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&libraries=places,drawing&callback=initMap"></script>
@endpush
@endsection
