@extends('master')
@section('content')
<main>
   <section class="sec-community">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="comunity-deal d-flex align-items-center justify-content-between">
                  <div class="deal-title">
                     <h1>Community</h1>
                  </div>
                  <div class="deal-img">
                     <a href="{{ route('vendor-map') }}">
                        <button class="map-button">
                            <img src="{{ URL::to('frontend') }}/assets/img/location-1.png" alt="deal-img" class="img-fluid">
                        </button>
                     </a>
                       <div class="dropdown">
                           <button class=" dropdown-toggle setting-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{ URL::to('frontend') }}/assets/img/setting.png" alt="deal-img" class="img-fluid" >
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li>
                              <div class="category-text ">
                                    <h6 class="">
                                       Category
                                    </h6>
                                    @if( !empty($businessCategories) )
                                        @foreach( $businessCategories as $category )
                                            <div class="d-flex align-items-center justify-content-between border-3-solid pb-2 pt-2">
                                                <p>{{ $category->title }}</p>
                                                <div class="form-check">
                                                    <input class="form-check-input business_category" type="checkbox" name="business_category" value="{{ $category->id }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                 </div>
                              </li>
                           </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="deal-container" class="row comunnity-row">
            <span class="loader"></span>
         </div>
      </div>
      {{-- <div class="category-text ">
        <h6 class="">
           Category
        </h6>
        <div class="d-flex align-items-center justify-content-between border-3-solid pb-2 pt-2">
           <p>Fitness</p>
           <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
           </div>
        </div>
        <div class="d-flex align-items-center justify-content-between  border-3-solid pb-2 pt-2">
           <p>Clothing</p>
           <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
           </div>
        </div>
        <div class="d-flex align-items-center justify-content-between  border-3-solid pb-2 pt-2">
           <p>Grocery</p>
           <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked="">
           </div>
        </div>
        <div class="d-flex align-items-center justify-content-between  border-3-solid pb-2 pt-2">
           <p>Health</p>
           <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked="">
           </div>
        </div>
        <div class="d-flex align-items-center justify-content-between  border-3-solid pb-2 pt-2 ">
           <p>Appliances</p>
           <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
           </div>
        </div>
        <button class="submit-btn">
        Search
        </button>
     </div> --}}
   </section>
</main>
@push('script')
    <script src="{{ asset('frontend/assets/js/community.js') }}"></script>
@endpush
@endsection
