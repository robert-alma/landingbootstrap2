@extends('Templates.template')

@section('head')
    @extends('Templates.head')
        @section('titulo')
            Copia            
        @endsection
@endsection

@section('header')
    @include('Templates.header')
@endsection

@section('content')
    @include('Copia.content')
@endsection

@section('footer')
    @include('Templates.footer')
@endsection


