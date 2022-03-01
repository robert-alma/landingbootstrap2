@extends('Templates.template')

@section('head')
    @extends('Templates.head')
        @section('titulo')
            Formulario            
        @endsection
@endsection

@section('header')
    @include('Templates.header')
@endsection

@section('content')
    @include('Formulario.content')
@endsection

@section('footer')
    @include('Formulario.footer')
@endsection
