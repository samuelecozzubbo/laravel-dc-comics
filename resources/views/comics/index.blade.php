@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-column" style="max-height: 100vh">
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
                    @foreach ($comics as $comics)
                        <tr class="align-middle">
                            <th>{{ $comics->title }}</th>
                            <td>{{ $comics->description }}</td>
                            <td>{{ $comics->price }}</td>
                            <td>{{ $comics->type }}</td>
                            <td><a class="btn btn-success" href="{{ route('comics.show', $comics) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection


@section('titlePage')
    pasta-index
@endsection
