@extends('layout.body')
@section('title', 'miei_blog')

@section('content')

<h1 class="title_profile"> I tuoi blog </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

<div id="Mod_Container">
    <a href="{{ route('crea_blog') }}">
        <button><i aria-hidden="true"></i> Crea Blog </button>
    </a>
</div>

<table class="table_blog">
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

<!-- <script>
    document.write("<table>");
    document.write("<tr>");
    for(var i=0; i < count($blogs); i++) {
        if (i%3 == 0) {
            document.write("</tr><tr><td> ciao </td>");
        } else {
            document.write("<td> ciao </td>");
        }
    }   
    document.write("</table>");
</script> -->

@endsection