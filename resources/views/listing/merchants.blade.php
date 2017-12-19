@if (isset($merchants['data']))
    @foreach ($merchants['data'] as $merchant)
        <div class="col-sm-3 col-xs-12">
            <ul class="list-inline">
                <li>
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </li>
                <li>
                    <a href="{!! url('/shop/' . Format::slug($merchant['name'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                </li>
                <li>
                    ab 2,5%
                    <i class="fa fa-undo" aria-hidden="true"></i>
                </li>
            </ul>
            <a href="{!! url('/shop/' . Format::slug($merchant['name'])) !!}" class="interestContent" title="{{ $merchant['name'] }} link"><span><img src="{{ $merchant['image'] }}" alt="{{ $merchant['name'] }}"></span></a>
        </div>
    @endforeach
@endif