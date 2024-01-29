@extends('layouts.app')

@section('content')
    {{-- comics card section --}}
    <div class="container">
        <div id="cardsWrapper">
            @foreach ($comics as $comic)
                <div class="myCard">
                    <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" class="comics-img"
                        alt="{{ $comic->title }}"></a>
                    <h3 class="comics-title">{{ strtoupper($comic->title) }}</h3>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">
                <h3 class="loadText">LOAD MORE</h3>
            </button>
        </div>
    </div>

    {{-- clients section --}}
    <section id="buyRow">
        <div class="container d-flex justify-content-center p-5">
            <div class="d-flex align-items-center">
                @foreach ($dati['clients'] as $client)
                    <div class="text-center ps-5 pe-2">
                        <img class="buy-img" src="{{ $client['image'] }}" alt="">
                        <div class="mt-2">
                            <h3 class="buy-text">{{ strtoupper($client['title']) }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection