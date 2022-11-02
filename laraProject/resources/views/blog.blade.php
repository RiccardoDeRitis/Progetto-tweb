@extends('layout.body')
@section('title', 'posts')

@section('content')
<!--creatore del blog-->
<h1>creatore  {{$blogcreator}}  </h1>
<!--mettere tema blog-->


<section id="Event">
    <form action="{{ route('crea_post' , [$blog->IDBlog]) }}" method="post">
        @csrf
        <h1>CREA POST</h1>
        <section>
            
            <div>
                <div>
                    <label>Descrizione <textarea name="Descrizione" rows="5">{{ old('Descrizione') }}</textarea></label>
                    @if ($errors->first('Descrizione'))
                    @foreach ($errors->get('Descrizione') as $message)
                    <h3 class="Errors">{{ $message }}</h3>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        
        <section id="Submit">
            <button class="button" type="submit">Conferma</button>
            
        </section>
    </form>
</section>

<h1>{{$blog->IDBlog}}</h1>

@foreach($posts as $post)



<h1>{{$post->Descrizione}}</h1>





@endforeach

@endsection