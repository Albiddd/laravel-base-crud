@extends('layouts.app')

@section('metaTitle')
    Add Comics - DC Comics
@endsection

@section('content')
<section>
    <div class="container-form">
        <h2>Aggiungi un nuovo fumetto</h2>
        <form class="form-edit" action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div>
                <label for="thumb">Insersci l'immagine di copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}"
                @error('thumb') is-invalid @enderror />
                @error('thumb')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="title">Inserisci il titolo</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                @error('title') is-invalid @enderror />
                @error('title')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="series">Inserisci la serie</label>
                <input type="text" id="series" name="series" value="{{ old('series') }}"
                @error('series') is-invalid @enderror />
                @error('series')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}"
                @error('price') is-invalid @enderror />
                @error('price')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="sale_date">Inserisci la data</label>
                <input type="text" id="sale_date" value="{{ old('sale_date') }}" name="sale_date"
                @error('sale_date') is-invalid @enderror />
                @error('sale_date')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div>
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" value="{{ old('type') }}"
                @error('type') is-invalid @enderror />
                @error('type')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="description">Inserisci la Descrizione</label>
                <textarea name="description" @error('description') is-invalid @enderror id="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="alert">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit">Invia</button>
            </form>
        </div>
    </section>
        @endsection
        