@extends('layout')

@section('title', 'Portfolio')

@section('content')

    <h1>Portafolio</h1>
    

    <ul>

        @forelse ($portfolio as $item)

            <li>{{$item['title']}} <small>{{$loop->last ? 'Es el ultimo' : ''}}</small></li>        

        @empty

            <li>No hay proyectos</li>

        @endforelse

    </ul>

@endsection