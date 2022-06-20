@extends('layout')

@section('title','Portafolio')

@section('content')
    <h2>Hola desde portfolio</h2>
    <a href="{{route('projects.create')}}">Ingresar nuevo proyecto</a>
    @include('partials.validation-errors')
    <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse($projects as $project)
            {{--        Cards de bootstrap--}}
            <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                @if($project->image)
                    <img class="card-img-top" src="/storage/{{$project->image}}" alt="">
                @endif()
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('projects.show',$project)}}">{{$project->title}}</a></h5>
                    {{--                    Formatear fecha.--}}
                    <h6 class="card-subtitle">{{$project->created_at->format('d/m/Y')}}</h6>
                    <p class="card-text text-truncate">{{$project->description}}</p>
                </div>
            </div>
            {{--            Para leer imagen--}}
        @empty
            <li>No hay registros</li>
        @endforelse
        {{$projects->links()}}
    </div>
@endsection
