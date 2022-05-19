@extends('layout')

@section('title','Portafolio')

@section('content')
    <h2>Hola desde portfolio</h2>
    <a href="{{route('projects.create')}}">Ingresar nuevo proyecto</a>
    @include('partials.validation-errors')
    <ul>
        @forelse($projects as $project)
            <li><a href="{{route('projects.show',$project)}}">{{$project->title}}</li></a>
        @empty
            <li>No hay registros</li>
        @endforelse
        {{$projects->links()}}
    </ul>
@endsection
