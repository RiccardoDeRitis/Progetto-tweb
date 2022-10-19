@extends('layout.body')
@section('title', 'cerca')

@section('content')

@foreach($utenti as $user)

<p>{{$user->Nome}}</p>

@endforeach

@endsection