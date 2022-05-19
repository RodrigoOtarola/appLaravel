@extends('layout')

@section('title','Contacto')

@section('content')
    <h2>Hola desde Contact!!!!</h2>
    {{--    @if($errors->any())--}}
    {{--        @foreach($errors->all() as $error)--}}
    {{--            <p>{{$error}}</p>--}}
    {{--        @endforeach--}}
    {{--    @endif--}}

    @include('partials.session-status')

        <form action="{{route('form.store')}}" method="post">
        @csrf<!--Siempre se debe agregar dentro de los formularios para el token de verificación contra ataques-->
            <input type="text" name="name" placeholder="Nombre" value="{{old('name')}}"><br>
        {!! $errors->first('name','<small>:message</small><br>') !!}<!-- el metodo first llama el name del campo input que tiene error, llaves permite inyectar contenido html -->
            <input type="text" name="mail" placeholder="E-mail" value="{{old('mail')}}"><br>
            {!! $errors->first('mail','<small>:message</small><br>') !!}
            <input type="text" name="subject" placeholder="asunto"><br>
            <textarea name="content" id="contenido" cols="30" rows="10"></textarea><br>
            <button type="submit">Enviar</button>
        </form>
@endsection
