@extends('_layouts.layout')

@section('componentes')
    @vite('resources/js/ver_producto.js')
@endsection

@section('main')
    <div id="ver_producto" data-id="{{ $producto->id }}"></div>
@endsection
