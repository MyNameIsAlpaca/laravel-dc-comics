@extends('layout/main-layout')

@section('content')
<div class="single-comics">
  <div class="comic-pic">
    <img src="{{$comics->thumb}}" alt="">
  </div>
  <div class="container">
    <div class="main-container-top">
      <div class="left-section">
        <h2 class="title">
          {{ $comics->title}}
        </h2>
        <div class="price">
          <div class="left">
            <span class="lightgreen">U.S. price:</span> {{$comics->price}}
          </div>
          <div class="right">
            <span class="lightgreen">AVAILABLE</span>
            <span>Check Availability</span>
          </div>
        </div>
        <div class="description">
          {{$comics->desc}}
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
            
          </span>
          <hr>
          <span>
            Written by:
            
          </span>
          <hr>
        </div>
        <div class="right">
          <h3 class="title">
            Specs
          </h3>
          <hr>
          <span>Series: <span class="info">{{$comics->series}}</span></span>
          <hr>
          <span>U.S. price: <span class="info">{{$comics->price}}</span> </span>
          <hr>
          <span>On sale date: <span class="info">{{$comics->sale_date}}</span> </span>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection