@extends('Templates.template')

@section('head')
    @extends('Templates.head')
        @section('titulo')
            Landing Boostrap
            
        @endsection
@endsection

@section('header')
    @include('Templates.header')
@endsection

@section('content')
    @include('Landing.content')
@endsection

@section('footer')
    @include('Templates.footer')
@endsection


