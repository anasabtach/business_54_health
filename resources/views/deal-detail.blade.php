@extends('master')
@section('content')
<main>
   <section class="sec-single-managment">
      <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                <div class="single-img">
                <img src="{{ $record->image_url }}" alt="gym-weight" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-9">
                <div class="single-about-discription">
                <div class="single-about-text d-flex align-items-center justify-content-between">
                    <div class="cardio-text">
                        <p class="sigle-detail">Details</p>
                        <div class="star-heading d-flex align-items-center">
                            <h1 class="single-tile">{{ $record->name }}</h1>
                            <div class="star-img ms-3">
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
                    @if( Auth::check() && Auth::user()->id == $record->user->id )
                        <div class="activiate-text">
                            <div class="active-img">
                                <a href="{{ route('deal-edit',['name' => $record->slug ]) }}"><img src="{{ URL::to('frontend') }}/assets/img/pen-single-page.png" alt="pen-single-page" class="img-fluid me-4"> </a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="price-avtice-box d-flex align-items-center justify-content-between">
                    @if( $record->price_type == 'special_price' )
                        <div class="price font-26">
                            ${{ $record->price }}
                        </div>
                    @endif
                    @if( $record->price_type == 'off' )
                        <div class="price font-26">
                            <ul class="d-flex align-items-center">
                                @if(  $record->price_type == 'special_price' )
                                    <li class="footer-ralated color-ba8b00">
                                        ${{ $record->price }}
                                    </li>
                                @elseif( $record->price_type == 'off' )
                                    <li class="footer-ralated color-ba8b00">
                                        <s>${{ $record->price }}</s>  ${{ $record->sale_price }}
                                    </li>
                                @else
                                    <li class="footer-ralated color-ba8b00">
                                        Free
                                    </li>
                                @endif
                            </ul>
                        </div>
                    @endif
                    @if( Auth::check() && Auth::user()->id == $record->user->id )
                        <div class="active-checkbox d-flex align-items-center mt-2">
                            <div class="active-text">
                                <p class="me-3">Activate</p>
                            </div>
                            <div class="active-box">
                                <div class="form-check form-switch ">
                                    <input class="form-check-input _deal_status" data-slug="{{ $record->slug }}" type="checkbox" role="switch" id="flexSwitchCheckChecked" {{ $record->status == '1' ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="description-text">
                    <p class="font-18">Description</p>
                    <p class="font-13" >{{ $record->description }}</p>
                    <p class="font-18">Show 54Health membership will auto-populate on member’s end</p>
                    <p class="font-13" >{{ $record->how_to_redeem }}</p>
                    @if(  Auth::check() && Auth::user()->id == $record->user->id )
                      <p class="font-18">Redeem Code</p>
                      <p class="font-13" >{{ $record->deal_code }}</p>
                    @endif
                    @if( Auth::user()->id != $record->user->id )
                        @if( empty($record->is_redeem) || $record->redeem_type == 'multiple' )
                            <div class="redeemed-btn gx-0 d-flex align-items-center">
                                <button class="btn-redeemed" data-bs-toggle="modal" data-bs-target="#redeemedModal">
                                    Redeem
                                </button>
                            </div>
                        @else
                            <div class="redeemed-btn gx-0 d-flex align-items-center">
                                    <a class="text-info btn-redeemed-link" href="javascript:void(0);">
                                        Redeemed
                                    </a>
                            </div>
                        @endif
                    @endif
                    <div class="remedem-text">
                        <p>Redeem Stats</p>
                        <div class="remded-text-box d-flex align-items-center">
                            <div class="remeded-hand ">
                            <div class="img-redem d-flex align-items-center">
                                <div class="redem-img">
                                    <img src="{{ URL::to('frontend') }}/assets/img/user-remed.png" alt="remeded-hand" class="img-fluid">
                                </div>
                                <div class="redem-text  ms-1 ">
                                    <span class="redeems-no ">No. of Redeemed:</span>
                                    <span class="redeem-28 ms-3">{{ $record->paid_promotion == 0 ? $record->deal_redeemed_count : $record->marketing_deal_redeemed_count }}</span>
                                </div>
                            </div>
                            </div>
                            <div class="user-box-remed">
                            <div class="img-redem d-flex align-items-center">
                                <div class="redem-img">
                                    <img src="{{ URL::to('frontend') }}/assets/img/user-remed.png" alt="remeded-hand" class="img-fluid">
                                </div>
                                <div class="redem-text  ms-1 ">
                                    <span class="redeems-no ">No. of Users  Redeemed:</span>
                                    <span class="redeem-28 ms-3">{{ $record->paid_promotion == 0 ? $record->deal_redeemed_user_count : $record->marketing_deal_redeemed_user_count }}</span>
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
   <section id="related_deal_section" class="sec-related">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="releated-text">
                  <h2>Related Products</h2>
               </div>
            </div>
         </div>
         <div id="deal-container" class="row"></div>
      </div>
   </section>
</main>
@if( empty($record->is_redeem) || $record->redeem_type == 'multiple' )
   <div class="modal fade discount-code-modal" id="redeemedModal">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button close-button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
               @include('flash-message')
               <h5 class="text-center  font-26" id="staticBackdropLabel">Code</h5>
               <input type="text" name="deal_code" id="deal_code" placeholder="Redeem Code">
               <button id="_deal_redeem" data-id="{{ $record->id }}" class="btn-submit font-20 ">
                  Submit
               </button>
            </div>
         </div>
      </div>
   </div>
@endif
@push('script')
    <script>
        let deal_user_id = '{{ $record->user->id }}';
        let deal_type    = '{{ $record->paid_promotion }}';
        let auth         = '{{ Auth::check() ? json_encode(session("user")) : NULL }}';
    </script>
    <script src="{{ asset('frontend/assets/js/deal-detail.js') }}"></script>
@endpush
@endsection
