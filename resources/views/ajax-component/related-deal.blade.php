@if( count($data) )
    @foreach( $data as $record )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pt-10">
            <div class="deal-card">
            <a href="{{ route('deal-detail',['name' => $record->slug ]) }}">
                <div class="card-deal-img">
                    <div class="img-card">
                        <img src="{{ $record->image_url }}" alt="{{ $record->name }}" title="{{ $record->name }}" class="img-fluid">
                    </div>
                </div>
                <div class="card-text">
                    <div class="card-title">
                        <p class="color-2e3336 font-18">{{ Str::limit($record->name,25,' ...') }}</p>
                        <p class="color-333 font-14">{{ Str::limit($record->description, 100,' ...') }}</p>
                    </div>
                </div>
                <div class="deal-footer">
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
            </a>
            </div>
        </div>
    @endforeach
@endif
