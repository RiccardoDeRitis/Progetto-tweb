@extends('layout.body')
@section('title', 'Aggiungi staff')

@section('content')

<h1 class="title_profile"> Aggiungi membro staff </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

    <form method="POST" action="{{ route('aggiungi_staff') }}">
        @csrf
            
        <div class="container_new_blog">
            <div>
                <h1 class="user_search_data" style="margin-left: 30%; font-size: 34px; width: fit-content;"> Titolo : </h1>
                <input type="text" class="form-title" name="Titolo" placeholder="Titolo">
            </div>
            <div>
                <textarea class="textarea" style="width: 40%; margin-left: 30%; font-size: 24px; border: 1px solid rgb(216, 216, 216)" name="Descrizione" cols="50" placeholder="Inserisci la descrizione del tuo Blog"></textarea> 
            </div>
            <button class="sub3" style="width: 20%; margin-left: 40%; margin-bottom: 3%" type="submit">Conferma</button>
        </div>      
    </form>

@endsection