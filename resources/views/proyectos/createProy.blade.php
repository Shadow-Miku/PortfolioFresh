@extends('layouts.app')
@section('title', 'Регистрация проекта')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro de proyecto') }}</div>

                <div class="card-body">
                    <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Left Column -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label" style="font-weight: bold;">Titulo</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label" style="font-weight: bold;">Descripción</label>
                                    <textarea type="text" class="form-control" id="description" name="description" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="functionresume" class="form-label" style="font-weight: bold;">Resumen Funcional</label>
                                    <input type="text" class="form-control" id="functionresume" name="functionresume">
                                </div>

                                <div class="mb-3">
                                    <label for="category" class="form-label" style="font-weight: bold;">Categoria</label>
                                    <select class="form-select" id="category" name="category">
                                        <option value="Web Design" selected>Diseño Web</option>
                                        <option value="Web Development">Desarrollo Web</option>
                                        <option value="Applications">Aplicaciones</option>
                                        <option value="Automation and Scripts">Automatización y Scripts</option>
                                        <option value="Machine Learning">Machine Learning</option>
                                        <option value="Other">Otros</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="youtube" class="form-label" style="font-weight: bold;">URL Youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube">
                                </div>
                                <div class="mb-3">
                                    <label for="github" class="form-label" style="font-weight: bold;">Repositorio de Github</label>
                                    <input type="text" class="form-control" id="github" name="github">
                                </div>
                                <div class="mb-3">
                                    <label for="demo" class="form-label" style="font-weight: bold;">URL Demo</label>
                                    <input type="text" class="form-control" id="demo" name="demo" >
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
                                    <div id="imagePreview" class="d-flex flex-wrap gap-2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('proyectos.list') }}" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Registrar Proyecto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
