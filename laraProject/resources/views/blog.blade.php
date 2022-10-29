@extends('layout.body')
@section('title', 'blogs')

@section('content')

@foreach($posts as $post)



<h1>{{$post->Descrizione}}</h1>

@endforeach

@endsection