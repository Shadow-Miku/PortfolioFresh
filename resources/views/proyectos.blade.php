@extends('layouts.portafolio')
@section('title', 'Proyects')
@section('content')

<h2 class="text-4xl font-bold text-white mb-12 text-center">My Projects</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($proyectos as $proyecto)
        @php
        $categoryColors = [
            'Web Design' => 'text-pink-400',
            'Web Development' => 'text-cyan-400',
            'Applications' => 'text-red-500',
            'Automation and Scripts' => 'text-yellow-400',
            'Machine Learning' => 'text-green-400',
            'Other' => 'text-gray-400',
        ];

        $categoryClass = $categoryColors[$proyecto->category] ?? 'text-white';
        @endphp
    <!-- Card del proyecto -->
    <article onclick="window.location.href='{{ route('proyecto', ['id' => $proyecto->id]) }}'" class="project-card group relative h-96 rounded-xl overflow-hidden cursor-pointer" >
        <div class="project-card-inner card-glass h-full p-6">
            <div class="absolute inset-0 bg-[url('{{ $proyecto->imagen_portada }}')] opacity-30 group-hover:opacity-40 transition-opacity duration-300 bg-cover bg-center"></div>
            <div class="relative z-10 h-full flex flex-col justify-between">
                <div>
                    <span class="text-sm mb-2 block {{ $categoryClass }}">{{ $proyecto->category }}</span>
                    <h3 class="text-2xl font-bold text-white mb-2">{{ $proyecto->title }}</h3>
                    <p class="text-gray-300">{{ $proyecto->functionresume }}</p>
                </div>
                <div class="flex space-x-4 mt-4">
                    @if ($proyecto->demo)
                        <a href="{{ $proyecto->demo }}" class="text-indigo-400 hover:text-indigo-300 transition"
                           target="_blank" onclick="event.stopPropagation()">Demo →</a>
                    @endif
                    @if ($proyecto->github)
                        <a href="{{ $proyecto->github }}" class="text-gray-400 hover:text-gray-300 transition"
                           target="_blank" onclick="event.stopPropagation()">Code →</a>
                    @endif
                    @if ($proyecto->youtube)
                        <a href="{{ $proyecto->youtube }}" class="text-red-600 hover:text-red-300 transition"
                           target="_blank" onclick="event.stopPropagation()">YouTube →</a>
                    @endif
                </div>
            </div>
        </div>
    </article>
  @endforeach
</div>

<!-- Paginación -->
<div class="mt-10">
    {{ $proyectos->links() }}
</div>

@endsection
