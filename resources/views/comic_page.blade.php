@extends('layout/main-layout')

@section('content')

<div class="single-comics">
  <div class="comic-pic">
    <img src="{{$comic->thumb}}" alt="">
  </div>
  <div class="container">
    <div class="main-container-top">
      <div class="left-section">
        <h2 class="title">
          {{ $comic->title}}
        </h2> <a href="{{route('comics.edit', $comic)}}">Modifica</a>
        <div class="price">
          <div class="left">
            <span class="lightgreen">U.S. price:</span> {{$comic->price}}
          </div>
          <div class="right">
            <span class="lightgreen">AVAILABLE</span>
            <span>Check Availability</span>
          </div>
        </div>
        <div class="description">
          {{$comic->desc}}
        </div>
      </div>
      <div class="right-section">
        <span>Advertisement</span>
        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
      </div>
    </div>
  </div>
  <div class="main-container-bottom">
    <hr>
    <div class="container">
      <div class="main-container-inner">
        <div class="left">
          <h3 class="title">
            Talent
          </h3>
          <hr>
          <span>
            Art by:
            <strong>Work in progress</strong>
          </span>
          <hr>
          <span>
            Written by:
            <strong>Work in progress</strong>
          </span>
          <hr>
        </div>
        <div class="right">
          <h3 class="title">
            Specs
          </h3>
          <hr>
          <span>Series: <span class="info">{{$comic->series}}</span></span>
          <hr>
          <span>U.S. price: <span class="info">{{$comic->price}}</span> </span>
          <hr>
          <span>On sale date: <span class="info">{{$comic->sales_date}}</span> </span>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection