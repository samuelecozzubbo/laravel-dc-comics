{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 bg-white text-center">
        <h1>Errore 404: Prodotto non trovato</h1>
    </div>
@endsection


@section('titlePage')
    404
@endsection
