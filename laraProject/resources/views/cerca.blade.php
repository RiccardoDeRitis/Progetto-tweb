@extends('layout.body')
@section('title', 'cerca')

@section('content')

@foreach($utenti as $user)

    <h1 class="title_profile"> Amici trovati </h1>
    <hr size="3" align="center" width="90%" color="#008CBA" noshade>
    <div class="container_user">
        <h1 class="user_data1" style="display: inline-block; margin-right: 4%;"> {{$user->Nome}} {{$user->Cognome}} </h1>
        <h1 class="user_data1" style="display: inline-block; margin-right: 4%;"> {{$user->Città}} </h1>
        <h1 class="user_data1" style="display: inline-block; margin-right: 4%;"> Anni: {{$user->Data_di_nascita}} </h1>
        <h1 id="desc_link" class="user_data1" style="display: inline-block; text-decoration: underline; cursor: pointer;"> Descrizione </h1>
        <a class="send_request"><span aria-hidden="true"><i class="fa fa-user-plus"></i></span></a>
        <script>
            $('#desc_link').click(function() {
                if ($('#desc_data').hasClass('active')) {
                    $('#desc_data').removeClass('active');
                }
                else {
                    $('#desc_data').addClass('active');
                }
            })

            $('.send_request').click(function() {
                // Invia richiesta 
            })
        </script>
        <h1 id="desc_data" class="user_data1" sty> {{$user->Descrizione}} </h1>
    </div>

@endforeach

@endsection