@extends('master')
@section('content')
<main>
   <section class="my-account-sec">
      <div class="d-flex align-items-start">
         <div class="nav account-tabs flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
               type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk.png" alt="" class="img-fluid non-active-icon">
            <img src="{{ URL::to('frontend') }}/assets/img/profile-bulk-colorfuul.png" alt="" class="img-fluid active-icon">
            Profile
            </button>
            <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
               type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/share.png" alt="share" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/share-color-full.webp" alt="" class="img-fluid active-icon">
                <span> Referral Link </span>
            </button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
               type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/heart-black.png" alt="heart" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/heart-color-full.png" alt="heart" class="img-fluid active-icon">
                My Favorites
            </button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
               type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/receipt-black.png" alt="receipt-black" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/receipt-color-full.png" alt="receipt-color-full" class="img-fluid active-icon">
                Subscription
            </button>
            <button class="nav-link" id="v-pills-notifications-tab" data-bs-toggle="pill"
               data-bs-target="#v-pills-notifications" type="button" role="tab" aria-controls="v-pills-notifications"
               aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/notification-bing.png" alt="notification-bing" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/notification-bing-color-full.png" alt="notification-bing-color-full" class="img-fluid active-icon">
                Notifications
            </button>
            <button class="nav-link" id="v-pills-terms-&-conditions-tab" data-bs-toggle="pill"
               data-bs-target="#v-pills-terms-conditions" type="button" role="tab" aria-controls="v-pills-terms-conditions"
               aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/document-text.png" alt="document-text" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/document-text-color-full.png" alt="document-text-color-full" class="img-fluid active-icon">
                Terms & Conditions
            </button>
            <button class="nav-link" id="v-pills-privacy-policy-tab" data-bs-toggle="pill"
               data-bs-target="#v-pills-privacy-policy" type="button" role="tab" aria-controls="v-pills-privacy-policy"
               aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/shield-tick.png" alt="" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/shield-tick-color-full.png" alt="share-color-full" class="img-fluid active-icon">
                Privacy Policy
            </button>
            <button class="nav-link" id="v-pills-faqs-tab" data-bs-toggle="pill" data-bs-target="#v-pills-faqs"
               type="button" role="tab" aria-controls="v-pills-privacy-policy" aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/message-question.png" alt="message-question" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/message-question-color-full.png" alt="message-question-color-full " class="img-fluid active-icon">
                FAQs
            </button>
            <button class="nav-link d-none" id="v-pills-suscribe-tab" data-bs-toggle="pill" data-bs-target="#v-pills-suscribe"
               type="button" role="tab" aria-controls="v-pills-suscribe" aria-selected="false">
                <img src="{{ URL::to('frontend') }}/assets/img/receipt-black.png" alt="receipt-black" class="img-fluid non-active-icon">
                <img src="{{ URL::to('frontend') }}/assets/img/receipt-color-full.png" alt="receipt-color-full" class="img-fluid active-icon">
                Subscription
            </button>
         </div>
         <div class="tab-content account-tabs-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box">
                     <div class="d-flex align-items-center justify-content-between profile-box">
                        <div class="grid-col">
                           <h3>Profile</h3>
                        </div>
                        <div class="grid-col">
                           <div class="img-box ">
                              <img src="{{ URL::to('frontend/assets/img/paitent.jpg') }}" alt="" class="img-fluid paitent">
                              <img src="{{ URL::to('frontend') }}/assets/img/plus-img.png" alt="plus-img" class="img-fluid plus-img">
                           </div>
                        </div>
                        <div class="grid-col">
                           <button class="edit-profile font-20">
                           Edit Profile
                           </button>
                        </div>
                     </div>
                     <div class="row profile">
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="form__group">
                                 <input type="text" id="name" class="form__field" placeholder="Your Email">
                                 <label for="name" class="form__label">Full Name*</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="form__group">
                                 <input type="number" id="phoneNumber" class="form__field" placeholder="Your Email">
                                 <label for="phoneNumber" class="form__label">Phone Number*</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="form__group">
                                 <input type="text" id="profession" class="form__field" placeholder="Your Email">
                                 <label for="profession" class="form__label">Profession*</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="form__group">
                                 <input type="email" id="Workprofession" class="form__field" placeholder="Your Email">
                                 <label for="Workprofession" class="form__label">Work Email Address*</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="form__group">
                                 <input type="email" id="WorkprofessionAdress" class="form__field" placeholder="Your Email">
                                 <label for="WorkprofessionAdrees" class="form__label">Personal Email Address*</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="profile-form">
                              <div class="from-box forms-box">
                                 <div class="form__group">
                                    <input type="password" id="workPass" class="form__field" placeholder="Your Email">
                                    <label for="workPass" class="form__label">Password*</label>
                                 </div>
                                 <div class="form-icon">
                                    <button class="pencil-bnt" data-bs-toggle="modal" data-bs-target="#forgetdModal">
                                    <i class="fas fa-pencil message-icon"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="official-photo">
                              <p>Official Photo ID / Work ID*</p>
                              <button class="officail-photo" data-bs-toggle="modal" data-bs-target="#officailIdModal">
                              <img src="{{ URL::to('frontend') }}/assets/img/official-id.png" alt="" class="img-fluid">
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-profile" role="tabpanel"
               aria-labelledby="v-pills-profile-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box">
                     <div class="row">
                        <div class="col-12 col-md-8">
                           <div class="referral-history-text">
                              <h1 class="font-26">Share the Love!</h1>
                              <p class="font-14">Receive a free added month to your membership each time your referral code <br>
                                 is used! Valid for member or business referral. The more the merrier!
                              </p>
                              <div class="referral-input">
                                 <p class="font-12">Referral Link</p>
                                 <input type="text" name="">
                                 <button class="share-link-btn font-14 ms-1">
                                 Share Link
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-4">
                           <div class="referral-history-img">
                              <img src="{{ URL::to('frontend') }}/assets/img/speaker.png" alt=" speaker" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="referral-text">
                              <h1 class="font-26">Referral History</h1>
                           </div>
                           <div class="referral-table table-responsive">
                              <table class="table font-14 left-1">
                                 <thead>
                                    <tr class="bg-eff2f5 ">
                                       <th scope="col " class="border-right border-left padding-1">Name</th>
                                       <th scope="col" class="border-right padding-1">Email</th>
                                       <th scope="col" class="padding-1">Reward</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="bg-aff">
                                       <td class="border-right border-left padding-1">Rachel Coleman</td>
                                       <td class="border-right padding-1">rachelcoleman@email.com</td>
                                       <td class="padding-1">
                                          <div class="d-flex align-items-center justify-content-between ">
                                             <p class="font-14">1 Month</p>
                                             <p class="font-14 color-green">Remaining</p>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="bg-eff">
                                       <td class="border-right border-left padding-1">Nicolas Andrews</td>
                                       <td class="border-right padding-1">nicolasandrews@email.com</td>
                                       <td class="padding-1">
                                          <div class="d-flex align-items-center justify-content-between ">
                                             <p class="font-14 ">1 Month</p>
                                             <p class="font-14 color-green">Remaining</p>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="border-right border-left padding-1">Andreea Patel</td>
                                       <td class="border-right padding-1">andreeapatel@email.com</td>
                                       <td class="padding-1">
                                          <div class="d-flex align-items-center justify-content-between ">
                                             <p class="font-14">1 Month</p>
                                             <p class="font-14 color-yellow">Consumed</p>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="bg-eff">
                                       <td class="border-right border-left padding-1">Timothy Watkins</td>
                                       <td class="border-right padding-1">timothywatkins@email.com</td>
                                       <td class="padding-1">
                                          <div class="d-flex align-items-center justify-content-between ">
                                             <p class="font-14 ">1 Month</p>
                                             <p class="font-14 color-yellow">Consumed</p>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="bg-eff2f5">
                                       <td colspan="2" class="border-left padding-1">Total</td>
                                       <td class="padding-1">4 months</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-messages" role="tabpanel"
               aria-labelledby="v-pills-messages-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box">
                     <div class="container">
                        <div class="row ">
                           <div class="col-12">
                              <div class="my-favorites">
                                 <h1 class="font-26">My Favorites </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="overflow-autos">
                        <div class="container ">
                           <div class="row pt-20  ">
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4 pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4 pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4 pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4 pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4 pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4  pt-20">
                                 <a href="./participating-businesses-single-about.html">
                                    <div class="card card-shadow">
                                       <div class="img-icon">
                                          <img src="{{ URL::to('frontend') }}/assets/img/salad-img.png" class="card-img-top img-fluid" alt="fetness">
                                       </div>
                                       <div class="card-body">
                                          <h5 class="card-title font-12">Parmesan Crusted Chicken</h5>
                                          <p class="card-text font-10">Parmesan Crusted Chicken Fillet served with… Sauteed
                                             Vegetables,
                                             Mashed Potatoes in a Light Whole Grain Mustard sauce
                                          </p>
                                       </div>
                                       <hr>
                                       <div class="card-bottom">
                                          <p class="font-14 color-ba8b00">$262.50</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-settings" role="tabpanel"
               aria-labelledby="v-pills-settings-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box suscribtion-user padding-100">
                     <div class="row ">
                        <div class="col-12">
                           <div class="suscription-text-box">
                              <div class="subscription-text d-flex align-items-center justify-content-between ">
                                 <h1 class="font-26">Subscription</h1>
                                 <button class="history-btn font-14" id="historyBtn">
                                 History
                                 </button>
                              </div>
                              <p class="font-14">Choose the right pricing and get started with your Plan</p>
                           </div>
                        </div>
                     </div>
                     <div class="row pt-20 suscribtion-text-box">
                        <div class="col-12 col-md-3 bg-3b3b4d ">
                           <div class="suscribe-text border-none width-100">
                              <div class="d-flex align-items-center justify-content-between">
                                 <h4 class="font-14 color-fff mar-001">Half Yearly</h4>
                                 <span class="green-dot"></span>
                                 <p class="fonr-14 color-fff ">
                                    Active
                                 </p>
                              </div>
                              <h1 class="font-36">$99.00</h1>
                              <h4 class="font-10 color-fff">The perfect way to get started and get used to our features.</h4>
                              <hr>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id=" Standard">
                                 <label class="form-check-label font-10 t color-fff" for=" Standard">
                                 All Features in Standard
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id=" Amet">
                                 <label class="form-check-label font-10 color-fff" for=" Amet">
                                 Amet cons deri dsei
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="Lorem">
                                 <label class="form-check-label font-10 color-fff" for="Lorem">
                                 Lorem Ipsum dolor sit
                                 </label>
                              </div>
                              <div class="suscribes-btn text-center">
                                 <button class="font-12 months-extr-btn">
                                 2 Months Extra
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-3">
                           <div class="width-01">
                              <div class="suscribe-texts height-01">
                                 <h4 class="font-10">Yearly</h4>
                                 <h1 class="font-36">$179.00 <span class="font-10">Sale 20% off</span></h1>
                                 <h4 class="font-10">The perfect way to get started and get used to our features.</h4>
                                 <hr>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label font-10 text-696982" for="flexCheckDefault">
                                    All Features in Standard
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="cons">
                                    <label class="form-check-label font-10 text-696982" for="cons">
                                    Amet cons deri dsei
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Ipsum">
                                    <label class="form-check-label font-10 text-696982" for="Ipsum">
                                    Lorem Ipsum dolor sit
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-notifications" role="tabpanel"
               aria-labelledby="v-pills-notifications-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box padding-110 ">
                     <div class="row">
                        <div class="col-12">
                           <div class="notifications-text-box">
                              <div class="subscription-text">
                                 <h1 class="font-26">Notifications</h1>
                                 <p class="font-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="switch-notification d-flex align-items-center justify-content-between">
                              <p class="font-14 color-3b3b4d">  Notifications On / Off</p>
                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-terms-conditions" role="tabpanel"
               aria-labelledby="v-pills-terms-conditions-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box padding-111">
                     <div class="row ">
                        <div class="col-12">
                           <div class="notifications-text-box">
                              <div class="term-text">
                                 <h1 class="font-26">Terms & Conditions</h1>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas sunt
                                    aperiam ex molestias alias corporis itaque quo aliquam, officia hic?
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-privacy-policy" role="tabpanel"
               aria-labelledby="v-pills-privacy-policy-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box padding-111">
                     <div class="row ">
                        <div class="col-12">
                           <div class="notifications-text-box">
                              <div class="term-text">
                                 <h1 class="font-26">Privacy Policy</h1>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas sunt
                                    aperiam ex molestias alias corporis itaque quo aliquam, officia hic?
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-faqs" role="tabpanel"
               aria-labelledby="v-pills-faqs-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box padding-111">
                     <div class="row ">
                        <div class="col-12">
                           <div class="notifications-text-box">
                              <div class="term-text">
                                 <h1 class="font-26">FAQs</h1>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nostrum ullam
                                    ea quam repudiandae, iste, enim molestiae autem doloremque ad aspernatur quo quos iusto,
                                    adipisci praesentium laudantium beatae culpa veritatis id consectetur illum unde fugit
                                    commodi. Eaque dolores, neque fuga qui quis ad amet porro odit doloribus aperiam blanditiis
                                    nulla fugiat, vero vitae laboriosam quasi pariatur quos necessitatibus culpa praesentium
                                    impedit aliquid, adipisci nesciunt repudiandae. Nisi blanditiis inventore dignissimos est iure
                                    quam omnis dolore praesentium iusto. Corporis vitae eligendi alias temporibus quasi fuga
                                    officia. Vero veniam fugit quas ipsum quibusdam atque, alias libero hic repellat veritatis. Ea
                                    mollitia architecto minus!
                                 </p>
                                 <p class="font-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas sunt
                                    aperiam ex molestias alias corporis itaque quo aliquam, officia hic?
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade account-tabs-content" id="v-pills-suscribe" role="tabpanel"
               aria-labelledby="v-pills-suscribe-tab">
               <div class="tab-content-area">
                  <div class="tab-content-box padding-100 padding-suscribed-section">
                     <div class="row ">
                        <div class="col-12">
                           <div class="suscribed-text-box">
                              <div class="subscribed-text  ">
                                 <h1 class="font-26"> History</h1>
                              </div>
                              <div class=" display-flex d-flex align-items-center border-boottom ">
                                 <div class="package-box">
                                    <p class="font-14 color-3443e5a mb-2">Package</p>
                                    <p class="color-3443e5a">Half Yearly</p>
                                 </div>
                                 <div class="subscribed-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Subscribed Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                                 <div class="expiry-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Expiry Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                              </div>
                              <div class="display-flex  d-flex align-items-center border-boottom ">
                                 <div class="package-box">
                                    <p class="font-14 color-3443e5a mb-2">Package</p>
                                    <p class="color-3443e5a">Half Yearly</p>
                                 </div>
                                 <div class="subscribed-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Subscribed Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                                 <div class="expiry-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Expiry Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                              </div>
                              <div class="display-flex  d-flex align-items-center border-boottom ">
                                 <div class="package-box">
                                    <p class="font-14 color-3443e5a mb-2">Package</p>
                                    <p class="color-3443e5a">Half Yearly</p>
                                 </div>
                                 <div class="subscribed-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Subscribed Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                                 <div class="expiry-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Expiry Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                              </div>
                              <div class="display-flex  d-flex align-items-center border-boottom ">
                                 <div class="package-box">
                                    <p class="font-14 color-3443e5a mb-2">Package</p>
                                    <p class="color-3443e5a">Half Yearly</p>
                                 </div>
                                 <div class="subscribed-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Subscribed Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
                                 </div>
                                 <div class="expiry-date-box">
                                    <p class="font-14 color-3443e5a mb-2">Expiry Date</p>
                                    <p class="color-3443e5a">12 Aug, 2020</p>
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
   </section>
</main>
<div class="modal fade officail-code-modal" id="officailIdModal" data-bs-backdrop="static" data-bs-keyboard="false"
   tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button close-button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body ">
            <h5 class=" Official-id font-26" id="staticBackdropLabel">Official ID</h5>
            <div class="officail-img text-center">
               <img src="{{ URL::to('frontend') }}/assets/img/official-id.png" alt="officail-Id-modal" class="img-fluid ">
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade officail-code-modal" id="forgetdModal" data-bs-backdrop="static" data-bs-keyboard="false"
   tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button close-button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body ">
            <h5 class=" Official-id font-26 text-center" id="staticBackdropLabel">Change Password</h5>
            <div class="officail-img text-center">
               <div class="profile-form">
                  <div class="from-box forms-box">
                     <div class="form__group">
                        <input type="password" id="currentName" class="form__field" placeholder="Your Email">
                        <label for="currentName" class="form__label">Current Password</label>
                     </div>
                     <div class="form-icon">
                        <i class="fa-solid fa-eye-slash message-icon toggle-password" toggle="#currentName"></i>
                        <div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="profile-form">
                  <div class="from-box forms-box">
                     <div class="form__group">
                        <input type="password" id="newPassword" class="form__field" placeholder="Your Email">
                        <label for="newPassword" class="form__label">New Password</label>
                     </div>
                     <div class="form-icon">
                        <i class="fa-solid fa-eye-slash message-icon toggle-password" toggle="#newPassword"></i>
                        <div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="profile-form">
                  <div class="from-box forms-box">
                     <div class="form__group">
                        <input type="password" id="confrimPassword" class="form__field" placeholder="Your Email">
                        <label for="confrimPassword" class="form__label">Confirm Password</label>
                     </div>
                     <div class="form-icon">
                        <i class="fa-solid fa-eye-slash message-icon toggle-password" toggle="#confrimPassword"></i>
                        <div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="submit-btns text-center">
                  <button class="submit-btn font-20">
                  Submit
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    @push('script')
        <script>
            $( document ).ready(function() {
                $('#historyBtn').on("click", function(e){
                    $("#v-pills-suscribe").addClass("active show");
                    $("#v-pills-settings").removeClass("active show");
                });
                $(".toggle-password").click(function() {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
            });
        </script>
    @endpush
@endsection
