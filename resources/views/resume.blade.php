@extends('layouts.portafolio')
@section('title', 'Resume')

@section('content')
<article class="resume py-10 px-4 max-w-5xl mx-auto bg-black bg-opacity-25 shadow-md rounded-lg" data-page="resume">
    <header class="mb-12 text-left">
      <h2 class="text-4xl font-bold text-gray-100">Resume</h2>
    </header>

    <!-- Experiencia Laboral -->
    <section class="mb-16">
        <!-- Título -->
        <div class="flex items-center gap-3 mb-8">
            <svg class="w-8 h-8 text-indigo-400 dark:text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
              </svg>
            <h3 class="text-3xl font-semibold text-indigo-500 dark:text-gray-100">Work Experience</h3>
        </div>
        <!-- Contenido -->
        <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">

            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-indigo-900"></span>
            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">IMT (Instituto Mexicano del Transporte)</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">2023 - 2024</time>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                I worked as part of a development team where I contributed to internal tools for logistics and transport data processing.
            </p>
            </li>

            <!-- Freelancer -->
            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-indigo-900"></span>
            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Freelancer</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">2024 - Present</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400 mb-2">
                I have worked on several freelance projects using different technologies. Some of them include:
            </p>

            <!-- Lista de proyectos freelance -->
            <ul class="list-disc list-inside text-gray-500 dark:text-gray-400 space-y-2">
                <li>
                <span class="font-semibold text-gray-700 dark:text-white">Defective Passport Management System:</span>
                <p class="ml-4">
                    Created with Laravel to manage and document the disposal of defective or invalid passports during the issuance process.
                </p>
                </li>
                <li>
                <span class="font-semibold text-gray-700 dark:text-white">Inventory with Integrated Shopping Cart:</span>
                <p class="ml-4">
                    Built an inventory and shopping system using Laravel, allowing real-time stock tracking and product purchases.
                </p>
                </li>
                <li>
                <span class="font-semibold text-gray-700 dark:text-white">Ticketing and User Support System:</span>
                <p class="ml-4">
                    Developed a Laravel-based support system where users can create tickets and receive help through an internal panel.
                </p>
                </li>
            </ul>
            </li>
        </ol>

    </section>

    <!-- Educación -->
    <section class="mb-16">
        <!-- Título -->
        <div class="flex items-center gap-3 mb-8">
            <svg class="w-8 h-8 text-indigo-400 dark:text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>
            </svg>
            <h3 class="text-3xl font-semibold text-indigo-500 dark:text-gray-100">Education</h3>
        </div>

        <!-- Contenido -->
        <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
            <!-- Grado universitario -->
            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-indigo-950 dark:bg-indigo-900"></span>
            <time class="block mb-1 text-sm font-normal leading-none text-gray-400 dark:text-indigo-300">College Degree</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Engineer in Computer Systems</h3>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                Universidad Politécnica de Querétaro.<br>
                Professional License: 14538243
            </p>
            </li>

            <!-- Cursos especializados -->
            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-indigo-950 dark:bg-indigo-900"></span>
            <time class="block mb-1 text-sm font-normal leading-none text-gray-400 dark:text-indigo-300">Specialized Online Courses</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Udemy, Google</h3>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                Certifications in web development, Laravel, Python, Java, computer vision, UI design, and more.
            </p>
            </li>
        </ol>

    </section>

    <!-- Habilidades -->
    <section>
        <div class="flex items-center gap-3 mb-8">
            <svg class="w-8 h-8 text-indigo-800 dark:text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z"/>
                <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z"/>
              </svg>
            <h3 class="text-3xl font-semibold text-indigo-500 dark:text-gray-100">Skills</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Frontend -->
            <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
            <h5 class="text-xl font-bold text-indigo-300 mb-4">Frontend</h5>
            <ul class="space-y-3">
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">HTML5, CSS3</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">JavaScript</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">TailwindCSS, Bootstrap</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Angular</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">React</span>
                </li>
            </ul>
            </div>

            <!-- Backend -->
            <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
            <h5 class="text-xl font-bold text-indigo-300 mb-4">Backend</h5>
            <ul class="space-y-3">
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">PHP, Laravel</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Python</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Java, Spring Boot</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">SQL, MySQL, SQLite</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Apache</span>
                </li>
            </ul>
            </div>

            <!-- Herramientas -->
            <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
            <h5 class="text-xl font-bold text-indigo-300 mb-4">Tools</h5>
            <ul class="space-y-3">
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Git, GitHub</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">AWS (Amazon Web Services)</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Ubuntu Server</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Oracle Cloud</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">NPM</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Docker</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Terminal</span>
                </li>
                </ul>
            </div>
        </div>
    </section>
</article>
@endsection
