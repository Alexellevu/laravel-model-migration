@extends('layout.app')
@extends('partials.footer')
@extends('partials.header')


@section('title', 'Home Page')

@section ('content')

@foreach( $holidays as $holiday)
                <h2>{{$holiday->place}}</h2>
@endforeach

@endsection


