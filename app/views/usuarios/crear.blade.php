@extends('layouts.master')

@section('sidebar')
     @parent
@stop

@section('content')

        <h1>Crear Usuario</h1>    

       
        {{ Form::open(array('url' => 'usuarios/crear')) }}
            {{Form::label('nombre', 'Nombre')}} 
            {{Form::text('nombre', '',array('class'=>'form-control'))}}
            {{Form::label('apellido', 'Apellido')}}
            {{Form::text('apellido', '',array('class'=>'form-control'))}}
            {{Form::submit('Guardar',array('class'=>'btn btn-default'))}}        
        {{ Form::close() }}

        {{ HTML::link('usuarios', 'volver',array('class'=>'btn btn-success')); }}
@stop

