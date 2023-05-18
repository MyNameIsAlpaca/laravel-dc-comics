@extends('layout/main-layout')

@section('content')

<div class="create">
  <div class="container">
    <h1>Aggiungi il tuo fumetto!</h1>

    @if ($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>

    @endif
    
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
    
      <div class="mb-3">
        <label for="title">Aggiungi un titolo</label>
        <input class="form-control" type="text" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="desc">Aggiungi una descrizione</label>
        <textarea class="form-control" type="text" id="desc" name="desc" required></textarea>
      </div>
      <div class="mb-3">
        <label for="thumb">Aggiungi il link di un'immagine</label>
        <input class="form-control" type="text" id="thumb" name="thumb" required>
      </div>
      <div class="mb-3">
        <label for="price">Aggiungi un prezzo</label>
        <input class="form-control" type="text" id="price" name="price" required>
      </div>
      <div class="mb-3">
        <label for="series">Aggiungi una serie</label>
        <input class="form-control" type="text" id="series" name="series" required>
      </div>
      <div class="mb-3">
        <label for="sales_date">Aggiungi una data di vendita</label>
        <input class="form-control" type="date" id="sales_date" name="sales_date" required>
      </div>
      <div class="mb-3">
        <label for="type">Aggiungi il tipo di fumetto</label>
        <input class="form-control" type="text" id="type" name="type" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
  </div>
</div>


</form>

@endsection