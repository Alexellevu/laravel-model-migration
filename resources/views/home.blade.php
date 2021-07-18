@extends('layout.app')




@section('title', 'Home Page')

@section ('content')


    @foreach( $holidays as $holiday)
            <div class="card">
            <h2>{{$holiday->place}}</h2>
            <img src="{{$holiday->cover_image}}" alt="">
            <p><strong> Prezzo per due persone: euro {{$holiday->price}}</strong></p>
            <p>{{$holiday->description}}</p>
            </div>
    @endforeach



@endsection


