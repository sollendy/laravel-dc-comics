@extends('layouts/main-page')
@section('content')
    <div class="container">

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
              </div>
          
              <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description">
                  {{$comic->description}}
                </textarea>
              </div>
          
              <div class="mb-3">
                <label for="type">Serie</label>
                <input class="form-control" type="text" id="series" name="type" value="{{$comic->series}}">
              </div>
          
              <div class="mb-3">
                <label for="src">Copertina</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
              </div>
          
              <div class="mb-3">
                <label for="cooking_time">Tipo</label>
                <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
              </div>
          
              <div class="mb-3">
                <label for="weight">Data Rilascio</label>
                <input class="form-control" type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
              </div>

              <div class="mb-3">
                <label for="weight">Prezzo</label>
                <input class="form-control" type="text" id="price" name="price" value="{{$comic->price}}">
              </div>
          
              <button class="btn btn-primary mb-1" type="submit">Salva</button>
        </form>

    </div>
@endsection