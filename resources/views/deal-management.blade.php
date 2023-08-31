@extends('master')
@section('content')
    <main>
        <section class="sec-management">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('flash-message')
                        <div class="on-going-deal d-flex align-items-center justify-content-between">
                            <div class="deal-title">
                                @if( $deal_type == 'marketing' )
                                    <h1>Boost your visibility by appearing on our front page</h1>
                                @else
                                    <h1>Ongoing Deals</h1>
                                @endif
                            </div>
                            <div class="deal-img">
                                <a href="{{ $deal_type == 'marketing' ? route('marketing-deal-add') : route('create-deal') }}"> <img src="{{ URL::to('frontend') }}/assets/img/deal-plus.png" alt="deal-img" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="deal-container" class="row deal-row">
                    @if( $deal_type == 'marketing' )
                        <!-- html here -->
                        <div id="_coming_soon_image" class="col-12 d-none">
                            <div class="deal-type-title text-center">
                                <h1>Coming Soon</h1>
                            </div>
                            <div class="deal-marketing-img">
                            <img src="{{ URL::to('frontend') }}/assets/img/marketing-img.png" alt="deal-img" class="img-fluid">
                            </div>
                        </div>
                    @else
                        <span class="loader"></span>
                    @endif
                </div>
            </div>
        </section>
    </main>
    @push('script')
        <script>
            let deal_type = '{{ $deal_type }}';
        </script>
        <script src="{{ asset('frontend/assets/js/deal-management.js') }}"></script>
    @endpush
@endsection

