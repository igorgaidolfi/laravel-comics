@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="col-7">
            <h3>{{$comic['title']}}</h3>
            <p>U.S Price: {{$comic['price']}}</p>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="col-3">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ad">
        </div>
        <div class="col-10">
            <h5>Specs</h5>
            <p>Series: {{$comic['series']}}</p>
            <p>U.S Price: {{$comic['price']}}</p>
            <p>On Sale Date: {{$comic['sale_date']}}</p>
        </div>
@endsection