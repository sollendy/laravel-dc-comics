@extends('layouts/main-page')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Data Rilascio</th>
                <th scope="col">Prezzo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                  <td>{{$comic->id}}</td>
                  <td>{{$comic->title}}</td>
                  <td>{{$comic->series}}</td>
                  <td>{{$comic->type}}</td>
                  <td>{{$comic->sale_date}}</td>
                  <td>{{$comic->price}}</td>
                  <td><a href="{{ route('comics.show', $comic->id) }}">scopri</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
                <a href="{{ route("comics.create") }}">
                    <button class="btn btn-primary mb-1 text-center">Aggiungi Albo</button>
                </a>
          </div>
    </div>
@endsection