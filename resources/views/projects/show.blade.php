@extends('layout')

@section('title', 'Portafolio | '. $project->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                {{--            Muestra imagen--}}
                @if($project->image)
                    <img class="card-img-top" src="/storage/{{$project->image}}" alt="{{$project->title}}">
                @endif()
                <div class="bg-white p-5 shadow rounded">

                    {{--            titulo--}}
                    <h1>{{$project->title}}</h1>

                    {{--            Muestra descripción--}}
                    <p class="text-secondary">{{$project->description}}</p>

                    {{--            Muestra fecha de creación--}}
                    <p class="text-black-50">{{$project->created_at->diffForHumans()}} </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{route('projects.index')}}">
                            Regresar
                        </a>
                    </div>

                    <a href="{{route('projects.edit', $project)}}" class="btn btn-primary">Editar</a>
                    @include('partials.session-status')
                    <form method="POST" action="{{route('projects.destroy', $project)}}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
