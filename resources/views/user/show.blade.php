@extends('layouts.layout')

@section('title', 'Detalle de Usuario')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detalle de Usuario</h1>
        <div class="card">
            <div class="card-header">
                {{ $user->name }}
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Rol:</strong> {{ $user->rol->nombre ?? 'Sin rol' }}</p>
                <p><strong>Creado:</strong> {{ $user->created_at }}</p>
                <p><strong>Actualizado:</strong> {{ $user->updated_at }}</p>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection

