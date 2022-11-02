@extends('layout.body')
@section('title', 'miei_blog')

@section('content')

<h1 class="title_profile"> {{$user->Nome}} {{$user->Cognome}} </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

<div style="display: inline-block; width: 45%; margin-left: 2.5%;">
    <div>
        <h1 class="title_profile" style="display: inline-block; width: 15%; font-size: 28px;"> Anni </h1>
        <h1 class="title_profile" style="display: inline-block; margin-left: 3%; font-size: 28px;"> {{$user->Anni}} </h1>
    </div>
    <div>
        <h1 class="title_profile" style="display: inline-block; width: 15%; font-size: 28px;"> E-Mail </h1>
        <h1 class="title_profile" style="display: inline-block; margin-left: 3%; font-size: 28px;"> {{$user->email}} </h1>
    </div>
    <div>
        <h1 class="title_profile" style="display: inline-block; width: 15%; font-size: 28px;"> N° di amici </h1>
        <h1 class="title_profile" style="display: inline-block; margin-left: 3%; font-size: 28px;"> {{$user->Anni}} </h1>
    </div>

    <h1 class="title_profile" style="font-size: 28px;"> Descrizione :</h1>
    <h1 class="title_profile" style="width: 90%; font-size: 28px;"> {{$user->Descrizione}} </h1>
</div>
<div style="display: inline-block; width: 45%;">
    <h1 class="title_profile"> Blog di {{$user->Nome}} {{$user->Cognome}}</h1>
    <hr size="3" style="margin-left: 5%;" width="100%" color="#008CBA" noshade>

    <table class="table_blog">
        <tr>
        @for ($i = 0;$i < count($blogs); $i++)
            @if ($i%2 == 0)
                </tr>
                <tr>
                    <td class="td_container">
                        <div class="container_blog"> 
                            <a href="{{route('blog', [$blogs[$i]->IDBlog])}}" style="text-decoration: none; color: black;">
                                <h1 class="blog_data" style="padding-top: 10%; font-style: italic;"> <b>Titolo :</b> {{$blogs[$i]->Titolo}} </h1> 
                                <h1 class="blog_data" style="width: 80%; font-style: italic;"> <b>Descrizione :</b> {{$blogs[$i]->Descrizione}} </h1> 
                            </a>
                        </div>
                    </td>
            @else
                <td class="td_container">
                    <div class="container_blog"> 
                        <a href="{{route('blog', [$blogs[$i]->IDBlog])}}" style="text-decoration: none; color: black; padding-top: 16%;">
                            <h1 class="blog_data" style="padding-top: 10%; font-style: italic;"> <b>Titolo :</b> {{$blogs[$i]->Titolo}} </h1> 
                            <h1 class="blog_data" style="width: 80%; font-style: italic;"> <b>Descrizione :</b> {{$blogs[$i]->Descrizione}} </h1> 
                        </a>
                    </div>
                </td>
            @endif
        @endfor
    </table>
</div>

@endsection