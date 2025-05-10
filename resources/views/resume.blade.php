@extends('layouts.portafolio')
@section('title', 'Resume')

@section('content')
<article class="resume py-10 px-4 max-w-5xl mx-auto bg-black bg-opacity-40 shadow-md rounded-lg" data-page="resume">
    <header class="mb-8 flex justify-between items-center">
      <h2 class="text-4xl font-bold text-gray-100">Resume</h2>
      <a href="{{ asset('CV_AldoRojasNieves.pdf') }}"
        download
        class="inline-flex items-center gap-2 px-3 py-1 ml-3 text-sm bg-green-600 text-white rounded hover:bg-green-700 transition-all duration-300 shadow-lg"
        title="Download CV">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="font-medium">Download CV</span>
    </a>
    </header>

    <!-- Experiencia Laboral -->
    <section class="mb-16">
        <!-- Título -->
        <div class="flex items-center gap-3 mb-8">
            <svg class="w-8 h-8 text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
              </svg>
            <h3 class="text-3xl font-semibold text-gray-100">Work Experience</h3>
        </div>
        <!-- Contenido -->
        <ol class="relative border-s border-gray-200 ms-3">

            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-gray-900 bg-indigo-900"></span>
            <h3 class="flex items-center mb-1 text-lg font-semibold text-white">IMT (Instituto Mexicano del Transporte)</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-500">2023 - 2024</time>
            <span class="text-base font-semibold text-white">
                Web Capture System
            </span>
            <p class="mb-4 text-base font-normal text-gray-400 ml-4">
                - Developed a web-based platform to manage researcher activities, improving efficiency and productivity.

                <br>- Led the full project lifecycle, from planning to deployment, ensuring collaboration and effective stakeholder communication.

                <br>- Implemented secure authentication and server configurations for data protection.

                <br>- Optimized performance for scalability and responsiveness.

                <br>- Utilized Laravel, PHP, SQL, MySQL, JavaScript, and Bootstrap.

                <br>- Managed version control and collaboration via Git and GitHub.

                <br>- Maintained comprehensive documentation for clarity and organization.
            </p>
            </li>

            <!-- Freelancer -->
            <li class="mb-10 ms-6">
            <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8ring-gray-900 bg-indigo-900"></span>
            <h3 class="mb-1 text-lg font-semibold text-white">Freelancer</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-500">2024 - Present</time>
            <p class="text-base font-normal text-gray-400 mb-2">
                I have worked on several freelance projects using different technologies. Some of them include:
            </p>

            <!-- Lista de proyectos freelance -->
            <ul class="list-disc list-inside text-gray-400 space-y-2">
                <li>
                <span class="font-semibold text-white">Defective Passport Management System:</span>
                <p class="ml-6">
                    - Developed a system for defective passport registration and control at the request of an employee from the Delegación de la Secretaría de Relaciones Exteriores en Querétaro.

                    <br>- Integrated image capture, defect logging, and centralized record display.

                    <br>- Optimized system performance for efficiency and scalability.

                    <br>- Built with Laravel, PHP, MySQL, JavaScript, and Bootstrap.
                </p>
                </li>
                <li>
                <span class="font-semibold text-white">Inventory with Integrated Shopping Cart:</span>
                <p class="ml-6">
                    - Developed a solution for inventory control and sales transactions.

                    <br>- Enabled product addition, quantity adjustments, price updates, and PDF generation.

                    <br>- Focused on user experience for intuitive navigation and seamless interactions.

                    <br>- Deployed and configured the system on AWS using Ubuntu for cloud-based accessibility and reliability.

                    <br>- Leveraged Laravel, PHP, JavaScript, and Bootstrap.
                </p>
                </li>
                <li>
                <span class="font-semibold text-white">Ticketing and User Support System:</span>
                <p class="ml-6">
                    - Created a ticket-based support platform with real-time chat and assignment tracking.

                    <br>- Implemented ticket status management and modal-based visualization.

                    <br>- Designed with user experience in mind for streamlined interactions.

                    <br>- Built using Laravel, PHP, MySQL, JavaScript, and Bootstrap.
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
            <svg class="w-8 h-8 text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>
            </svg>
            <h3 class="text-3xl font-semibold text-gray-100">Education</h3>
        </div>

        <!-- Contenido -->
        <ol class="relative border-s border-gray-700 ms-3">
            <!-- Grado universitario -->
            <li class="mb-10 ms-6">
                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-indigo-950 bg-indigo-900"></span>
                <time class="block mb-1 text-sm font-normal leading-none text-indigo-300">College Degree</time>
                <h3 class="text-lg font-semibold text-white">Engineer in Computer Systems</h3>
                <p class="mb-4 ml-1 text-base font-semibold text-gray-400">
                    Universidad Politécnica de Querétaro.<br>
                    Professional License: 14538243
                </p>
            </li>

            <li class="mb-10 ms-6">
                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-indigo-950 bg-indigo-900"></span>
                <time class="block mb-1 text-sm font-normal leading-none text-indigo-300">Certification</time>
                <h3 class="text-lg font-semibold text-white">TOEFL - C1 English Proficiency</h3>
                <p class="mb-4 ml-1 text-base font-semibold text-gray-400">
                    Demonstrated advanced English proficiency (C1 level) in the TOEFL exam.
                </p>
            </li>

            <!-- Cursos especializados -->
            <li class="mb-10 ms-6">
                <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-indigo-950 bg-indigo-900"></span>
                <time class="block mb-1 text-sm font-normal leading-none text-indigo-300">Specialized Online Courses</time>
                <h3 class="text-lg font-semibold text-white">Udemy, Google</h3>
                <p class="text-base ml-1 font-semibold text-gray-400">
                    Certifications in web development, Laravel, Python, Java, computer vision, UI design, and more.
                </p>
            </li>
        </ol>

    </section>

    <!-- Habilidades -->
    <section>
        <div class="flex items-center gap-3 mb-8">
            <svg class="w-8 h-8 text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z"/>
                <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z"/>
              </svg>
            <h3 class="text-3xl font-semibold text-gray-100">Skills</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Frontend -->
            <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg">
            <h5 class="text-xl font-bold text-indigo-300 mb-4">Frontend</h5>
            <ul class="space-y-3">
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">HTML5</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">TailwindCSS</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">CSS3</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">JavaScript</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300"> Bootstrap</span>
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
                    <span class="text-gray-300">Laravel</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Python</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">Java</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">PHP</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Spring Boot</span>
                </li>
                <li class="flex items-center">
                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                <span class="text-gray-300">SQL</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">MySQL</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">SQLite</span>
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
                    <span class="text-gray-300">Visual Studio Code</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">IntelliJ IDEA</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Postman</span>
                </li>
                <li class="flex items-center">
                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                    <span class="text-gray-300">Netlify</span>
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
