@extends('layouts.app')
@section('title', 'Редактирование проектов')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Edición de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Left Column -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label" style="font-weight: bold;">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title"  value="{{ old('title', $proyecto->title) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label" style="font-weight: bold;">Descripción</label>
                                    <textarea type="text" class="form-control" id="description" name="description" required>{{old('description', $proyecto->description)}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="functionresume" class="form-label" style="font-weight: bold;">Resumen Funcional</label>
                                    <input type="text" class="form-control" id="functionresume" name="functionresume" value="{{ old('functionresume', $proyecto->functionresume) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label" style="font-weight: bold;">Categoria</label>
                                    <select class="form-select" id="category" name="category">
                                        <option value="Web Design" {{ $proyecto->category == 'Web Design' ? 'selected' : '' }}>Diseño Web</option>
                                        <option value="Web Development" {{ $proyecto->category == 'Web Development' ? 'selected' : '' }}>Desarrollo Web</option>
                                        <option value="Applications" {{ $proyecto->category == 'Applications' ? 'selected' : '' }}>Aplicaciones</option>
                                        <option value="Automation and Scripts" {{ $proyecto->category == 'Automation and Scripts' ? 'selected' : '' }}>Automatización y Scripts</option>
                                        <option value="Machine Learning" {{ $proyecto->category == 'Machine Learning' ? 'selected' : '' }}>Machine Learning</option>
                                        <option value="Other" {{ $proyecto->category == 'Other' ? 'selected' : '' }}>Otros</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="youtube" class="form-label" style="font-weight: bold;">URL Youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $proyecto->youtube) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="github" class="form-label" style="font-weight: bold;">Repositorio de Github</label>
                                    <input type="text" class="form-control" id="github" name="github" value="{{ old('github', $proyecto->github) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="demo" class="form-label" style="font-weight: bold;">URL Demo</label>
                                    <input type="text" class="form-control" id="demo" name="demo" value="{{ old('demo', $proyecto->demo) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="url" class="form-label" style="font-weight: bold;">Capturas</label>
                                    <input type="file" id="url" name="url[]" class="form-control" multiple onchange="previewImages(this)">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: bold;">Preview</label>
                                <div class="text-center">
                                    <div id="imagePreview" class="d-flex flex-wrap gap-2 mb-3">
                                        @foreach($proyecto->fotos as $foto)
                                            <img src="{{ asset('storage/' . $foto->url) }}"
                                                 class="img-thumbnail"
                                                 style="width: 120px; height: 120px;">
                                        @endforeach
                                    </div>

                                </div>
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
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('proyectos.list') }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Actualizar Datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
