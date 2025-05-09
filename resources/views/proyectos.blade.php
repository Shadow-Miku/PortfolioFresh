@extends('layouts.portafolio')
@section('title', 'Proyectos')
@section('content')

<h2 class="text-4xl font-bold text-white mb-12 text-center">My Projects</h2>
<div
  x-data="{ activeModal: null }"
  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
>
  @foreach ($proyectos as $proyecto)
  <!-- Card del proyecto -->
  <article class="project-card group relative h-96 rounded-xl overflow-hidden cursor-pointer" @click="activeModal = '{{ $proyecto->id }}'" >
    <div class="project-card-inner card-glass h-full p-6">
      <div class="absolute inset-0 bg-[url('{{ $proyecto->imagen_portada }}')] opacity-30 group-hover:opacity-50 transition-opacity duration-300 bg-cover bg-center"></div>
      <div class="relative z-10 h-full flex flex-col justify-between">
        <div>
          <span class="text-pink-400 text-sm mb-2 block"> {{ $proyecto->category }} </span>
          <h3 class="text-2xl font-bold text-white mb-2">
            {{ $proyecto->title }}
          </h3>
          <p class="text-gray-300">{{ $proyecto->functionresume }}</p>
        </div>
        <div class="flex space-x-4 mt-4">
          @if ($proyecto->demo)
                <a href="{{ $proyecto->demo }}" class="text-indigo-400 hover:text-indigo-300 transition" target="_blank">Demo → </a>
            @endif @if ($proyecto->github)
                <a href="{{ $proyecto->github }}" class="text-gray-400 hover:text-gray-300 transition" target="_blank">Code → </a>
            @endif @if ($proyecto->youtube)
                <a href="{{ $proyecto->youtube }}" class="text-red-400 hover:text-red-300 transition" target="_blank"> YouTube →</a>
          @endif
        </div>
      </div>
    </div>
  </article>

  <!-- Modal con Galería y animaciones -->
  <div
    x-show="activeModal === '{{ $proyecto->id }}'"
    x-cloak
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="fixed z-50 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
    x-data="{
    activeImage: 0,
    total: {{ count($proyecto->fotos) }},
    prev() { this.activeImage = (this.activeImage - 1 + this.total) % this.total },
    next() { this.activeImage = (this.activeImage + 1) % this.total }
    }"
    >
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" @click="activeModal = null"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white dark:bg-gray-900 rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl w-full p-6">
            <div class="flex justify-between items-center mb-4">
            <h3 class="text-2xl font-semibold text-white">
                {{ $proyecto->title }}
            </h3>
            <button
                @click="activeModal = null"
                class="text-gray-400 hover:text-red-500 text-2xl font-bold"
            >
                &times;
            </button>
            </div>
        <p class="text-gray-300 mb-6">{{ $proyecto->description }}</p>
            <!-- Gallery -->
            <div class="flex gap-4 p-2 md:p-4 sm:p-4">
                <!-- Miniaturas -->
                <div class="flex flex-col space-y-2 w-20 overflow-y-auto ">
                @foreach ($proyecto->fotos as $index => $foto)
                    <img
                    src="{{ $foto->url_completa }}"
                    alt="Miniatura {{ $index }}"
                    class="cursor-pointer rounded border-2"
                    :class="{ 'border-blue-500': activeImage === {{ $index }} }"
                    @click="activeImage = {{ $index }}"
                    />
                @endforeach
                </div>

                <!-- Imagen principal -->
                <div class="relative flex-1 h-96">
                @foreach ($proyecto->fotos as $index => $foto)
                    <div
                    x-show="activeImage === {{ $index }}"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in-out duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0"
                    >
                    <img src="{{ $foto->url_completa }}" alt="Imagen principal" class="object-cover h-full w-full mx-auto border-2 rounded border-indigo-800 "/>
                    </div>
                @endforeach
                </div>  <!-- Fin de Imagen principal -->
            </div>  <!-- Fin del Gallery -->
        </div> <!-- Fin del Modal -->
    </div>
  </div>
  @endforeach
</div>

<!-- Paginación -->
<div class="mt-10">
    {{ $proyectos->links() }}
</div>

@endsection
