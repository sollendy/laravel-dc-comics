@extends('layouts/main-page')
@section('content')
    <section id="stile-show">
        <div class="container">

            <div class="row mb-5">
                <div class="d-flex justify-content-start">
                  <img id="comic-image" src="{{$comic->thumb}}" alt="copertina">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-3">Titolo</div>
                <div class="col-9">{{$comic->title}}</div>
              </div>
              <div class="row mb-4">
                <div class="col-3">Descrizione</div>
                <div class="col-9">{{$comic->description}}</div>
              </div>
              <div class="row mb-4">
                  <div class="col-3">Serie</div>
                  <div class="col-9">{{$comic->series}}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-3">Tipo</div>
                    <div class="col-9">{{$comic->type}}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-3">Data di lancio</div>
                    <div class="col-9">{{$comic->sale_date}}</div>
                </div>
                <div class="row mb-4">
                  <div class="col-3">Prezzo</div>
                  <div class="col-9">{{$comic->price}}</div>
                </div>
            </div>
            <div class="row w-75 mx-auto mb-1">
                <div class="col-6">
                  <a href="{{route('comics.edit', $comic->id)}}">
                    <button class="btn btn-primary">Modifica l'Albo</button>
                    </a>
                </div>
                <div class="col-6">
            
                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
            
                    <button class="btn btn-danger" type="submit">ELIMINA</button>
                  </form>
            
                </div>
              </div>
        </div>
    </section>
@endsection