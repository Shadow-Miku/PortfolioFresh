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
  <script src="//unpkg.com/alpinejs" defer></script>


  <!--Scripts -->
  <script src="{{ asset('js/redirigir.js') }}" ></script>

</head>

<body class="bg-gradient-to-br from-gray-900 to-black min-h-screen text-white">

  <!-- Fondo partículas -->
  <div id="particles-js" class="pointer-events-none"></div>

  <!-- Navbar -->
  <nav class="p-6 bg-gray-800/50 backdrop-blur-md fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="text-2xl font-bold text-indigo-500 neon-text">Lemon Lab</a>
      <div class="space-x-6">
        <a href="/" class="text-gray-300 hover:text-indigo-400 transition">About</a>
        <a href="resume" class="text-gray-300 hover:text-indigo-400 transition">Resume</a>
        <a href="portafolio" class="text-gray-300 hover:text-indigo-400 transition">Portfolio</a>
        <a href="contacto" class="text-gray-300 hover:text-indigo-400 transition">Contact</a>
        @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/home') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @endauth
            @endif

      </div>
    </div>
  </nav>

  <!-- Contenido dinámico -->
  <main class="container mx-auto pt-32 px-4">
    @yield('content')
  </main>


  <!-- Footer -->
  <footer class="bg-gray-800/30 backdrop-blur-md w-full text-white py-4 mt-12">
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

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
