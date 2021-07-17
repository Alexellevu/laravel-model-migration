@extends('layout.app')
@extends('partials.footer')
@extends('partials.header')


@section('title', 'Home Page')

@section ('content')


    @foreach( $holidays as $holiday)
            <div class="card">
            <h2>{{$holiday->place}}</h2>
            <img src="{{$holiday->cover_image}}" alt="">
            <p>Prezzo per due persone: euro {{$holiday->price}}</p>
            </div>
    @endforeach



@endsection


