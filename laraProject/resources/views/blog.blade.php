@extends('layout.body')
@section('title', 'posts')

@section('content')

<h1 class="title_profile" style="display: inline-block;"> Creatore  {{$blogcreator["Nome"]}} {{$blogcreator["Cognome"]}}  </h1>
<h1 class="title_profile" style="display: inline-block; margin-left: 15%;"> Titolo:  {{$blog->Titolo}} </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

<form action="{{ route('crea_post' , [$blog->IDBlog]) }}" method="post">
    @csrf

    <div class="container_new_post">
        <textarea class="textarea" style="width: 35.3%; height: 30%; margin-left: 30%; font-size: 24px; border: 1px solid rgb(216, 216, 216); padding: 50px 30px; border-radius: 20px;" name="Descrizione" cols="50" placeholder="A cosa stai pensando {{Auth::user()->Nome}}?"></textarea> 
        <button class="sub3" style="width: 38.4%; margin-left: 30%; margin-top: 0;" type="submit"> Pubblica </button>  
    </div>
  
</form>

@foreach($posts as $post)

    <div class="container_post">
        @foreach ($utenti as $user)
            @if ($user->id == $post->IDUtente)
                <i class="fa fa-user" style="font-size: 20px; display: inline-block; margin-left: 1%;"></i>
                <h1 class="title_profile" style="font-size: 28px; margin-top:0; margin-left: 3%; display: inline-block;"> {{$user->Nome}} {{$user->Cognome}}</h1>
                <h1 class="title_profile" style="font-size: 22px; margin-top:0; float: right; margin-right: 2%; display: inline-block;"> {{$post->Data}} </h1>
            @endif 
        @endforeach
        <h1 class="title_profile" style="font-size: 28px;">{{$post->Descrizione}}</h1>
    </div>

@endforeach

@endsection