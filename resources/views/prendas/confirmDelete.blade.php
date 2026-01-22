@extends('layout.app')

@section('content')
    <h1>Confirmar borrado</h1>
    <p>¿Estás seguro de que quieres eliminar la prenda <strong>{{ $prenda->nombre }}</strong>?</p>

    <form action="{{ route('prendas.destroy', $prenda->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: red; color: white;">Sí, eliminar definitivamente</button>
        <a href="{{ route('prendas.index') }}">Cancelar</a>
    </form>
@endsection