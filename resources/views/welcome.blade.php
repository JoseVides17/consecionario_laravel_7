@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    @include('partials.nav')
    <div class="container py-5">
        <h1 class="mb-4 text-center">Bienvenido al Sistema de Gestión de Concesionarios</h1>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Usuarios</h5>
                        <p class="card-text">Administra los usuarios del sistema. Crear, editar, eliminar y ver usuarios.</p>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Ir a Usuarios</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Vehículos</h5>
                        <p class="card-text">Administra el inventario de vehículos. Crear, editar, eliminar y ver vehículos.</p>
                        <a href="{{ route('vehiculos.index') }}" class="btn btn-primary">Ir a Vehículos</a>
                    </div>
                </div>
            </div>

            <!-- Gestión de Ventas -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Ventas</h5>
                        <p class="card-text">Administra las ventas realizadas. Crear, editar, eliminar y ver ventas.</p>
                        <a href="{{ route('ventas.index') }}" class="btn btn-primary">Ir a Ventas</a>
                    </div>
                </div>
            </div>

            <!-- Reportes -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Inventarios</h5>
                        <p class="card-text">Genera, administra y visualiza inventarios.</p>
                        <a href="{{ route('inventario.index') }}" class="btn btn-primary">Ir a Reportes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Servicios</h5>
                        <p class="card-text">Administra los servicios ofrecidos.</p>
                        <a href="{{ route('servicios.index') }}" class="btn btn-primary">Ir a Configuración</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Perfil de Usuario</h5>
                        <p class="card-text">Consulta y edita la información de tu perfil de usuario.</p>
                        <a href="{{ route('users.show', \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()) }}" class="btn btn-primary">Ir a Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

