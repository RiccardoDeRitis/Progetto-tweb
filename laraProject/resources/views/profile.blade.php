@extends('layout.body')
@section('title', 'Utente')

@section('content')
<div class="profile">
    <h1 class="title_profile"> I tuoi dati </h1>
    <hr size="3" align="center" width="90%" color="#008CBA" noshade>
    <div class="user_profile1">
        <div class="user_data">
            <p class="user_camp1"  style="display: inline-block"> Nome </h1>
            <p class="user_data1"  style="display: inline-block"> {{ Auth::user()->Nome }} </p>
        </div>
        <div class="user_data">
            <p class="user_camp1" style="display: inline-block"> Cognome </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->Cognome }} </p>
        </div>
        <div class="user_data">
            <p class="user_camp1" style="display: inline-block"> Indirizzo </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->Indirizzo }} </p>
        </div>
        <div class="user_data">
            <p class="user_camp1" style="display: inline-block"> Telefono </p>
            <p class="user_data1" style="display: inline-block"> +39 {{ Auth::user()->Telefono }} </p>
        </div>
    </div>
    <div class="user_profile2">
        <div class="user_data">
            <p class="user_camp2" style="display: inline-block"> Codice Fiscale </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->Codice_Fiscale }} </p>
        </div>
        <div class="user_data">
            <p class="user_camp2" style="display: inline-block"> E-Mail </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->email }} </p>
        </div>
        <div class="user_data">
            <p class="user_camp2" style="display: inline-block"> Visibilità </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->Visibilità}} </p>
        </div>
        <div class="user_data">
            <p class="user_camp1" style="display: inline-block"> Data di nascita </p>
            <p class="user_data1" style="display: inline-block"> {{ Auth::user()->Data_di_nascita }} </p>
        </div>
    </div>
    <div class="user_data" style="margin-left: 13%">
        <p class="user_desc"> Descrizione: </p>
        <p class="user_data1" style="width: 80%; margin-left: 0"> {{Auth::user()->Descrizione}} </p>
    </div>
    <div class="user_data" style="margin-left: 13%">
        <p class="user_desc" style="display: inline-block"> N° di amici </p>
        <p class="user_data1" style="display: inline-block"> {{Auth::user()->Telefono}} </p>
    </div>
    <div class="user_data" style="margin-left: 13%;">
        <p class="user_desc" style="display: inline-block; width: 11%;"> N° di blog creati </p>
        <p class="user_data1" style="display: inline-block; margin-left: 3%"> {{Auth::user()->Telefono}} </p>
    </div>
</div>
@endsection