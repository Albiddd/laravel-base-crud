@extends('layouts.app')

@section('metaTitle')
    Edit Comics - DC Comics
@endsection

@section('content')
<section>
    <div class="container-form">
        <h2>Modifica il fumetto selezionato</h2>
        <form class="form-edit" action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="thumb">Insersci la copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}"
                @error('thumb') is-invalid @enderror />
                @error('thumb')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="title">Inserisci il titolo</label>
                <input type="text" id="title" name="title" value="{{ old('title', $comic->title) }}"
                @error('title') is-invalid @enderror />
                @error('title')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="series">Inserisci la serie</label>
                <input type="text" id="series" name="series" value="{{ old('series', $comic->series) }}"
                @error('series') is-invalid @enderror />
                @error('series')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" value="{{ old('price', $comic->price) }}"
                @error('price') is-invalid @enderror />
                @error('price')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="sale_date">Inserisci la data</label>
                <input type="text" id="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"
                @error('sale_date') is-invalid @enderror />
                @error('sale_date')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" value="{{ old('type', $comic->type) }}"
                @error('type') is-invalid @enderror />
                @error('type')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="description">Inserisci la Descrizione</label>
                <textarea name="description" rows="6" cols="60" id="description" @error('description') is-invalid @enderror>
                    {{ old('type', $comic->description) }}
                </textarea>
                @error('description')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit">Applica</button>
        </form>
    </div>
</section>
    @endsection
    