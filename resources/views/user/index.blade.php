@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')
    <div class="container">
        <h1 class="mb-4">Lista de Usuarios</h1>
        <div class="card card-gray">
            <div class="card-body">
                <form id="searchForm" method="GET" action="{{ route('users.index') }}">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="mb-1">
                                <input type="text" name="name" id="name" class="form-control" value="{{ request('name') }}" placeholder="Nombres" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="mb-1">
                                <input type="email" name="email" id="email" class="form-control" value="{{ request('email') }}" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="mb-1">
                                <input type="date" name="created_at" id="created_at" class="form-control" value="{{ request('created_at') }}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="" style="float: right">
                                <button type="submit" id="btn_buscar" class="btn btn-primary btn-md mb-1" data-url="{{ route('users.index') }}">Buscar</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-md mb-1">Resetear</a>
                                <a href="{{ route('users.create') }}" class="btn btn-success btn-md mb-1">Nuevo</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover mt-4">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody id="userTableBody">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rol->nombre ?? 'Sin Rol' }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <script src="{{ @asset('/assets/js/filtro.js') }}"></script>
@endsection
