@extends('layouts.portafolio')

@section('title', 'About Me')

@section('content')
  <!-- Sección Sobre Mí -->
<section class="container mx-auto py-15 px-4">
    <div class="flex flex-col md:flex-row items-center gap-12">
        <!-- Columna Izquierda -->
        <div class="w-full md:w-1/3 text-center">
            <img src="{{ asset('img/angelinaarknigths.gif') }}" alt="Tu nombre" class="rounded-full w-64 h-64 object-cover mx-auto mb-6 border-4 border-indigo-500/50">
            <h2 class="text-3xl font-bold text-white mb-2">Aldo Rojas Nieves</h2>
            <p class="text-xl text-indigo-400 mb-6">Jr Developer</p>

            <!-- Iconos Redes -->
            <div class="flex justify-center space-x-6 mb-8">
                <a href="https://github.com/Shadow-Miku" target="_blank" class="text-gray-400 hover:text-indigo-400 transition-transform transform hover:scale-110" title="GitHub">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.6.113.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.655 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>

                <a href="www.linkedin.com/in/aldo-rojas-nieves-9424b8280" target="_blank" class="text-gray-400 hover:text-blue-400 transition-transform transform hover:scale-110" title="Linkedin">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>

                <a href="{{ asset('CV_AldoRojasNieves_Abril2025.pdf') }}" download class="text-gray-400 hover:text-green-400 transition-transform transform hover:scale-110" title="Download CV">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </a>

                <a title="aldorojas401@gmail.com" class="text-gray-400 hover:text-red-400 transition-transform transform hover:scale-110" onclick="copiarCorreo()">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: currentColor;">
                        <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path>
                    </svg>
                </a>

            </div>
        </div>

        <!-- Columna Derecha -->
        <div class="w-full md:w-2/3 bg-black bg-opacity-30 shadow-md rounded-lg p-6">
            <div class="flex items-center gap-3 mb-8">
                <svg class="w-8 h-8 text-gray-800 dark:text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                </svg>
                <h3 class="text-3xl font-semibold text-indigo-500 dark:text-gray-100">About Me</h3>
            </div>

            <section class="about-text ms-2">
                <p class="text-gray-300 mb-8">
                  Greetings! My name is Aldo Rojas Nieves, and I am a passionate
                  Jr. Developer with a strong commitment to continuous learning and improvement.
                  I am always eager to explore new technologies, solutions, and apply them to both
                  new and existing projects. This approach allows me to improve
                  and optimise my work over time, ensuring innovative and
                  innovative and effective results.
                </p>

                <p class="text-gray-400 mb-8">
                  My objective is to create products that combine seamless functionality with
                  compelling design while ensuring ease of use is my main objective. My aim is to
                  contribute to organizational growth by developing innovative
                  solutions that boost efficiency and productivity.
                </p>

                <p class="text-gray-300">
                  Feel free to explore my work on
                  <a
                    href="https://github.com/Shadow-Miku"
                    class="about-link-github"
                    target="_blank"
                    >GitHub</a
                  >
                  to learn more about my projects and technical skills.
                </p>
              </section>

            <!-- Tecnologías -->
            <div class="flex items-center gap-3 mt-8 mb-8">
                <svg class="w-8 h-8 text-gray-800 dark:text-indigo-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 5.78571C4 4.80909 4.78639 4 5.77778 4H18.2222C19.2136 4 20 4.80909 20 5.78571V15H4V5.78571ZM12 12c0-.5523.4477-1 1-1h2c.5523 0 1 .4477 1 1s-.4477 1-1 1h-2c-.5523 0-1-.4477-1-1ZM8.27586 6.31035c.38089-.39993 1.01387-.41537 1.4138-.03449l2.62504 2.5c.1981.18875.3103.45047.3103.72414 0 .27368-.1122.5354-.3103.7241l-2.62504 2.5c-.39993.3809-1.03291.3655-1.4138-.0344-.38088-.4-.36544-1.033.03449-1.4138L10.175 9.5 8.31035 7.72414c-.39993-.38089-.41537-1.01386-.03449-1.41379Z" clip-rule="evenodd"/>
                    <path d="M2 17v1c0 1.1046.89543 2 2 2h16c1.1046 0 2-.8954 2-2v-1H2Z"/>
                </svg>
                <h3 class="text-3xl font-semibold text-indigo-500 dark:text-gray-100">Technology Stack</h3>
            </div>


            <section class="about-text mb-8">
                <p class="text-gray-300 mb-8 ms-2">
                  During the creation of new projects i have learned new things that i have commited to learn and implement on my stack, these are the following:
                </p>
            </section>

            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-2">

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-green-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: currentColor; transform: ;msFilter:;"> <!-- Iconos en formato SVG / JSX -->
                        <path d="M9.585 11.692h4.328s2.432.039 2.432-2.35V5.391S16.714 3 11.936 3C7.362 3 7.647 4.983 7.647 4.983l.006 2.055h4.363v.617H5.92s-2.927-.332-2.927 4.282 2.555 4.45 2.555 4.45h1.524v-2.141s-.083-2.554 2.513-2.554zm-.056-5.74a.784.784 0 1 1 0-1.57.784.784 0 1 1 0 1.57z"></path><path d="M18.452 7.532h-1.524v2.141s.083 2.554-2.513 2.554h-4.328s-2.432-.04-2.432 2.35v3.951s-.369 2.391 4.409 2.391c4.573 0 4.288-1.983 4.288-1.983l-.006-2.054h-4.363v-.617h6.097s2.927.332 2.927-4.282-2.555-4.451-2.555-4.451zm-3.981 10.436a.784.784 0 1 1 0 1.57.784.784 0 1 1 0-1.57z"></path>
                    </svg>
                    <span class="text-sm">Python</span>
                </div>

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-blue-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill:currentColor; transform: ;msFilter:;">
                        <circle cx="12" cy="11.245" r="1.785"></circle>
                        <path d="m7.002 14.794-.395-.101c-2.934-.741-4.617-2.001-4.617-3.452 0-1.452 1.684-2.711 4.617-3.452l.395-.1.111.391a19.507 19.507 0 0 0 1.136 2.983l.085.178-.085.178c-.46.963-.841 1.961-1.136 2.985l-.111.39zm-.577-6.095c-2.229.628-3.598 1.586-3.598 2.542 0 .954 1.368 1.913 3.598 2.54.273-.868.603-1.717.985-2.54a20.356 20.356 0 0 1-.985-2.542zm10.572 6.095-.11-.392a19.628 19.628 0 0 0-1.137-2.984l-.085-.177.085-.179c.46-.961.839-1.96 1.137-2.984l.11-.39.395.1c2.935.741 4.617 2 4.617 3.453 0 1.452-1.683 2.711-4.617 3.452l-.395.101zm-.41-3.553c.4.866.733 1.718.987 2.54 2.23-.627 3.599-1.586 3.599-2.54 0-.956-1.368-1.913-3.599-2.542a20.683 20.683 0 0 1-.987 2.542z"></path><path d="m6.419 8.695-.11-.39c-.826-2.908-.576-4.991.687-5.717 1.235-.715 3.222.13 5.303 2.265l.284.292-.284.291a19.718 19.718 0 0 0-2.02 2.474l-.113.162-.196.016a19.646 19.646 0 0 0-3.157.509l-.394.098zm1.582-5.529c-.224 0-.422.049-.589.145-.828.477-.974 2.138-.404 4.38.891-.197 1.79-.338 2.696-.417a21.058 21.058 0 0 1 1.713-2.123c-1.303-1.267-2.533-1.985-3.416-1.985zm7.997 16.984c-1.188 0-2.714-.896-4.298-2.522l-.283-.291.283-.29a19.827 19.827 0 0 0 2.021-2.477l.112-.16.194-.019a19.473 19.473 0 0 0 3.158-.507l.395-.1.111.391c.822 2.906.573 4.992-.688 5.718a1.978 1.978 0 0 1-1.005.257zm-3.415-2.82c1.302 1.267 2.533 1.986 3.415 1.986.225 0 .423-.05.589-.145.829-.478.976-2.142.404-4.384-.89.198-1.79.34-2.698.419a20.526 20.526 0 0 1-1.71 2.124z"></path>
                        <path d="m17.58 8.695-.395-.099a19.477 19.477 0 0 0-3.158-.509l-.194-.017-.112-.162A19.551 19.551 0 0 0 11.7 5.434l-.283-.291.283-.29c2.08-2.134 4.066-2.979 5.303-2.265 1.262.727 1.513 2.81.688 5.717l-.111.39zm-3.287-1.421c.954.085 1.858.228 2.698.417.571-2.242.425-3.903-.404-4.381-.824-.477-2.375.253-4.004 1.841.616.67 1.188 1.378 1.71 2.123zM8.001 20.15a1.983 1.983 0 0 1-1.005-.257c-1.263-.726-1.513-2.811-.688-5.718l.108-.391.395.1c.964.243 2.026.414 3.158.507l.194.019.113.16c.604.878 1.28 1.707 2.02 2.477l.284.29-.284.291c-1.583 1.627-3.109 2.522-4.295 2.522zm-.993-5.362c-.57 2.242-.424 3.906.404 4.384.825.47 2.371-.255 4.005-1.842a21.17 21.17 0 0 1-1.713-2.123 20.692 20.692 0 0 1-2.696-.419z"></path><path d="M12 15.313c-.687 0-1.392-.029-2.1-.088l-.196-.017-.113-.162a25.697 25.697 0 0 1-1.126-1.769 26.028 26.028 0 0 1-.971-1.859l-.084-.177.084-.179c.299-.632.622-1.252.971-1.858.347-.596.726-1.192 1.126-1.77l.113-.16.196-.018a25.148 25.148 0 0 1 4.198 0l.194.019.113.16a25.136 25.136 0 0 1 2.1 3.628l.083.179-.083.177a24.742 24.742 0 0 1-2.1 3.628l-.113.162-.194.017c-.706.057-1.412.087-2.098.087zm-1.834-.904c1.235.093 2.433.093 3.667 0a24.469 24.469 0 0 0 1.832-3.168 23.916 23.916 0 0 0-1.832-3.168 23.877 23.877 0 0 0-3.667 0 23.743 23.743 0 0 0-1.832 3.168 24.82 24.82 0 0 0 1.832 3.168z"></path>
                    </svg>
                    <span class="text-sm">React</span>
                </div>

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-cyan-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: currentColor; transform: ;msFilter:;">
                        <path d="M18.5 9.51a4.22 4.22 0 0 1-1.91-1.34A5.77 5.77 0 0 0 12 6a4.72 4.72 0 0 0-5 4 3.23 3.23 0 0 1 3.5-1.49 4.32 4.32 0 0 1 1.91 1.35A5.77 5.77 0 0 0 17 12a4.72 4.72 0 0 0 5-4 3.2 3.2 0 0 1-3.5 1.51zm-13 4.98a4.22 4.22 0 0 1 1.91 1.34A5.77 5.77 0 0 0 12 18a4.72 4.72 0 0 0 5-4 3.23 3.23 0 0 1-3.5 1.49 4.32 4.32 0 0 1-1.91-1.35A5.8 5.8 0 0 0 7 12a4.72 4.72 0 0 0-5 4 3.2 3.2 0 0 1 3.5-1.51z"></path>
                    </svg>
                    <span class="text-sm">Tailwind</span>
                </div>

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-purple-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: currentColor; transform: ;msFilter:;">
                        <path d="M2.15 16.78h1.57a.14.14 0 0 0 .14-.12l.35-1.82h1.22a4.88 4.88 0 0 0 1.51-.2A2.79 2.79 0 0 0 8 14a3.18 3.18 0 0 0 .67-.85 3.43 3.43 0 0 0 .36-1 2.43 2.43 0 0 0-.41-2.16 2.64 2.64 0 0 0-2.09-.78h-3a.16.16 0 0 0-.15.13L2 16.6a.19.19 0 0 0 0 .13.17.17 0 0 0 .15.05zM5 10.62h1a1.45 1.45 0 0 1 1.08.29c.17.18.2.52.11 1a1.81 1.81 0 0 1-.57 1.12 2.17 2.17 0 0 1-1.33.33h-.8zm9.8-.95a2.7 2.7 0 0 0-1.88-.51h-1.19l.33-1.76a.15.15 0 0 0 0-.13.16.16 0 0 0-.11 0h-1.57a.14.14 0 0 0-.14.12l-1.38 7.27a.13.13 0 0 0 0 .12.13.13 0 0 0 .11.06h1.54a.14.14 0 0 0 .14-.13l.77-4.07h1.11c.45 0 .61.1.66.16a.81.81 0 0 1 0 .62l-.61 3.24a.13.13 0 0 0 0 .12.14.14 0 0 0 .11.06h1.56a.16.16 0 0 0 .15-.13l.64-3.4a1.7 1.7 0 0 0-.24-1.64zm4.52-.51h-3.13a.14.14 0 0 0-.15.13l-1.46 7.31a.16.16 0 0 0 0 .13.14.14 0 0 0 .11.05h1.63a.14.14 0 0 0 .15-.12l.37-1.82h1.27a5.28 5.28 0 0 0 1.56-.2 3 3 0 0 0 1.18-.64 3.31 3.31 0 0 0 .7-.85 3.45 3.45 0 0 0 .37-1 2.38 2.38 0 0 0-.42-2.16 2.81 2.81 0 0 0-2.18-.83zm.62 2.77a1.83 1.83 0 0 1-.6 1.12 2.28 2.28 0 0 1-1.37.33h-.8l.54-2.76h1a1.6 1.6 0 0 1 1.13.29c.16.18.16.52.1 1.02z"></path>
                    </svg>
                    <span class="text-sm">PHP</span>
                </div>

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-red-400 transition-colors">
                    <svg className=" text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" strokeLinejoin="round" d="m17 13 3.4641-2V7L17 5l-3.4641 2v4M17 13l-3.4641-2M17 13v4l-7.00001 4M17 13V9m0 4-7.00001 4m3.53591-6L10.5 12.7348M9.99999 21l-3.4641-2.1318M9.99999 21v-4m-3.4641 2v-.1318m0 0V15L10.5 12.7348m-3.96411 6.1334L3.5 17V5m0 0L7 3l3.5 2m-7 0 2.99999 2M10.5 5v7.7348M10.5 5 6.49999 7M17 9l3.5-2M17 9l-3.5-2M9.99999 17l-3.5-2m0 .5V7"/>
                    </svg>
                    <span class="text-sm">Laravel</span>
                </div>

                <div class="skill-item group flex flex-col items-center text-gray-400 hover:text-purple-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 22">
                        <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z"/>
                        <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3z"/>
                      </svg>
                    <span class="text-sm">Bootstrap</span>
                </div>

                <!-- Div final de skills -->
            </div>
        <!-- Div final de columna derecha -->
        </div>
</section>
@endsection
