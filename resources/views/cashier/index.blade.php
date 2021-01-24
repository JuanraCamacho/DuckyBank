@extends('layouts.plantilla')
@section('title', 'Cajeros')

@section('content')
    <a href="{{route('cajeros.create')}}">Crear cajero</a>
    <div>
        <input type="button" onclick="{{route('cajeros.create')}}" name="" id="">
        @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mr-2 text-sm text-gray-700 underline">Register</a>
        @endif
    </div>
    
    <div class="container">
        <button type="button"><strong>Nuevo</strong></button>
        <h1>hola</h1>
        <h2>hola</h2>
        
        <ul>
            @foreach ($caj as $item)
            <li><a href="{{route('cajeros.show', $item->id)}}">{{$item->name}}</a></li>
            @endforeach    
            <li></li>
        </ul>
        {{-- <table>
            @foreach ($caj as $item)
            <tr> J
              <th>{{$item->name}}</th>              
              <th>{{$item->email}}</th>              
            </tr>
            @endforeach            
        </table> --}}
        {{-- <ul>
            
            
            <li>{{$item->name}}</li>
                
            
        </ul> --}}
        <div class="grid grid-cols-4">
            <div>A</div>
            <div>B</div>
            <div>C</div>
            <div>D</div>
        </div>                        
    </div>    
    {{-- <script type="text/javascript" src="js/actions.js"></script>  --}}
@endsection
