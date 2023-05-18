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
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
      <div class="mb-3">
        <label for="desc">Aggiungi una descrizione</label>
        <textarea class="form-control @error('title') is-invalid @enderror" type="text" id="desc" name="desc" required></textarea>
        @error('desc')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="thumb">Aggiungi il link di un'immagine</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="thumb" name="thumb" required>
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price">Aggiungi un prezzo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="price" name="price" required>
        @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series">Aggiungi una serie</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="series" name="series" required>
        @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sales_date">Aggiungi una data di vendita</label>
        <input class="form-control @error('title') is-invalid @enderror" type="date" id="sales_date" name="sales_date" required>
        @error('sales_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type">Aggiungi il tipo di fumetto</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="type" name="type" required>
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
    
      <button type="submit" class="btn btn-primary">Aggiungi</button>
  </div>
</div>


</form>

@endsection