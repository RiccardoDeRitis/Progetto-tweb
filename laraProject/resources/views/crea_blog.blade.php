@extends('layout.body')

<!-- Titolo da appendere alla rotta -->
@section('title', 'Crea evento')



<!-- Sezione centrale della pagina della form di creazione blog -->
@section('content')
<section id="Event">
    <form action="{{ route('crea_blog') }}" method="post">
        @csrf
        <h1>Creazione di un Blog</h1>
        <section>
            
            <div>
                <div>
                    <label>Titolo<input type="text" name="Titolo" value="{{ old('Titolo') }}"></label>   
                    @if ($errors->first('Titolo'))
                    @foreach ($errors->get('Titolo') as $message)
                    <h3 class="Errors">{{ $message }}</h3>
                    @endforeach  
                    @endif
                
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

@endsection