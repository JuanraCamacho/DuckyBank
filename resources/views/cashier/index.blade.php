@extends('layouts.plantilla')
@section('title', 'Cajeros')

@section('nav')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Cajeros') }}
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
<div class="container pt-6 pb-6">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Email
                    </th>                    
                    <th scope="col" class="relative px-6 py-3">
                      {{-- <span class="sr-only">Edit</span> --}}
                      <a href="{{ route('showAddCajero') }}" class="text-green-500 hover:text-indigo-900">Nuevo Cajero</a>                                             
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $item)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">                        
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            {{$item->name}}
                          </div>                          
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{$item->email}}</div>                      
                    </td>                                     
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('cajeros.destroy', $item->id)}}" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
                    </td>
                  </tr>   
                  @endforeach   
                  <!-- More items... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>      
<!-- Cajas... -->
<div class="bg-white shadow">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Cajas') }}
    </h2>
  </div>
</div>
<div class="container pt-6 pb-6">
  <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Caja
                  </th>                                    
                  <th scope="col" class="relative px-6 py-3">
                    <a href="{{ route('showAddCaja') }}" class="text-green-500 hover:text-indigo-900">Nueva Caja</a>                                           
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                  @foreach ($cajas as $item)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">                        
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {{$item->caja}}
                        </div>                          
                      </div>
                    </div>
                  </td>                                                      
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('cajas.destroy', $item->id)}}" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
                  </td>
                </tr>   
                @endforeach   
                <!-- More items... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div> 
@endsection
