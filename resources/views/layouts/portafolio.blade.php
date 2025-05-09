<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>

  <!-- Tailwind y estilos -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="icon" href="{{ asset('img/gato_fresco.png') }}" type="image/x-icon">

  <!-- Partículas -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer></script>


  <!--Scripts -->
  <script src="{{ asset('js/D1.js') }}" ></script>

</head>

<body class="bg-gradient-to-br from-gray-900 to-black min-h-screen text-white">
    <!-- Fondo partículas -->
    <div id="particles-js" class="pointer-events-none"></div>

    <!-- Navbar -->
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800/50 backdrop-blur-md fixed w-full z-50 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="{{ route('welcome') }}" class="flex items-center">
            <!-- Logo o texto -->
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-indigo-500 neon-text">Lemon Lab</span>
        </a>

        <!-- Botones login/dashboard para pantallas grandes -->
        <div class="flex items-center lg:order-2 space-x-2">
            @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}"
                class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-indigo-500 dark:hover:bg-indigo-600 focus:outline-none dark:focus:ring-indigo-800">
                Dashboard
                </a>
            @endauth
            @endif
            <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd" />
            </svg>
            </button>
        </div>

        <!-- Menú para pantallas grandes y toggle para móviles -->
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
                <a href="{{ route('welcome') }}" class="block py-2 pr-4 pl-3 text-gray-700 dark:text-white hover:text-indigo-500 lg:p-0 transition {{ Route::currentRouteName() === 'welcome' ? 'text-indigo-500 font-bold border-b-2 border-indigo-500' : 'text-gray-700 dark:text-white hover:text-indigo-500' }}">About</a>
            </li>
            <li>
                <a href="{{ route('resume') }}" class="block py-2 pr-4 pl-3 text-gray-700 dark:text-white hover:text-indigo-500 lg:p-0 transition {{ Route::currentRouteName() === 'resume' ? 'text-indigo-500 font-bold border-b-2 border-indigo-500' : 'text-gray-700 dark:text-white hover:text-indigo-500' }}">Resume</a>
            </li>
            <li>
                <a href="{{ route('portafolio') }}" class="block py-2 pr-4 pl-3 text-gray-700 dark:text-white hover:text-indigo-500 lg:p-0 transition {{ Route::currentRouteName() === 'portafolio' ? 'text-indigo-500 font-bold border-b-2 border-indigo-500' : 'text-gray-700 dark:text-white hover:text-indigo-500' }}"">Portfolio</a>
            </li>
            <li>
                <a href="{{ route('contacto') }}" class="block py-2 pr-4 pl-3 text-gray-700 dark:text-white hover:text-indigo-500 lg:p-0 transition {{ Route::currentRouteName() === 'contacto' ? 'text-indigo-500 font-bold border-b-2 border-indigo-500' : 'text-gray-700 dark:text-white hover:text-indigo-500' }}">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>


    <!-- Contenido dinámico -->
    <main class="container mx-auto pt-32 px-4">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="bg-gray-800/50 backdrop-blur-md w-full text-white p-4 mt-12">
        <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} Lemon Lab.</p>
        </div>
    </footer>

    <!-- Script partículas -->
    <script>
        window.addEventListener("DOMContentLoaded", () => {
        if (window.particlesJS) {
            particlesJS("particles-js", {
            particles: {
                number: { value: 80 },
                color: { value: "#ffffff" },
                shape: { type: "circle" },
                opacity: { value: 0.5 },
                size: { value: 3 },
                move: {
                enable: true,
                speed: 1,
                direction: "none",
                random: true,
                straight: false,
                out_mode: "out",
                bounce: false,
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" },
                resize: true,
                },
                modes: {
                repulse: { distance: 100, duration: 0.4 },
                push: { particles_nb: 4 },
                },
            },
            retina_detect: true,
            });
        }
        });
    </script>

    <script>
    function copiarCorreo() {
        const correo = "aldorojas401@gmail.com";
        navigator.clipboard.writeText(correo).then(() => {
            alert("Correo copiado al portapapeles: " + correo);
        }).catch(err => {
            console.error("Error al copiar: ", err);
        });
    }
    </script>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
