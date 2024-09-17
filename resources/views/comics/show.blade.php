@extends('layouts.main')

@section('content')
    <div class="container g-0 my-5 bg-white d-flex flex-column align-items-center">
        <h1 class="text-center">
            {{ $comic->title }}
            <a href="{{ route('comics.edit', $comic) }}" title="modifica" class="btn btn-warning my-2">
                <i class="fa-solid fa-pencil"></i>
            </a>
            @include('partials.formdelete')
        </h1>
        <div class="row p-5 w-50">
            <div class="col-6">
                <div class="img-container">
                    <img style="max-width: 100%" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
            </div>
            <div class="col-6">
                <div class="details">
                    <h5 class="title">{{ $comic->title }}</h5>
                    <p class="text">Price: {{ $comic->price }}</p>
                    <p class="text">Type: {{ $comic->type }}</p>
                    <p class="text">Sale Date: {{ $comic->sale_date }}</p>
                    <a href="{{ route('comics.index') }}" class="btn btn-success my-2">Torna ai fumetti</a>
                </div>
            </div>
        </div>




    </div>
@endsection


@section('titlePage')
    Dettaglio fumetto
@endsection
