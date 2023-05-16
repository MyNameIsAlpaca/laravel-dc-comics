@extends('layout/main-layout')

@section('content')

<div class="create">
  <div class="container">
    <h1>Aggiungi il tuo fumetto!</h1>
    
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
    
      <div class="mb-3">
        <label for="title">Aggiungi un titolo</label>
        <input type="text" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="desc">Aggiungi una descrizione</label>
        <input type="text" id="desc" name="desc">
      </div>
      <div class="mb-3">
        <label for="thumb">Aggiungi il link di un'immagine</label>
        <input type="text" id="thumb" name="thumb">
      </div>
      <div class="mb-3">
        <label for="price">Aggiungi un prezzo</label>
        <input type="text" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="series">Aggiungi una serie</label>
        <input type="text" id="series" name="series">
      </div>
      <div class="mb-3">
        <label for="sales_date">Aggiungi una data di vendita</label>
        <textarea id="sales_date" name="sales_date"></textarea>
      </div>
      <div class="mb-3">
        <label for="type">Aggiungi il tipo di fumetto</label>
        <input type="text" id="type" name="type">
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
  </div>
</div>


</form>

@endsection