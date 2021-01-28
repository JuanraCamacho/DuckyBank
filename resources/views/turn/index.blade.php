@extends('layouts.plantilla')
@section('title', 'Cajeros')

@section('nav')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Turnos') }}
</h2>
{{-- <input type="button" onclick="{{route('cajeros.create')}}" name="" id=""> --}}
        {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mr-2 text-sm text-gray-700 underline">Nuevo cajero</a>
        @endif --}}
@endsection
@section('email')
<div>{{$nameAdmin}}</div>
@endsection

@section('content')
<x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-label class="mb-4 text-center text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl ..." value="{{ __('Selecciona turno') }}" />
        </x-slot>

        <x-jet-label class="mb-4 text-center text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl ..." value="{{ __('Selecciona caja') }}" />

        <x-jet-validation-errors class="mb-4" />

        <div class="mb-4 font-medium text-sm text-green-600">
            Texto
        </div>    

        <form method="POST" action="{{ route('empleado-caja') }}">
            @csrf

            <select id="caja" name="caja" class="block mt-1 w-full appearance-none">                
            @foreach ($cajas as $item)
				<option value="{{$item->id}}">Caja {{$item ->caja}}</option>
			@endforeach
            </select>
            <div class="items-center mt-4">
                

                <button class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mb-4">
                    {{ __('Aceptar') }}
                </button>
                
                <div>
               

               
                </div>
            </div>
        </form>
    </x-jet-authentication-card>

@endsection