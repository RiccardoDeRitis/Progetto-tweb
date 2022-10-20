@extends('layout.body')
@section('title', 'cerca')

@section('content')

<h1 class="title_profile"> Amici trovati </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

@foreach($utenti as $user)

    <div class="container_user">
        <h1 class="user_search_data"> {{$user->Nome}} {{$user->Cognome}} </h1>
        <h1 class="user_search_data" style="width: 15%;"> {{$user->Città}} </h1>
        <h1 class="user_search_data" style="width: 10%;"> Anni: 22 </h1>
                
        <div class="button_send_request">
            <form method="POST" action="{{route('richiesta')}}">
                @csrf

                <input type="hidden" name="id" value={{Auth::user()->id}}>
                <input type="hidden" name="idAmico" value={{$user->id}}>
                <button type="submit" class="send_request"><span aria-hidden="true"><i class="fa fa-user-plus"></i></span></button>
            </form>
        </div>
    </div>

@endforeach

@endsection