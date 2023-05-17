@extends('layout/main-layout')

@section('content')

<div class="create">
  <div class="container">
    <h1>Modifica il fumetto!</h1>
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      
      @method('PUT')

      <div class="mb-3">
        <label for="title">Modifica il titolo</label>
        <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
      </div>
      <div  class="mb-3">
        <label for="desc">Modifica la descrizione</label>
        <textarea class="form-control" type="text" id="desc" name="desc">{{$comic->desc}}</textarea>
      </div>
      <div class="mb-3">
        <label for="thumb">Modifica il link di un'immagine</label>
        <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
      </div>
      <div class="mb-3">
        <label for="price">Modifica il prezzo</label>
        <input class="form-control" type="text" id="price" name="price" value="{{$comic->price}}">
      </div>
      <div class="mb-3">
        <label for="series">Modifica la serie</label>
        <input class="form-control" type="text" id="series" name="series" value="{{$comic->series}}">
      </div>
      <div class="mb-3">
        <label for="sales_date">Modifica la data di vendita</label>
        <input class="form-control" type="date" id="sales_date" name="sales_date" value="{{$comic->sales_date}}">
      </div>
      <div class="mb-3">
        <label for="type">Modifica il tipo di fumetto</label>
        <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
  </div>
</div>


</form>

@endsection