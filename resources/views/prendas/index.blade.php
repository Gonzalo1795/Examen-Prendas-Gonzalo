@extends('layout.app')
@section('content')
    <h1>Listado de Prendas</h1>
    <table border="1">
        @foreach ($prendas as $prenda)
            <tr>
                <td>{{ $prenda->nombre }}</td>
                <td>
                    <a href="{{ route('prendas.show', $prenda->id) }}">Ver</a>
                    <a href="{{ route('prendas.edit', $prenda->id) }}">Editar</a>
                    <a href="{{ route('prendas.confirmDelete', $prenda->id) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection