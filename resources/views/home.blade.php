@extends('layout/main-layout')

@section('content')
<main>
  <div class="container">
    <div class="card-container">
    </div>
    <button>LOAD MORE</button>
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