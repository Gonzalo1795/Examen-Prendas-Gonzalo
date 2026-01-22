@extends('layout.app')
@section('content')
    <h1>{{ $prenda->nombre }}</h1>
    <p>{{ $prenda->descripcion }}</p>
    <p>Precio: {{ $prenda->precio }}€</p>
    <a href="{{ route('prendas.index') }}">Volver</a>
@endsection