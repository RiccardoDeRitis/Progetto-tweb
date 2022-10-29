@extends('layout.body')
@section('title', 'Amici')

@section('content')

<h1 class="title_profile" style="display: inline-block;"> Richieste di amicizia </h1>
<h1 class="title_profile" style="margin-left: 33%; display: inline-block;"> I tuoi amici </h1>

<hr size="3" width="40%" color="#008CBA" style="margin-left: 5%; display: inline-block" noshade>
<hr size="3" width="40%" color="#008CBA" style="margin-left: 9.6%; display: inline-block" noshade>

<div class="container_richieste" style="width: 40%; margin-left: 5%; display: inline-block;">
    @foreach($amici as $amico)

        @if ($amico->Amicizia == 0)
            <div class="div_richieste">
                @if ($amico->IDUtente == Auth::user()->id)
                    <h1 class="user_search_data" style="width: 85%; display: inline-block;"> {{$utenti[$amico->IDUtenteAmico - 1]->Nome}} {{$utenti[$amico->IDUtenteAmico - 1]->Cognome}} </h1>
                    <a class="send_request" style="margin-left: 7%; cursor: default"><span aria-hidden="true"><i class="fa fa-spinner"></i></span></a>
                @else
                    <h1 class="user_search_data" style="width: 85%; display: inline-block;"> {{$utenti[$amico->IDUtente - 1]->Nome}} {{$utenti[$amico->IDUtente - 1]->Cognome}} </h1>
                    <div class="button_send_request" style="margin-top: 2%; margin-right: 2%;">
                        <form  action="{{route('cancella_richiesta')}}">
                            @csrf

                            <input type="hidden" name="id" value={{Auth::user()->id}}>
                            <input type="hidden" name="idAmico" value={{$amico->IDUtente}}>
                            <input type="hidden" name="Nome" value={{Auth::user()->Nome}}>
                            <input type="hidden" name="Cognome" value={{Auth::user()->Cognome}}>
                            <button type="submit" class="send_request" style="color: red"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                        </form>
                    </div>
                    <div class="button_send_request" style="margin-top: 2%; margin-right: 4%;">
                        <form  action="{{route('accetta_richiesta')}}">
                            @csrf

                            <input type="hidden" name="id" value={{Auth::user()->id}}>
                            <input type="hidden" name="idAmico" value={{$amico->IDUtente}}>
                            <input type="hidden" name="Nome" value={{Auth::user()->Nome}}>
                            <input type="hidden" name="Cognome" value={{Auth::user()->Cognome}}>
                            <button type="submit" class="send_request" style="color: green"><span aria-hidden="true"><i class="fa fa-check"></i></span></button>
                        </form>
                    </div>           
                @endif
            </div>
        @endif

    @endforeach
</div>
<div class="container_amici" style="width: 40%; margin-left: 9.6%; display: inline-block;">
    @foreach($amici as $amico)

        @if ($amico->Amicizia == 1)
            <div class="div_amici">
                @if ($amico->IDUtente == Auth::user()->id)
                    <h1 class="user_search_data" style="width: 85%; display: inline-block;"> {{$utenti[$amico->IDUtenteAmico - 1]->Nome}} {{$utenti[$amico->IDUtenteAmico - 1]->Cognome}} </h1>
                @else
                    <h1 class="user_search_data" style="width: 85%; display: inline-block;"> {{$utenti[$amico->IDUtente - 1]->Nome}} {{$utenti[$amico->IDUtente - 1]->Cognome}} </h1>
                @endif
                <button type="submit" class="send_request"><span aria-hidden="true"><i class="fa fa-user"></i></span></button>
                <a class="send_request" style="margin-left: 3%; cursor: default;"><span aria-hidden="true"><i class="fa fa-circle-check"></i></span></a>
            </div>
        @endif

    @endforeach
</div>

@endsection