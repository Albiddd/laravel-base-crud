@extends('layouts.app')

@section('metaTitle')
    Add Comics - DC Comics
@endsection

@section('content')
    <div class="container">
        <form class="form-edit" action="{{route('comics.store')}}" method="POST">
            @csrf

            <div>
                <label for="thumb">Insersci la copertina</label>
                <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}"/>
            </div>
            <div>
                <label for="title">Inserisci il titolo</label>
                <input type="text" id="title" name="title" value="{{old('title')}}"/>
            </div>
            <div>
                <label for="series">Inserisci la serie</label>
                <input type="text" id="series" name="series" value="{{old('series')}}" />
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" value="{{old('price')}}" />
            </div>
            <div>
                <label for="sale_date">Inserisci la data</label>
                <input type="text" id="sale_date" value="{{old('sale_date')}}" name="sale_date" />
            </div>

            <div>
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" value="{{old('type')}}"/>
            </div>
            <div>
                <label for="description">Inserisci la Descrizione</label>
                <textarea name="description" id="description">{{old('description')}}</textarea>
            </div>
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection