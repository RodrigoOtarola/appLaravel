@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h2>Crear nuevo proyecto</h2>

    @include('partials.session-status')

    @include('partials.validation-errors')

    <form action="{{route('projects.store')}}" method="POST">
        @include('projects._form',['btnText'=>'Guardar'])
    </form>
@endsection
