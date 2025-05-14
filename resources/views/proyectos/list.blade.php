@extends('layouts.app')
@section('title', 'проекты')
@section('content')

<div class="container my-5">

    {{-- Mensajes de sesión --}}
    @if(Session::has('success'))
        <div class="alert alert-success d-flex align-items-center mb-4 shadow-sm rounded-3" role="alert">
            <i class="bi bi-check-circle me-2"></i>
            <div>{{ Session::get('success') }}</div>
        </div>
    @endif

    @if(Session::has('updated'))
        <div class="alert alert-warning d-flex align-items-center mb-4 shadow-sm rounded-3" role="alert">
            <i class="bi bi-highlighter me-2"></i>
            <div>{{ Session::get('updated') }}</div>
        </div>
    @endif

    @if(Session::has('deleted'))
        <div class="alert alert-danger d-flex align-items-center mb-4 shadow-sm rounded-3" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>
            <div>{{ Session::get('deleted') }}</div>
        </div>
    @endif

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center rounded-top-4">
            <h4 class="mb-0">📁 Lista de Proyectos</h4>
            <a href="{{ route('proyectos.createProy') }}" class="btn btn-warning btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Crear
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col" class="text-center">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectos as $proyecto)
                    <tr>
                        <th scope="row">{{ $proyecto->id }}</th>
                        <td>{{ $proyecto->title }}</td>
                        <td>{{ $proyecto->category }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#proyectoModal{{ $proyecto->id }}">
                                <i class="bi bi-images"></i> Ver
                            </button>

                            <a href="{{ route('proyectos.editProy', ['proyecto' => $proyecto->id]) }}" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash3"></i> Eliminar
                            </a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="proyectoModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="proyectoModalLabel{{ $proyecto->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="proyectoModalLabel{{ $proyecto->id }}">{{ $proyecto->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                          </div>
                          <div class="modal-body">
                            <p><strong>Resumen Funcional:</strong> {{ $proyecto->functionresume }}</p>
                            <p><strong>Categoría:</strong> {{ $proyecto->category }}</p>
                            <p style="white-space: pre-line;"><strong>Descripción:</strong>  {{ $proyecto->description }}</p>
                            <p>
                                <strong>URL Youtube:</strong>
                                <a href="{{ $proyecto->youtube }}" target="_blank">{{ $proyecto->youtube }}</a>
                            </p>

                            <p>
                                <strong>Repositorio de Github:</strong>
                                <a href="{{ $proyecto->github }}" target="_blank">{{ $proyecto->github }}</a>
                            </p>
                            <p>
                                <strong>URL Demo:</strong>
                                <a href="{{ $proyecto->demo }}" target="_blank">{{ $proyecto->demo }}</a>
                            </p>

                            <div class="row">
                                <p><strong>Fotos:</strong></p>
                                @foreach($proyecto->fotos as $foto)
                                <div class="col-md-4 mb-3">
                                    <img src="{{ asset('storage/' . $foto->url) }}" class="img-fluid rounded shadow-sm" alt="Imagen del proyecto">
                                </div>
                                @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <!-- Paginación -->
    <div class="mt-10">
        {{ $proyectos->links() }}
    </div>
</div>

@endsection
