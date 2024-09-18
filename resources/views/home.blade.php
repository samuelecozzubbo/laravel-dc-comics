{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5 bg-white text-center">
        <h1>{{ $title }}</h1>
        <p>La tua raccolta è di {{ $comics_number }} fumetti</p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
