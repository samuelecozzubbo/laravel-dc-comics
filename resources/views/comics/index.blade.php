@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-column" style="max-height: 100vh">
        {{-- Alert eliminazione fumetto --}}
        @if (session('deleted'))
            <div class="alert alert-info mt-2 position-absolute top-20 start-50 translate-middle role="alert">
                {{ session('deleted') }}
            </div>
        @endif


        <h1 class="text-danger">Comics</h1>
        <div class="table-container overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Tipologia</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="align-middle">
                            <th>{{ $comic->title }}</th>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                {{-- show --}}
                                <a class="btn btn-success" href="{{ route('comics.show', $comic) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                {{-- edit --}}
                                <a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                @include('partials.formdelete')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection


@section('titlePage')
    comics-index
@endsection
