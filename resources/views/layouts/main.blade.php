@extends('adminlte::page')

{{-- @section('title', 'test') --}}

{{-- @section('content_header')
    @yield('header')
@stop --}}

@section('content')
    @yield('page-content')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @yield('page-css')
    <style>
        .brand-image {
            width: 40px !important;
            height: auto !important;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    @yield('page-js')
@stop