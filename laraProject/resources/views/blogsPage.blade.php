@extends('layout.body')
@section('title', 'blogs')

@section('content')

@foreach($blogs as $blog)
<h1>{{$blog->Titolo}}</h1>
<h2>{{$blog->Descrizione}}</h2>

@endforeach

@endsection