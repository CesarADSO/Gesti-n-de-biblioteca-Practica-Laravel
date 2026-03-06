@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-dark mb-0">Catálogo de Libros</h1>
            <p class="text-muted">Administra el inventario de la biblioteca y sus ejemplares.</p>
        </div>
        <a href="/libros/create" class="btn btn-primary shadow-sm px-4 py-2">
            <i class="fa-solid fa-book-medical me-2"></i>Registrar Libro
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <i class="fa-solid fa-check-circle me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-secondary">
                        <tr>
                            <th class="px-4 py-3 text-uppercase fs-small fw-bold" style="width: 35%;">Título del Libro</th>
                            <th class="py-3 text-uppercase fs-small fw-bold">Autor</th>
                            <th class="py-3 text-uppercase fs-small fw-bold text-center">Género</th>
                            <th class="py-3 text-uppercase fs-small fw-bold text-center">Idioma</th>
                            <th class="px-4 py-3 text-uppercase fs-small fw-bold text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($libros))
                        @foreach($libros as $libro)
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box me-3 bg-warning-subtle text-warning rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 50px;">
                                        <i class="fa-solid fa-book-open"></i>
                                    </div>
                                    <div>
                                        <span class="fw-bold d-block text-dark">{{ $libro->titulo }}</span>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-user-tag me-2 text-primary opacity-50"></i>
                                    <span>{{ $libro->autor->nombres }} {{ $libro->autor->apellidos }}</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-3 py-2">
                                    {{ $libro->genero }}
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-light text-dark border px-3 py-2">
                                    <i class="fa-solid fa-language me-1 text-muted"></i> {{ $libro->idioma }}
                                </span>
                            </td>
                            <td class="px-4 text-end">
                                <div class="btn-group shadow-sm" role="group">
                                    <a href="/libros/show/{{ $libro->id }}" class="btn btn-outline-info btn-sm" title="Detalles">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="/libros/edit/{{$libro->id}}" class="btn btn-outline-success btn-sm" title="Editar">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="/libros/delete/{{$libro->id}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Eliminar" onclick="return confirm('¿Eliminar este libro del catálogo?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="fa-solid fa-box-open d-block fs-1 mb-3 opacity-25"></i>
                                No hay libros registrados actualmente.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos de pulido */
    .fs-small { font-size: 0.75rem; letter-spacing: 0.5px; }
    .table-hover tbody tr:hover { background-color: #fffdf8; transition: 0.2s; }
    .icon-box { font-size: 1.2rem; border: 1px solid rgba(0,0,0,0.05); }
    .btn-group .btn { padding: 0.5rem 0.8rem; }
    .badge { font-weight: 500; }
</style>
@endsection