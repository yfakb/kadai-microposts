@if (Auth::user()->id != $user->id)
{{$micropost->id}}
@endif