@extends('layout.app')
@section('content')
    <h1>Editar Prenda</h1>
    <form action="{{ route('prendas.update', $prenda->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="nombre" value="{{ $prenda->nombre }}">
        <textarea name="descripcion">{{ $prenda->descripcion }}</textarea>
        <input type="text" name="precio" value="{{ $prenda->precio }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection