@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_favorite($micropost->id))
あ
    @else
い
    @endif
@endif