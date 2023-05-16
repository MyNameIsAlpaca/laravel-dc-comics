@extends('layout/main-layout')

@section('content')
<main>
  <div class="container">
    <div class="card-container">
      @foreach ($comics as $item)
      <a href="{{route('comics.show', $item)}}"><div class="card-comics">
        <div class="img-container">
          <img src="{{ $item['thumb']}}" alt="">
        </div>
        <div class="title">{{ $item['title']}}</div>
      </div></a>
      
      @endforeach
    </div>
    <button><a href="{{route('comics.create')}}">Aggiungi</a></button>
  </div>
  <div class="link">
    <div class="main-container">
      <div class="container">
          <ul>
              <li>
                  <div class="img-container">
                      <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                  </div>
                  digital comics
              </li>
              <li>
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                </div>
                dc merchandise
              </li>
              <li>
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                </div>
                subscription
              </li>
              <li>
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                </div>
                comic shop locator
              </li>
              <li>
                <div class="img-container">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                </div>
                dc power visa
              </li>
          </ul>
      </div>
    </div>
  </div>
</main>
@endsection