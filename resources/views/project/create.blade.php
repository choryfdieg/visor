@extends('layout')

@section('title', 'Project')

@section('content')

    <h1>Nuevo Proyecto</h1>
 
    @include('partials.validations-errors')

    </ul>

    <form method="POST" action="{{ route('projects.store') }}">

        @include('project._form', [
            'botonText' => "Guardar"
        ])
        

    </form>
    
@endsection