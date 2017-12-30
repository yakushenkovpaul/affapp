@if (isset($merchants['data']))
    @foreach ($merchants['data'] as $merchant)
        <div class="col-sm-3 col-xs-12">
            <ul class="list-inline list-inline-list">
                @if (isset($user))
                <li>
                    @if ($merchant['fav'])
                        <i class="fa fa-heart favorite" aria-hidden="true" id="fav-merchant-{{ $merchant['id'] }}" onclick="fav({{ $merchant['id'] }}, 'fav-merchant')"></i>
                    @else
                        <i class="fa fa-heart-o favorite" aria-hidden="true" id="fav-merchant-{{ $merchant['id'] }}" onclick="fav({{ $merchant['id'] }}, 'fav-merchant')"></i>
                    @endif
                </li>
                @endif
                <li>
                    <a href="{!! url('/merchant/' . $merchant['id'] . '/' . Format::slug($merchant['dir'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                </li>
                <li>
                    ab {{ number_format($merchant['cashback'], 2) }}%
                    <i class="fa fa-undo" aria-hidden="true"></i>
                </li>
            </ul>
            <a href="{!! url('/merchant/' . $merchant['id'] . '/' . Format::slug($merchant['dir'])) !!}" class="interestContent" title="{{ $merchant['name'] }} link"><span><img src="{{ $merchant['image'] }}" alt="{{ $merchant['name'] }}"></span></a>
        </div>
    @endforeach
@endif