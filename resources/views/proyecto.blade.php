@extends('layouts.portafolio')
@section('title', $proyecto->title)
@section('content')

<article class="resume py-4 px-4 max-w-5xl mx-auto bg-black bg-opacity-40 shadow-md rounded-lg" data-page="resume">

    <a href="{{ url()->previous() }}"
        class="inline-flex items-center gap-2 px-2 py-1 mb-4 text-indigo-400 hover:text-white transition bg-indigo-800 hover:bg-indigo-600 border-2 border-indigo-700 rounded-lg shadow-lg">
         <svg class="w-4 h-4 text-white dark:text-white-800 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
         </svg>
         <span>Back</span>
     </a>

    <header class="mb-6 text-left">
      <h2 class="text-4xl font-bold text-gray-100">{{ $proyecto->title }}</h2>
    </header>

    <section class="mb-6">
        <!-- Galería con controles tipo slider -->
        <div x-data="{ activeImage: 0, total: {{ count($proyecto->fotos) }} }" class="relative grid gap-4">
            <!-- Imagen principal -->
            <div class="relative h-[500px] rounded-lg overflow-hidden border-2 border-indigo-800">
                @foreach ($proyecto->fotos as $index => $foto)
                    <div
                        x-show="activeImage === {{ $index }}"
                        x-transition:enter="transition ease-in-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in-out duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute inset-0">
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
    </section>

    <section class="mb-16">
        <p class="text-gray-300 mb-6" style="white-space: pre-line;">{{ $proyecto->description }}</p>
    </section>
</article>
@endsection
