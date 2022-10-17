@extends('layouts.app')

@section('metaTitle')
    Comics - DC Comics
@endsection

@section('content')
    <div class="container">
        <div class="current-series">CURRENT SERIES</div>


        @foreach ($comics as $key => $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic) }}">
                    <div class="card-image">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="card-text">{{ $comic['title'] }}</div>
                </a>
            </div>
        @endforeach
    </div>
    <input class="load-more-btn" type="submit" value="LOAD MORE">

    <section class="shop-section">
        <div class="shop-container">
            <div class="info-shop">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <div class="shop-text"> DIGITAL COMICS </div>
            </div>
            <div class="info-shop">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <div class="shop-text"> DC MERCHANDISE </div>
            </div>
            <div class="info-shop">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <div class="shop-text"> SUBSCRIPTION </div>
            </div>
            <div class="info-shop">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <div class="shop-text"> COMIC SHOP LOCATOR </div>
            </div>
            <div class="info-shop visa">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <div class="shop-text"> DC POWER VISA </div>
            </div>
        </div>
    </section>

    
@endsection
