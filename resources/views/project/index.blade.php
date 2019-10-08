@extends('layout')

@section('title', 'Portfolio')

@section('content')

    
    <h1>Portafolio</h1>
    
    <a href="{{ route('projects.create') }}">Crear nuevo proyecto</a>

    <ul>

        @forelse ($projects as $project)

            <li><a href="{{ route('projects.show', $project)  }}">{{$project->title}}</a></li><br>        
            <small>{{$project->description}}</small><br>    
            <small>{{$project->created_at->format('Y-m-d')}}</small><br>    
            <small>{{$project->updated_at->format('Y-m-d')}}</small><br>    

        @empty

            <li>No hay proyectos</li>

        @endforelse

        {{ $projects->links() }}

    </ul>

@endsection