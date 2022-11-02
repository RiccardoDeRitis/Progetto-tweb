@extends('layout.body')
@section('title', 'Home')
    
@section('content')
<div class="container">
    <img class="opacity" src="{{asset('images/social.jpg')}}" alt="social" width="100%" height="100%">
    <div class="center">
        <h1>Incontra gente nuova</h1>
        <p>Stringi nuove amicizie pubblicando, commentando nuovi post</p>
    </div>
    @auth
        <div style="background-color: rgb(239, 254, 255); width: 100%; height: 100%;">
            <h1 class="blog_data" style="margin-left: 43.5%; font-size: 36px; font-weight: bold; margin-top: 0;">Most Popular Blog</h1>
            <table class="table_blog" style="background-color:rgb(239, 254, 255); margin-top: 0%; margin-bottom: 0%; margin-left: 0; width: 100%;">
                <tr>
                    @for ($i = 0;$i < count($blogs); $i++)
                        <td class="td_container" style="width: 28%">
                            <div class="container_blog"> 
                                <a href="{{route('blog', [$blogs[$i]->IDBlog])}}" style="text-decoration: none; color: black;">
                                    <h1 class="blog_data" style="padding-top: 10%; font-style: italic;"> <b>Titolo :</b> {{$blogs[$i]->Titolo}} </h1> 
                                    <h1 class="blog_data" style="width: 80%; font-style: italic;"> <b>Descrizione :</b> {{$blogs[$i]->Descrizione}} </h1> 
                                </a>
                            </div>
                        </td>
                    @endfor
                    <td class="td_container" style="padding-left: 4%;">
                        <a href="{{ route('blogsPage') }}" style="text-decoration: none; color: black;">
                            <div class="blog_view"><i class="fa fa-arrow-right"></i></div>
                        </a>
                    </td>
                </tr>
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