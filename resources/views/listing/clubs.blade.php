@foreach ($clubs['data'] as $club)
    <div class="col-sm-3 col-xs-12">
        <ul class="list-inline">
            @if (isset($user))
                <li>
                    @if ($club['fav'])
                        <i class="fa fa-heart favorite" aria-hidden="true" id="fav-club-{{ $club['id'] }}" onclick="fav({{ $club['id'] }}, 'fav-club')"></i>
                    @else
                        <i class="fa fa-heart-o favorite" aria-hidden="true" id="fav-club-{{ $club['id'] }}" onclick="fav({{ $club['id'] }}, 'fav-club')"></i>
                    @endif
                </li>
            @endif
            <li>
                <a href="{!! url('/club/' . $club['id'] . '/' . Format::slug($club['dir'])) !!}" title="{{ $club['name'] }}">{{ $club['name'] }}</a>
            </li>
        </ul>
        <a href="{!! url('/club/' . $club['id'] . '/' . Format::slug($club['dir'])) !!}" class="interestContent" title="{{ $club['name'] }} link">
            <span><img src="{{ $club['image'] }}" alt="{{ $club['name'] }}"></span>
        </a>
    </div>
@endforeach