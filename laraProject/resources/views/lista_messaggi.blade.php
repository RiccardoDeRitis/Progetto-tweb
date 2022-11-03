@extends('layout.body')
@section('title', 'Messaggi')

@section('content')

<h1 class="title_profile"> I tuoi messaggi </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

@foreach($messaggi as $messaggio)

    @foreach($utenti as $utente)

        @if ($messaggio->IDUtenteRichiesta == $utente->id)

            <div class="container_user">
                @if($messaggio->Richiesta == 0)
                    <h1 class="user_search_data" style="width: 90%"> L'utente {{$utente->Nome}} {{$utente->Cognome}} ha rifiutato la tua richiesta di amicizia </h1>
                @else
                    <h1 class="user_search_data" style="width: 90%"> L'utente {{$utente->Nome}} {{$utente->Cognome}} ha accettato la tua richiesta di amicizia </h1>
                @endif
            </div>

            @break
        @endif

    @endforeach

@endforeach

@endsection