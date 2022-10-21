@extends('layout.body')
@section('title', 'cerca')

@section('content')

<h1 class="title_profile"> Amici trovati </h1>
<hr size="3" align="center" width="90%" color="#008CBA" noshade>

@foreach($utenti as $user)

    <div class="container_user">
        <h1 class="user_search_data"> {{$user->Nome}} {{$user->Cognome}} </h1>
        <h1 class="user_search_data" style="width: 15%;"> {{$user->Città}} </h1>
        <h1 class="user_search_data" style="width: 10%;"> Anni: 22 </h1>
                
        <div class="button_send_request">

                @if (count($amici) == 0)
                    <form method="POST" action="{{route('richiesta')}}">
                        @csrf
                        <input type="hidden" name="id" value={{Auth::user()->id}}>
                        <input type="hidden" name="idAmico" value={{$user->id}}>
                        <button type="submit" class="send_request"><span aria-hidden="true"><i class="fa fa-user-plus"></i></span></button>
                    </form>
                @else
                    @for ($i = 0; $i < count($amici); $i++)
                        @if($user->id == $amici[$i]->IDUtenteAmico && $amici[$i]->IDUtente == Auth::user()->id)
                            @if($amici[$i]->Amicizia == 0)
                                <a class="send_request"><span aria-hidden="true"><i class="fa fa-spinner"></i></span>
                                @break
                            @else
                                <a class="send_request"><span aria-hidden="true"><i class="fa fa-check"></i></span>
                                @break
                            @endif
                        @endif
                        @if($i == count($amici) - 1)
                            <form method="POST" action="{{route('richiesta')}}">
                                @csrf
                
                                <input type="hidden" name="id" value={{Auth::user()->id}}>
                                <input type="hidden" name="idAmico" value={{$user->id}}>
                                <button type="submit" class="send_request"><span aria-hidden="true"><i class="fa fa-user-plus"></i></span></button>
                            </form>
                            @break
                        @endif
                    @endfor
                @endif

        </div>

    </div>

@endforeach

@endsection