@if( count($data) )
    @foreach( $data as $record )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
            <div class="deal-card">
            <a href="{{ route('deal-detail',['name' => $record->slug ]) }}">
                <div class="card-deal-img">
                    <div class="img-card">
                        <img src="{{ $record->image_url }}" title="{{ $record->name }}" alt="{{ $record->name }}" class="img-fluid">
                    </div>
                    <div class="deal-icon">
                        @if( session('user')->promote_category->slug == 'physical-health' )
                            <img src="{{ URL::to('frontend') }}/assets/img/noun-fo0d-deal.png" alt="noun-food-and" class="img-fluid">
                        @elseif( session('user')->promote_category->slug == 'mental-health' )
                            <img src="{{ URL::to('frontend') }}/assets/img/card-men-head.png" alt="noun-food-and" class="img-fluid">
                        @else
                            <img src="{{ URL::to('frontend') }}/assets/img/card-user-icon.png" alt="noun-food-and" class="img-fluid">
                        @endif
                    </div>
                </div>
                <div class="card-text">
                    <ul class="review-star d-flex align-items-center">
                        <li>
                            @for( $r=1; $r <= 5; $r++ )
                                @if( $record->total_rating >= $r )
                                    <img src="{{ URL::to('frontend') }}/assets/img/Star.png" alt="star-img" class="img-fluid">
                                @else
                                    <img src="{{ URL::to('frontend') }}/assets/img/Star-light.png" alt="star-img-light" class="img-fluid">
                                @endif
                            @endfor
                        </li>
                        <li class="ms-2 color-2e3336">({{ $record->total_review > 1 ? "{$record->total_review} reviews" : "{$record->total_review} review" }})</li>
                    </ul>
                    <div class="card-title">
                        <p class="color-2e3336 font-18">{{ Str::limit($record->name,25,' ...') }}</p>
                        <p class="color-333 font-14">{{ Str::limit($record->description, 100,' ...') }}</p>
                    </div>
                </div>
                <div class="deal-footer">
                    <ul class="d-flex align-items-center">
                        <li>
                        <img src="{{ URL::to('frontend') }}/assets/img/Location.png" alt="location" class="img-fluid">
                        </li>
                        <li class="footer-california ms-1">
                            {{ Str::limit($record->user->address,40,'...') }}
                        </li>
                    </ul>
                </div>
            </a>
            </div>
        </div>
    @endforeach
@endif
