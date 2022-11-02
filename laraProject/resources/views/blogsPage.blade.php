@extends('layout.body')
@section('title', 'blogs')

@section('content')

<h1 class="title_profile"> Tutti i Blog </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

<table class="table_blog">
    <tr>
    @for ($i = 0;$i < count($blogs); $i++)
        @if ($i%3 == 0)
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

@endsection