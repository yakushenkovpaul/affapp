@foreach ($clubs['data'] as $club)
    <div class="col-sm-3 col-xs-12">
        <ul class="list-inline">
            <li>
                <a href="{!! url('/club/' . $club['id'] . '/' . Format::slug($club['dir'])) !!}" title="{{ $club['name'] }}">{{ $club['name'] }}</a>
            </li>
        </ul>
        <a href="{!! url('/club/' . $club['id'] . '/' . Format::slug($club['dir'])) !!}" class="interestContent" title="{{ $club['name'] }} link">
            <span><img src="{{ $club['image'] }}" alt="{{ $club['name'] }}"></span>
        </a>
    </div>
@endforeach