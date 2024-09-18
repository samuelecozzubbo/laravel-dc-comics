{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 bg-white">
        <h1>Modifica {{ $comic_to_edit->name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="py-5" action="{{ route('comics.update', $comic_to_edit) }}" method="POST">
            {{-- Questo è un token di sicurezza che deve essere presente in tutti i form --}}
            @csrf
            @method('PUT')
            {{-- TITOLO --}}
            <div class="mb-3">
                <label for="title" class="@error('title') is-invalid @enderror form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                    value="{{ old('title', $comic_to_edit->title) }}">
                @error('title')
                    {{-- l'errore se presente lo trovo dentro la variabile message --}}
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- DESCRIZIONE --}}
            <div class="mb-3">
                <label for="description" class="@error('description') is-invalid @enderror form-label">Descrizione</label>
                <textarea name="description" class="form-control" type="text" class="form-control" id="description"
                    placeholder="descrizione">{{ old('description', $comic_to_edit->description) }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- THUMB --}}
            <div class="mb-3">
                <label for="thumb" class="@error('thumb') is-invalid @enderror form-label">Thumb</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Thumb path"
                    value="{{ old('thumb', $comic_to_edit->thumb) }}">
                @error('thumb')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- PRICE --}}
            <div class="mb-3">
                <label for="price" class="@error('price') is-invalid @enderror form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Price"
                    value="{{ old('price', $comic_to_edit->price) }}">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- SERIES --}}
            <div class="mb-3">
                <label for="series" class="@error('series') is-invalid @enderror form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Series"
                    value="{{ old('series', $comic_to_edit->series) }}">
                @error('series')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- SALE DATE --}}
            <div class="mb-3">
                <label for="sale_date" class="@error('sale_date') is-invalid @enderror form-label">Sale date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Sale_date"
                    value="{{ old('sale_date', $comic_to_edit->sale_date) }}">
                @error('sale_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- TYPE --}}
            <div class="mb-3">
                <label for="type" class="@error('type') is-invalid @enderror form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Type"
                    value="{{ old('type', $comic_to_edit->type) }}">
                @error('type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" href="#" class="btn btn-success">Invia</button>
                <button type="reset" href="#" class="btn btn-warning">Annulla</button>
            </div>
    </div>


    </form>
    </div>
@endsection


@section('titlePage')
    Edit comic
@endsection
