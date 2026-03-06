<x-app-layout>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-dark mb-0">Lista de Autores</h1>
            <p class="text-muted">Gestiona la información de los escritores registrados.</p>
        </div>
        <a href="/autores/create" class="btn btn-primary shadow-sm px-4 py-2">
            <i class="fa-solid fa-plus me-2"></i>Nuevo Autor
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <i class="fa-solid fa-check-circle me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-secondary">
                        <tr>
                            <th class="px-4 py-3 text-uppercase fs-small fw-bold">Nombres y apellidos</th>
                            <th class="py-3 text-uppercase fs-small fw-bold">Nacionalidad</th>
                            <th class="py-3 text-uppercase fs-small fw-bold text-center">Nacimiento</th>
                            <th class="py-3 text-uppercase fs-small fw-bold text-center">Premios</th>
                            <th class="px-4 py-3 text-uppercase fs-small fw-bold text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($autores as $autor)
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3 bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <span class="fw-semibold">{{ $autor->nombres }} {{ $autor->apellidos }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-info text-dark opacity-75">{{ $autor->nacionalidad }}</span>
                            </td>
                            <td class="text-center text-muted">
                                <i class="fa-solid fa-calendar-days me-1 small"></i>
                                {{ $autor->fecha_nacimiento }}
                            </td>
                            <td class="text-center">
                                <span class="badge bg-warning text-dark px-3">{{ $autor->premios_ganados }}</span>
                            </td>
                            <td class="px-4 text-end">
                                <div class="btn-group shadow-sm" role="group">
                                    <a href="/autores/show/{{ $autor->id }}" class="btn btn-outline-info btn-sm" title="Ver Detalles">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/autores/edit/{{ $autor->id }}" class="btn btn-outline-success btn-sm" title="Editar">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <form action="/autores/delete/{{ $autor->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este autor?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos extra para pulir el diseño */
    .fs-small { font-size: 0.75rem; }
    .table-hover tbody tr:hover { background-color: #f8faff; transition: 0.2s; }
    .avatar { font-size: 1.1rem; }
    .btn-group .btn { padding: 0.4rem 0.7rem; }
    .table thead th { border-top: none; }
</style>
</x-app-layout>