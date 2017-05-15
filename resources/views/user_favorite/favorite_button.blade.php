@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfollow', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @else

    @endif
@endif