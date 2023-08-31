@extends('master')
@section('content')
<main>
   <section class="sec-promotion-management">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="promotion-deal d-flex align-items-center justify-content-between">
                  <div class="deal-title">
                     <h1>Promotional Deals</h1>
                  </div>
                  <div class="deal-img">
                     <a href="{{ route('marketing-deal-add') }}"> <img src="{{ URL::to('frontend') }}/assets/img/deal-plus.png" alt="deal-img" class="img-fluid"></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row deal-row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10 ">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-boy.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Cardio Section</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img//gym-man.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Selectorized Training</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14 color-66c010">Paid</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-weight.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Free Weights Section</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-fit-sarea.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Functional Fit Area</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-locker.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Locker System</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14 color-66c010">Paid</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/sgym-steam.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Sauna and Steam</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-unlimited.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Consultation – Unlimited</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-fit-sarea.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Functional Fit Area</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-group.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">Group Classes – Four per month</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-netflix.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">In Gym Access to Netflix</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-car.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-16">Pro Package for Digital Experience</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14">Pending</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
               <div class="deal-card">
                  <a href="{{ route('deal-detail',['name' => 'deal-1']) }}">
                     <div class="card-deal-img">
                        <div class="img-card">
                           <img src="{{ URL::to('frontend') }}/assets/img/gym-training.jpg" alt="gym-deal" class="img-fluid">
                        </div>
                        <div class="deal-icon">
                           <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        </div>
                     </div>
                     <div class="card-text">
                        <ul class="review-star d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                              <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                           </li>
                           <li class="ms-2 color-2e3336">(237 reviews)</li>
                        </ul>
                        <div class="card-title">
                           <p class="color-2e3336 font-18">16 Personal Training Sessions</p>
                           <p class="color-333 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between">
                           <li class="font-14">$80</li>
                           <li class="font-14 color-66c010">Paid</li>
                        </ul>
                     </div>
                     <div class="deal-footer">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                           </li>
                           <li class="footer-california ms-1">
                              CALIFORNIA
                           </li>
                        </ul>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
