@extends('layout')

@section('title', 'Project')

@section('content')

    
    <h1>Editar Proyecto</h1>
 
    @include('partials.validations-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">

        @method('PATCH')

        @include('project._form', [
            'botonText' => "Actualizar"
        ])
        
    </form>
    
@endsection