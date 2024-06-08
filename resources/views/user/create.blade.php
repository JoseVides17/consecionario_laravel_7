@extends('layouts.layout')

@section('title', 'Crear')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Usuario</h1>
        <form id="formCrear" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div>
                <label for="rol_id" class="form-label">Seleccionar Rol</label>
                <select name="rol_id" id="rol_id" class="form-control" required>
                    <option value="" disabled selected>Seleccionar</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Crear</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-md">Regresar</a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('formCrear').addEventListener('submit', function(event) {
                event.preventDefault(); // Evita que el formulario se envíe automáticamente

                // Muestra el cuadro de diálogo de SweetAlert
                Swal.fire({
                    title: "Quieres guardar el registro?",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: "Guardar",
                    denyButtonText: `No, no guardar`
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Registro Guardado!', '', 'info');
                        this.submit();
                    } else if (result.isDenied) {
                        Swal.fire("Registro no guardado!", "", "info");
                    }
                });
            });
        });
    </script>
@endpush
