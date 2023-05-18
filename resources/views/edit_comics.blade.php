@extends('layout/main-layout')

@section('content')

<div class="create">
  <div class="container">
    <h1>Modifica il fumetto: {{$comic->title}}</h1>

    @if ($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>

    @endif
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      
      @method('PUT')

      <div class="mb-3">
        <label for="title">Modifica il titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" value="{{old('title')}}" name="title" value="{{old('title')}}">
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
      <div class="mb-3">
        <label for="desc">Modifica la descrizione</label>
        <textarea class="form-control @error('title') is-invalid @enderror" type="text" id="desc" name="desc" required>{{old('desc')}}</textarea>
        @error('desc')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="thumb">Modifica il link dell'immagine</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="thumb" value="{{old('thumb')}}" name="thumb" required>
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price">Modifica il prezzo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="price" value="{{old('price')}}" name="price" required>
        @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series">Modifica la serie</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="series" value="{{old('series')}}" name="series" required>
        @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sales_date">Modifica la data di vendita</label>
        <input class="form-control @error('title') is-invalid @enderror" type="date" id="sales_date" value="{{old('sales_date')}}" name="sales_date" required>
        @error('sales_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type">Modifica il tipo di fumetto</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="type" value="{{old('type')}}" name="type" required>
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
    
      <button type="submit" class="btn btn-primary">Salva</button>
  </div>
</div>


</form>

@endsection