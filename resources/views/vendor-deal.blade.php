@extends('master')
@section('content')
<main>
   <section class="single-about-page">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="back-botton">
                  <a href="{{ route('vendor-detail',['name' => 'pizza']) }}">
                     <button class="back-arrow">
                        <ul class="d-flex align-items-center">
                           <li>
                              <img src="{{ URL::to('frontend') }}/assets/img/back-arrow.png" alt="back-arrow" class="img-fluid">
                           </li>
                           <li>
                              <span class="color-8a9eb8">Back</span>
                           </li>
                        </ul>
                     </button>
                  </a>
               </div>
            </div>
         </div>
         <div class="row pt-3">
            <div class="col-12 col-md-5 col-lg-4">
               <div class="parmesan-img-box">
                  <img src="{{ URL::to('frontend') }}/assets/img/discription-img.jpg" alt="discription-img" class="img-fluid">
               </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
               <div class="parmesan-text-box">
                  <div class="parmesan-title">
                     <h1>Parmesan Crusted Chicken
                        <span class="ms-2"><img src="{{ URL::to('frontend') }}/assets/img/star-heading.png" alt="star-heading" class="img-fluid"></span>
                        <span class="color-2e3336">4.5</span>
                     </h1>
                     <h2>$260.00</h2>
                  </div>
                  <div class="parmesan-discription-title">
                     <h2>Description</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="realted-product">
                  <p>Related Products</p>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
                     <div class="deal-card">
                        <a href="{{ route('vendor-deal',['name' => 'pizza']) }}">
                           <div class="card-deal-img">
                              <div class="img-card">
                                 <img src="{{ URL::to('frontend') }}/assets/img/Halwa-pori.jpg" alt="Halwa-pori" class="img-fluid">
                              </div>
                           </div>
                           <div class="card-text">
                              <div class="card-title">
                                 <p class="color-2e3336 font-18">Parmesan Crusted Chicken</p>
                                 <p class="color-333 font-14">Parmesan Crusted Chicken Fillet served with Sauteed Vegetables, Mashed Potatoes in a Light Whole Grain Mustard sauce</p>
                              </div>
                           </div>
                           <div class="deal-footer">
                              <ul class="d-flex align-items-center">
                                 <li class="footer-ralated color-ba8b00">
                                    $162.50
                                 </li>
                              </ul>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
                     <div class="deal-card">
                        <a href="{{ route('vendor-deal',['name' => 'pizza']) }}">
                           <div class="card-deal-img">
                              <div class="img-card">
                                 <img src="{{ URL::to('frontend') }}/assets/img/chiken.png" alt="Chicken" class="img-fluid">
                              </div>
                           </div>
                           <div class="card-text">
                              <div class="card-title">
                                 <p class="color-2e3336 font-18">Parmesan Crusted Chicken</p>
                                 <p class="color-333 font-14">Parmesan Crusted Chicken Fillet served with Sauteed Vegetables, Mashed Potatoes in a Light Whole Grain Mustard sauce.</p>
                              </div>
                           </div>
                           <div class="deal-footer">
                              <ul class="d-flex align-items-center">
                                 <li class="footer-ralated color-ba8b00">
                                    $162.50
                                 </li>
                              </ul>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
                     <div class="deal-card">
                        <a href="{{ route('vendor-deal',['name' => 'pizza']) }}">
                           <div class="card-deal-img">
                              <div class="img-card">
                                 <img src="{{ URL::to('frontend') }}/assets/img/mix-chiken.jpg" alt="mix-chiken" class="img-fluid">
                              </div>
                           </div>
                           <div class="card-text">
                              <div class="card-title">
                                 <p class="color-2e3336 font-18">Parmesan Crusted Chicken</p>
                                 <p class="color-333 font-14">Parmesan Crusted Chicken Fillet served with Sauteed Vegetables, Mashed Potatoes in a Light Whole Grain Mustard sauce</p>
                              </div>
                           </div>
                           <div class="deal-footer">
                              <ul class="d-flex align-items-center">
                                 <li class="footer-ralated color-ba8b00">
                                    $162.50
                                 </li>
                              </ul>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
                     <div class="deal-card">
                        <a href="{{ route('vendor-deal',['name' => 'pizza']) }}">
                           <div class="card-deal-img">
                              <div class="img-card">
                                 <img src="{{ URL::to('frontend') }}/assets/img/tomato-chiken.jpg" alt="tomato-chiken" class="img-fluid">
                              </div>
                           </div>
                           <div class="card-text">
                              </ul>
                              <div class="card-title">
                                 <p class="color-2e3336 font-18">Parmesan Crusted Chicken</p>
                                 <p class="color-333 font-14">Parmesan Crusted Chicken Fillet served with Sauteed Vegetables, Mashed Potatoes in a Light Whole Grain Mustard sauce</p>
                              </div>
                           </div>
                           <div class="deal-footer">
                              <ul class="d-flex align-items-center">
                                 <li class="footer-ralated color-ba8b00">
                                    $162.50
                                 </li>
                              </ul>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
