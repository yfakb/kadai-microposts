@extends('layouts.app')
@section('content')
    
    @if (count($microposts) > 0)
        @include('favorites.favorites', ['microposts' => $microposts])
    @else
        お気に入りはありません
    @endif

@endsection