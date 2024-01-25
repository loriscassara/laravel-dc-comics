@extends('layouts.app')

{{-- Comics container --}}
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center fw-bold">Comics</h1>
        </div>
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-title">
                                <h6 class="fw-bold text-center pt-2 text-uppercase">{{ $comic->title }}</h6>
                                <hr>
                            </div>
                            <div class="card-subtitle">
                                <p class="text-center fw-bold fst-italic pt-3 m-0">Descrizione</p>
                                <p class="text-center">{{ $comic->description  }}</p>
                                <hr>
                                <p class="m-1"><span class="fw-bold fst-italic">Serie:</span> {{ $comic->series }}</p>
                                <p class="m-1"><span class="fw-bold fst-italic">Data di uscita:</span> {{ $comic->sale_date }}</p>
                                <p class="m-1"><span class="fw-bold fst-italic">Tipologia:</span> {{ $comic->type }}</p>
                                <p class="text-end m-0 pt-2 fw-bold">{{ $comic->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection