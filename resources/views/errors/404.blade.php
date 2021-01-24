{{-- @extends('Shared.master')
@section('title', 'Acumedic - Inicio')
@section('content')
<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Not found</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
    </head> -->
<main>              
    <section class="error404">
        <div class="col-12 text-center cont">
            <h3 class="mt-3">404 | NOT FOUND</h3>
            <p class="mb-5">UPPS! Parece que no se ha encontrado la página que buscas</p>
            <a href="{{ route('inicio')}}" style="border-radius:40px;" class="btn-1 mt-4">Quiero regresar</a>
        </div>
    </section>
</main>
@endsection --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>              
        <section class="error404">
            <div class="col-12 text-center cont">
                <h3 class="mt-3">404 | NOT FOUND</h3>
                <p class="mb-5">UPPS! Parece que no se ha encontrado la página que buscas</p>
                <a href="{{ route('inicio')}}" style="border-radius:40px;" class="btn-1 mt-4">Inicio</a>
            </div>
        </section>
    </main>
    
</body>
</html>