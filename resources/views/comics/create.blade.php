@extends('layouts/main-page')
@section('content')
<h1 class="text-center">Aggiungi Albo</h1>
<div class="container w-50">
    <form action="{{route('comics.store')}}" method="POST" class="py-5">
      @csrf
    
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" id="title">
      </div>
    
      <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description"></textarea>
      </div>
    
      <div class="mb-3">
        <label for="thumb">Fornisci immagine</label>
        <input class="form-control" type="text" name="thumb" id="thumb">
      </div>
    
      <div class="mb-3">
        <label for="price">Prezzo</label>
        <input class="form-control" type="number" name="price" id="price">
      </div>
    
      <div class="mb-3">
        <label for="series">Serie</label>
        <input class="form-control" type="text" name="series" id="series">
      </div>
    
      <div class="mb-3">
        <label for="sale_date">Data di lancio</label>
        <input class="form-control" type="date" name="sale_date" id="sale_date">
      </div>
    
      <div class="mb-3">
        <label for="type">Tipo</label>
        <input class="form-control" type="text" name="type" id="type">
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
    
    </form>
</div>

@endsection