@extends('layouts/main-page')
@section('content')
<h1 class="text-center">Aggiungi Albo</h1>
<div class="container w-50">
    <form action="{{route('comics.store')}}" method="POST" class="py-5">
      @csrf
    
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title">
          @error('title')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"></textarea>
          @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="thumb">Fornisci immagine</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb">
        @error('thumb')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="price">Prezzo</label>
        <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="price">
        @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="series">Serie</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series">
        @error('series')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="sale_date">Data di lancio</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date">
        @error('sale_date')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <div class="mb-3">
        <label for="type">Tipo</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type">
        @error('type')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
    
    </form>
</div>

@endsection