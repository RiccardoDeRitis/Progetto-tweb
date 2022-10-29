@extends('layout.body')
@section('title', 'blogs')

@section('content')

@foreach($blogs as $blog)

<a href="{{ route('blog', [$blog->IDBlog]) }}">
<h1>{{$blog->Titolo}}</h1>
<h2>{{$blog->Descrizione}}</h2>
</a>
@endforeach

@endsection