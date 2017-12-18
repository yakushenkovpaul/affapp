@foreach ($clubs['data'] as $club)
    <div class="col-sm-3 col-xs-12">
        <ul class="list-inline">
            <li>
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </li>
            <li>
                <a href="{!! url('/club/' . Format::slug($club['name'])) !!}" title="{{ $club['name'] }}">{{ $club['name'] }}</a>
            </li>
        </ul>
        <a href="{!! url('/club/' . Format::slug($club['name'])) !!}" class="interestContent" title="{{ $club['name'] }} link"><span><img src="{{ $club['image'] }}" alt="{{ $club['name'] }}"></span></a>
    </div>
@endforeach