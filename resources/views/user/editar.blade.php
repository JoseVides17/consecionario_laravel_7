@extends('layouts.layout')

@section('title', 'Editar Usuario')

@section('content')
    <div class="container">
        <h1 class="mb-4">Editar Usuario</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="rol_id">Rol</label>
                        <select name="rol_id" id="rol_id" class="form-control" required>
                            @foreach($roles as $rol)
                                <option value="{{ $rol->id }}" {{ $user->rol->id == $rol->id ? 'selected' : '' }}>
                                    {{ $rol->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">Actualizar Usuario</button>
                </form>
            </div>
        </div>
    </div>

@endsection

