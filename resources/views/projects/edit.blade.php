@extends('layout')

@section('title','Editar proyecto')

@section('content')
    <h2>Crear nuevo proyecto</h2>

    @include('partials.session-status')

    @include('partials.validation-errors')

    <form action="{{route('projects.update', $project)}}" method="POST">

        @method('PATCH')
        @include('projects._form',['btnText'=>'Actualizar'])
    </form>
@endsection
