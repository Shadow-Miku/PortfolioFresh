@extends('layouts.portafolio')
@section('title', 'Resume')

@section('content')
<article class="resume py-10 px-4 max-w-5xl mx-auto bg-black bg-opacity-25 shadow-md rounded-lg" data-page="resume">
    <header class="mb-12 text-left">
      <h2 class="text-4xl font-bold text-gray-100">Resume</h2>
    </header>

    <!-- Experiencia Laboral -->
    <section class="mb-16">
      <h3 class="text-3xl font-semibold text-indigo-400 mb-8">Experiencia Laboral</h3>
      <div class="relative">
        <!-- Timeline line -->
        <div class="absolute left-5 top-0 w-0.5 h-full bg-indigo-300 transform -translate-x-1/2"></div>

        <!-- Items -->
        <div class="space-y-12">
          <!-- Item 1 -->
          <div class="relative pl-16">
            <div class="absolute left-5 top-4 w-4 h-4 bg-indigo-600 rounded-full transform -translate-x-1/2"></div>
            <div class="space-y-4">
              <h4 class="text-xl font-semibold text-gray-100">Web Capture System (IMT)</h4>
              <span class="block text-sm text-indigo-300">2022 - 2023</span>
              <ul class="text-gray-300 space-y-3 list-disc list-inside">
                <li>Development and implementation: Creation of a web capture system to manage researcher activities</li>
                <li>Technologies used: Laravel, PHP, SQL, MySQL, JavaScript, Bootstrap</li>
                <li>Features: Increased efficiency and productivity through an accessible platform</li>
                <li>Project management: Supervision of complete project cycle</li>
                <li>Security: Server configuration with secure authentication</li>
                <li>Version control: Git and GitHub for team collaboration</li>
                <li>Documentation: Complete project documentation</li>
                <li>Testing: Manual and automated testing</li>
                <li>Deployment: Successfully deployed on live server</li>
                <li>Support: Ongoing maintenance and support</li>
              </ul>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="relative pl-16">
            <div class="absolute left-5 top-4 w-4 h-4 bg-indigo-600 rounded-full transform -translate-x-1/2"></div>
            <div class="space-y-4">
              <h4 class="text-xl font-semibold text-gray-100">Desarrollador Web Freelance</h4>
              <span class="block text-sm text-indigo-300">2023 - Actualidad</span>
              <p class="text-gray-300">Desarrollo de sitios web y aplicaciones a medida para clientes de diversos sectores, implementación de soluciones en Laravel, JavaScript, Python, HTML5 y CSS3.</p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="relative pl-16">
            <div class="absolute left-5 top-4 w-4 h-4 bg-indigo-600 rounded-full transform -translate-x-1/2"></div>
            <div class="space-y-4">
              <h4 class="text-xl font-semibold text-gray-100">Proyecto de Gestión de Pasaportes</h4>
              <span class="block text-sm text-indigo-300">2023</span>
              <p class="text-gray-300">Sistema para control de pasaportes defectuosos durante pasantía en dependencia gubernamental de Querétaro. Integración de base de datos, captura de imágenes y reportes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Educación -->
    <section class="mb-16">
      <h3 class="text-3xl font-semibold text-indigo-400 mb-8">Educación</h3>
      <div class="relative">
        <div class="absolute left-5 top-0 w-0.5 h-full bg-indigo-300 transform -translate-x-1/2"></div>

        <div class="space-y-12">
          <!-- Item 1 -->
          <div class="relative pl-16">
            <div class="absolute left-5 top-4 w-4 h-4 bg-indigo-600 rounded-full transform -translate-x-1/2"></div>
            <div class="space-y-4">
              <h4 class="text-xl font-semibold text-gray-100">Licenciatura en Informática</h4>
              <span class="block text-sm text-indigo-300">Universidad XYZ - En curso</span>
              <p class="text-gray-300">Formación en desarrollo de software, bases de datos, redes, inteligencia artificial y gestión de proyectos.</p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="relative pl-16">
            <div class="absolute left-5 top-4 w-4 h-4 bg-indigo-600 rounded-full transform -translate-x-1/2"></div>
            <div class="space-y-4">
              <h4 class="text-xl font-semibold text-gray-100">Cursos Online Especializados</h4>
              <span class="block text-sm text-indigo-300">Udemy, Platzi, 2021 - 2024</span>
              <p class="text-gray-300">Certificaciones en desarrollo web, Laravel, Vue.js, visión por computadora y diseño de interfaces.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Habilidades -->
    <section>
      <h3 class="text-3xl font-semibold text-indigo-400 mb-8">Habilidades</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Frontend -->
        <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
          <h5 class="text-xl font-bold text-indigo-300 mb-4">Frontend</h5>
          <ul class="space-y-3">
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">HTML5, CSS3 (Avanzado)</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">JavaScript (Intermedio)</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">TailwindCSS, Bootstrap</span>
            </li>
          </ul>
        </div>

        <!-- Backend -->
        <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
          <h5 class="text-xl font-bold text-indigo-300 mb-4">Backend</h5>
          <ul class="space-y-3">
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">PHP, Laravel (Intermedio)</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">Python (Básico - Intermedio)</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">SQL, MySQL</span>
            </li>
          </ul>
        </div>

        <!-- Herramientas -->
        <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
          <h5 class="text-xl font-bold text-indigo-300 mb-4">Herramientas</h5>
          <ul class="space-y-3">
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">Git, GitHub</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">Docker</span>
            </li>
            <li class="flex items-center">
              <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
              <span class="text-gray-300">Figma</span>
            </li>
          </ul>
        </div>

      </div>
    </section>

  </article>
@endsection
