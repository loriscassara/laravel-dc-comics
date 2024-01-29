@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="row">
            <img src="{{ $comic->thumb }}" alt="...">
        </div>
        <div class="row">
            <p>{{ $comic->description }}</p>
            <a href="{{ route('comics.index') }}" class="btn btn-warning">Indietro</a>
        </div>
    </div>
@endsection