@extends('layouts.plantilla')
@section('title', 'Cajero '.$caj->name)



@section('content')
    <a href="{{route('cajeros.index')}}">Cajeros</a>
    <div class="container">
        <p><strong>Cajero: </strong>{{$caj->name}}</p>
        
    </div>        
@endsection
