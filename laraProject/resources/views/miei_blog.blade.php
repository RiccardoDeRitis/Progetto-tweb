@extends('layout.body')
@section('title', 'miei_blog')

@section('content')

<div id="Mod_Container">
    <a href="{{ route('crea_blog') }}">
        <button><i aria-hidden="true"></i> Crea Blog </button>
    </a>
</div>


@foreach($blogs as $blog)
<h1>{{$blog->Titolo}}</h1>
<h2>{{$blog->Descrizione}}</h2>

@endforeach

@endsection