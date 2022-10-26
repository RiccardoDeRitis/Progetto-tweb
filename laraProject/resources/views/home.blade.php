@extends('layout.body')
@section('title', 'Home')
    
@section('content')
<div class="container">
    <img class="opacity" src="{{asset('images/social.jpg')}}" alt="social" width="100%" height="100%" >
    <div class="center">
        <h1>Incontra gente nuova</h1>
        <p>Stringi nuove amicizie pubblicando, commentando nuovi post</p>
    </div>
    @auth
    <div style="background-color: rgb(232, 253, 255);">
        <h1 class="blog_data" style="margin-left: 43.5%; font-size: 36px; font-weight: bold;">Most Popular Blog</h1>
        <table class="table_blog" style="background-color: rgb(232, 253, 255);">
            <tr style="height: 50%">
            @for ($i = 0;$i < count($blogs); $i++)
                @if ($i%3 == 0)
                    </tr>
                    <tr style="height: 50%">
                        <td style="width: 35%; height: 100%;">
                            <div class="container_blog" style="width: 80%; height: 100%;"> 
                                <h1 class="blog_data"> Titolo: {{$blogs[$i]->Titolo}} </h1> 
                                <h1 class="blog_data" style="width: 80%"> Descrizione: {{$blogs[$i]->Descrizione}} </h1> 
                            </div>
                        </td>
                @else
                    <td style="width: 35%; height: 100%;">
                        <div class="container_blog" style="width: 80%; height: 100%;"> 
                            <h1 class="blog_data"> Titolo: {{$blogs[$i]->Titolo}} </h1> 
                            <h1 class="blog_data" style="width: 80%"> Descrizione: {{$blogs[$i]->Descrizione}} </h1> 
                        </div>
                    </td>
                @endif
            @endfor
        </table>
    </div>
    @endauth
    <div class="relative">
        <div class="absolute" style="margin-left: 50%">
            <h1 style="margin-block:auto;">SCOPO</h1>
            <p style="margin-block:auto; font-size: 20px">Questo social &egrave; un 
            portale web pensato per far interagire gli utenti, per scambiare 
            informazioni e per socializzare. Le connessioni create 
            da questi strumenti consentono di creare delle reti sociali che uniscono 
            gli utilizzatori attraverso legami di conoscenza, rapporti di lavoro e 
            vincoli famigliari.</p>
        </div>
        <div class="absolute2">
            <h1 style="margin-block:auto;">REGOLAMENTO</h1>
            <p style="margin-block:auto; font-size: 20px">Lo spirito delle regole non 
            è limitare la libertà di pensiero di chi vi partecipa ma è finalizzato 
            alla tutela dei temi trattati e soprattutto alla tutela dei partecipanti.
            Leggete attentamente questa pagina:la conoscenza ed il rispetto di 
            queste semplici regole sono fondamentali per il buon funzionamento 
            dei servizi della Community.Gli utenti devono impegnarsi a rispettare 
            queste regole</p>
        </div>
    </div>
</div>
@endsection