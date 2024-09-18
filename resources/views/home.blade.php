{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 p-5 bg-light rounded">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 text-danger mb-4">{{ $title }}</h1>
                <p class="lead mb-5">La tua collezione di fumetti conta attualmente <strong>{{ $comics_number }}</strong>
                    titoli</p>

                <a href="{{ route('comics.index') }}" class="btn btn-danger btn-lg px-5">Esplora la collezione</a>
                <a href="{{ route('comics.create') }}" class="btn btn-outline-danger btn-lg px-5">Aggiungi un nuovo
                    fumetto</a>
            </div>
        </div>
    </div>
@endsection


@section('titlePage')
    home
@endsection
