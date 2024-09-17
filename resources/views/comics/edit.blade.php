{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 bg-white">
        <h1>Modifica {{ $comic_to_edit->name }}</h1>

        <form class="py-5" action="{{ route('comics.update') }}" method="POST">
            {{-- Questo è un token di sicurezza che deve essere presente in tutti i form --}}
            @csrf
            {{-- Method PUT --}}
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" value="{{ $comic_to_edit->title }}" name="title" class="form-control" id="title"
                    placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" type="text" class="form-control" id="description"
                    placeholder="descrizione">
                    {{ $comic_to_edit->title }}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" value="{{ $comic_to_edit->thumb }}" name="thumb" class="form-control" id="thumb"
                    placeholder="Thumb path">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" value="{{ $comic_to_edit->price }}" name="price" class="form-control" id="price"
                    placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" value="{{ $comic_to_edit->series }}" name="series" class="form-control"
                    id="series" placeholder="Series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" value="{{ $comic_to_edit->sale_date }}" name="sale_date" class="form-control"
                    id="sale_date" placeholder="Sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" value="{{ $comic_to_edit->type }}" name="type" class="form-control" id="type"
                    placeholder="Type">
            </div>
            <div class="mb-3">
                <button type="submit" href="#" class="btn btn-success">Aggiorna</button>
                <button type="reset" href="#" class="btn btn-warning">Annulla</button>
            </div>
    </div>


    </form>
    </div>
@endsection


@section('titlePage')
    Edit comic
@endsection
