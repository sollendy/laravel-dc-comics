@extends('layouts/main-page')'
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
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
                  <td>{{$comic->sale_date}}</td>
                  <td>{{$comic->price}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection