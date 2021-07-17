@extends('layout.app')
@extends('partials.footer')
@extends('partials.header')


@section('title', 'Home Page')

@section ('content')

@foreach( $holidays as $holiday)
                <img src="{{$holiday->cover_image}}" alt="">
                <h2>{{$holiday->place}}</h2>
                <p>{{$holiday->price}}</p>
@endforeach



@endsection


