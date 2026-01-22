@extends('layout.app')

@section('content')
    <h1>Crear Nueva Prenda</h1>

    <form action="{{ route('prendas.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            @error('nombre') <p style="color:red">{{ $message }}</p> @enderror
        </div>
        <div>
            <label>Descripción:</label>
            <textarea name="description">{{ old('description') }}</textarea>
            @error('description') <p style="color:red">{{ $message }}</p> @enderror
        </div>
        <div>
            <label>Precio:</label>
            <input type="text" name="precio" value="{{ old('precio') }}">
            @error('precio') <p style="color:red">{{ $message }}</p> @enderror
        </div>
        <button type="submit">Guardar Prenda</button>
    </form>
@endsection