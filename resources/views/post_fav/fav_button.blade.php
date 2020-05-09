   @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            <i class="fas fa-heart-broken" style="color:red;"></i>
            {!! Form::submit('Unfavorite', ['class' => "btn btn-outline-danger btn-sm " ] ) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            <i class="fas fa-heart" style="color:blue;"></i>
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-primary  btn-sm" ]) !!}
        {!! Form::close() !!}
    @endif
