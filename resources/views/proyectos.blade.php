@extends('layouts.portafolio')
@section('title', 'Proyectos')
@section('content')

<h2 class="text-4xl font-bold text-white mb-12 text-center">My Projects</h2>
<div x-data="{ activeModal: null }" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($proyectos as $proyecto)
    <!-- Card del proyecto -->
    <article class="project-card group relative h-96 rounded-xl overflow-hidden cursor-pointer" @click="activeModal = '{{ $proyecto->id }}'" >
        <div class="project-card-inner card-glass h-full p-6">
            <div class="absolute inset-0 bg-[url('{{ $proyecto->imagen_portada }}')] opacity-30 group-hover:opacity-50 transition-opacity duration-300 bg-cover bg-center"></div>
            <div class="relative z-10 h-full flex flex-col justify-between">
                <div>
                    <span class="text-pink-400 text-sm mb-2 block">{{ $proyecto->category }}</span>
                    <h3 class="text-2xl font-bold text-white mb-2">{{ $proyecto->title }}</h3>
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

  <!-- Modal y animaciones -->
  <div
    x-show="activeModal === '{{ $proyecto->id }}'"
    x-cloak
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0"
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
    <div class="flex block p-0 items-center justify-center h-screen pt-4 px-4 text-center sm:px-4 md:px-4 lg:p-8"> <!-- Modal Dimensions -->
    <div class="fixed inset-0 bg-green-900 bg-opacity-75 transition-opacity" @click="activeModal = null"></div> <!-- Modal Shade -->

        {{-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span> --}} <!-- Dummy element to trick the browser into centering the modal contents -->

        <div class="inline-block w-full p-6 align-bottom bg-gray-800 dark:bg-gray-900 rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:max-w-4xl 2xl:max-w-6xl 2xl:h-6/6"> <!-- Modal Body -->
            <div class="absolute top-2 right-4">
                <button @click="activeModal = null" class="text-gray-400 hover:text-red-500 text-2xl font-bold ">
                    &times;
                </button>
            </div>

            <div class="flex justify-between items-center mb-2 py-4">
                <h3 class="text-2xl font-semibold text-white">
                    {{ $proyecto->title }}
                </h3>
            </div>

            <p class="text-gray-300 mb-6">{{ $proyecto->description }}</p>

            <!-- Galería con controles tipo slider -->
<div x-data="{ activeImage: 0, total: {{ count($proyecto->fotos) }} }" class="relative grid gap-4">
    <!-- Imagen principal -->
    <div class="relative h-96 rounded-lg overflow-hidden border-2 border-indigo-800">
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
                <img src="{{ $foto->url_completa }}"
                     alt="Imagen principal {{ $index }}"
                     class="object-cover h-full w-full" />
            </div>
        @endforeach

        <!-- Controles prev/next -->
        <button
            type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            @click="activeImage = (activeImage === 0) ? total - 1 : activeImage - 1"
        >
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button
            type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            @click="activeImage = (activeImage === total - 1) ? 0 : activeImage + 1"
        >
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                <svg class="w-4 h-4 text-white dark:text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Miniaturas -->
    <div class="grid grid-cols-5 gap-4">
        @foreach ($proyecto->fotos as $index => $foto)
            <div>
                <img
                    src="{{ $foto->url_completa }}"
                    alt="Miniatura {{ $index }}"
                    class="h-auto max-w-full rounded-lg cursor-pointer border-2"
                    :class="{ 'border-blue-500': activeImage === {{ $index }} }"
                    @click="activeImage = {{ $index }}"
                />
            </div>
        @endforeach
    </div>
</div>

            <footer class="p-4 "></footer>
        </div>  <!-- Fin del Modal -->
    </div>
  </div>
  @endforeach
</div>

<!-- Paginación -->
<div class="mt-10">
    {{ $proyectos->links() }}
</div>

@endsection
