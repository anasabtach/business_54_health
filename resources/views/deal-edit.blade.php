@extends('master')
@section('content')
@push('stylesheet')
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
@endpush
<main>
   <section class="sec-update-screen">
        <form method="POST" action="{{ route('http-request') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="action" value="update-deal">
            <input type="hidden" name="slug" value="{{ $record->slug }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('flash-message')
                        <div class="update-delte d-flex align-items-center justify-content-between">
                        <div class="edit-text">
                            <h1>Edit Deal</h1>
                        </div>
                        <div class="update-dlete-btn">
                            <button class="update-btn me-3" id="updateScreen">
                                Update
                            </button>
                            <button data-slug="{{ $record->slug }}" class="_delete_deal delete-btn">
                                Delete Deal
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 ">
                        <div class="edit-img">
                            <img src="{{ $record->image_url }}" id="_upload_image" alt="{{ $record->name }}" title="{{ $record->name }}" class="img-fluid">
                            <input type="file" class="d-none" id="image_url" name="image_url" accept="image/*">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="update-form">
                        <div class="from-box">
                            <div class="form__group">
                                <input type="text" required id="name" name="name" class="form__field" value="{{ $record->name }}">
                                <label for="name" class="form__label">Name<span class="text-red">*</span></label>
                            </div>
                        </div>
                        <div class="input-group">
                            <select required class="form-select" data-value="{{ $record->price_type }}" name="price_type" id="price_type">
                                <option value="" selected>I would like to list</option>
                                <option {{ $record->price_type == 'special_price' ? 'selected' : '' }} value="special_price">Special price</option>
                                <option {{ $record->price_type == 'off' ? 'selected' : '' }} value="off">& Off</option>
                                <option {{ $record->price_type == 'free' ? 'selected' : '' }} value="free">Free product or service</option>
                            </select>
                        </div>
                        <div id="special_price_field" class="from-box d-none mt-5">
                                <div class="form__group">
                                <input type="text" id="Price" name="price" value="{{ $record->price }}" class="form__field">
                                <label for="Price" class="form__label">Price<span class="text-red">*</span></label>
                                </div>
                            </div>
                            <div id="off_field" class="from-box d-none mt-5 off_field">
                                <div class="form__group">
                                   <input type="number" value="{{ $record->discount_percentage }}" id="discount_percentage" name="discount_percentage" class="form__field" placeholder="Discount Percentage">
                                   <label for="discount_percentage" class="form__label">Discount Percentage (%)<span class="text-red"></span></label>
                                </div>
                             </div>
                            <div id="off_field" class="from-box d-none mt-5 off_field">
                                <div class="form__group">
                                <input type="text" readonly id="sale_price" name="sale_price" class="form__field" value="{{ $record->sale_price }}">
                                <label for="sale_price" class="form__label">Sale Price<span class="text-red">*</span></label>
                                </div>
                            </div>
                        <div class="description-text mt-3">
                            <textarea required name="description" id="description"  placeholder="Description"  class="text-areas">{{ $record->description }}</textarea>
                        </div>
                        <div class="description-text">
                            <label for="description" class="des-text-label">How To Redeem</label>
                            <textarea name="how_to_redeem" required id="how_to_redeem" placeholder="Example: Mention you’re a Five Four Health member, show ID at checkout, mention this ad, etc"  class="text-areas">{{ $record->how_to_redeem }}</textarea>
                         </div>
                        <div class="input-group top-1 mb-3">
                            <select required class="form-select" name="time_bound" id="time_bound" data-value="{{ $record->time_bound }}">
                                <option value=""></option>
                                <option {{ $record->time_bound == 'ongoing' ? 'selected' : '' }} value="ongoing">Ongoing</option>
                                <option {{ $record->time_bound == 'time_bound' ? 'selected' : '' }} value="time_bound">Time bound</option>
                            </select>
                        </div>
                        <div id="time_bond_field" class="row top-2 d-none">
                            <div class="col-12 col-lg-6">
                                <div class="from-box">
                                    <div class="form__group">
                                    <p><input type="text" id="datepicker" value="{{ $record->start_date }}" name="start_date" class="border-1"></p>
                                    <label for="datepicker" class="postion-nan">Start Date</label>
                                    <div class="form-icon">
                                        <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" data-id="datepicker" alt="calendar_" class="img-fluid calander-icon">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="from-box">
                                    <div class="form__group ">
                                        <p><input type="text" id="startDate" name="end_date" value="{{ $record->end_date }}" class="border-1 "></p>
                                        <label for="startDate" class="postion-nan">End Date</label>
                                        <div class="form-icon">
                                            <img src="{{ URL::to('frontend') }}/assets/img/calendar_.png" data-id="startDate" alt="calendar_" class="img-fluid calander-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="from-box">
                                    <div class="form__group">
                                        <select style="margin-top:40px;" class="form-select" required name="deal_type" id="deal_type">
                                            <option value="" selected>Make Available Deal To</option>
                                            <option {{ $record->deal_type == 'member' ? 'selected' : '' }} value="member">Members</option>
                                            <option {{ $record->deal_type == 'both' ? 'selected' : '' }} value="both">Members and Participating Businesses</option>
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
                                    <input class="form-check-input" type="radio" name="redeem_type" id="inlineCheckbox1" {{ $record->redeem_type == 'one_time' ? 'checked' : '' }} value="one_time">
                                    <label class="form-check-label" for="inlineCheckbox1">One Time</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="redeem_type" id="inlineCheckbox2" {{ $record->redeem_type == 'multiple' ? 'checked' : '' }} value="multiple">
                                    <label class="form-check-label" for="inlineCheckbox2">Multiple</label>
                                </div>
                            </div>
                        </div>
                        <div id="deal_code_fields" class="from-box mt-5" style="{{ $record->redeem_type == 'multiple' ? 'display:none;' : 'display:block;' }}">
                            <div class="form__group">
                                <input type="text" id="deal_code" name="deal_code" class="form__field" value="{{ $record->deal_code }}">
                                <label for="deal_code" class="form__label">Deal Code</label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
   </section>
</main>
@push('script')
    <script>
        let deal_user_id = '{{ $record->user->id }}';
        let deal_type    = '{{ $record->paid_promotion }}';
    </script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="{{ asset('frontend/assets/js/create-deal.js') }}"></script>
@endpush
@endsection
