<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thariq Kemal - Web Developer Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full text-white">

    <div class="min-h-full">
        <nav x-data="{ open: false }" class="bg-gray-800 fixed w-full z-10 top-0">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#home" class="rounded-md px-3 py-2 text-sm font-medium text-white bg-gray-900">Home</a>
                                <a href="#about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                                <a href="#projects" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                                <a href="#contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button @click="open = !open" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg x-show="!open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="#home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
                    <a href="#about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="#projects" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                    <a href="#contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
            </div>
        </nav>

        <header id="home" class="bg-gray-900 pt-16">
            
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 text-center">
                <img class="w-40 h-40 rounded-full mx-auto mb-6 border-4 border-gray-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Foto Profil Thariq Kemal">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Thariq Kemal</h1>
                <p class="mt-4 text-xl text-gray-300">A Passionate Web Developer from Indonesia</p>
                <a href="#projects" class="mt-8 inline-block rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View My Work</a>
            </div>
        </header>
        
        <main>
            <section id="about" class="bg-gray-800 py-20 sm:py-28">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">About Me</h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Hello! I'm Thariq, a web developer specializing in building exceptional digital experiences. My interest in web development started back in college when I tried to build my first blog — this taught me a lot about HTML & CSS! Fast-forward to today, and I’ve had the privilege of working on various projects, from simple landing pages to complex web applications.
                        </p>
                    </div>

                    <div class="mt-16 text-center">
                        <h3 class="text-2xl font-semibold text-white">My Skills</h3>
                        <div class="mt-8 flex flex-wrap justify-center gap-4">
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">HTML & CSS</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">JavaScript</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">PHP</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">Laravel</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">React</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">Tailwind CSS</span>
                            <span class="rounded-full bg-gray-700 px-4 py-2 text-sm font-medium text-gray-200">MySQL</span>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="bg-gray-900 py-20 sm:py-28">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center mb-16">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">My Projects</h2>
                        <p class="mt-4 text-lg text-gray-300">Here are some of the projects I've worked on. Feel free to explore them.</p>
                    </div>

                    <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3 lg:gap-x-8">
                        <div class="flex flex-col rounded-lg bg-gray-800 shadow-lg overflow-hidden">
                            <div class="shrink-0">
                                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?q=80&w=2070" alt="Project 1 Image">
                            </div>
                            <div class="flex flex-1 flex-col justify-between p-6">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-400">Web Application</p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-white">E-commerce Platform</p>
                                        <p class="mt-3 text-base text-gray-400">A full-featured e-commerce website built with Laravel and React, providing a seamless shopping experience.</p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <a href="#" class="text-indigo-400 hover:text-indigo-300 font-semibold">Live Demo &rarr;</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col rounded-lg bg-gray-800 shadow-lg overflow-hidden">
                             <div class="shrink-0">
                                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072" alt="Project 2 Image">
                            </div>
                            <div class="flex flex-1 flex-col justify-between p-6">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-400">Company Profile</p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-white">Corporate Website</p>
                                        <p class="mt-3 text-base text-gray-400">A modern and responsive corporate website designed to enhance online presence and user engagement.</p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <a href="#" class="text-indigo-400 hover:text-indigo-300 font-semibold">Live Demo &rarr;</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col rounded-lg bg-gray-800 shadow-lg overflow-hidden">
                             <div class="shrink-0">
                                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=2070" alt="Project 3 Image">
                            </div>
                            <div class="flex flex-1 flex-col justify-between p-6">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-400">Portfolio</p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-white">Personal Blog</p>
                                        <p class="mt-3 text-base text-gray-400">A personal blog platform with a custom CMS, built from scratch using PHP and Tailwind CSS.</p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <a href="#" class="text-indigo-400 hover:text-indigo-300 font-semibold">Live Demo &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="contact" class="bg-gray-800 py-20 sm:py-28">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-3xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Get In Touch</h2>
                        <p class="mt-4 text-lg text-gray-300">
                        I'm currently open to new opportunities. If you have a project in mind or just want to say hi, feel free to send me an email. My inbox is always open!
                        </p>
                        <a href="mailto:thariq@com" class="mt-8 inline-block rounded-md bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Say Hello</a>
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="bg-gray-900 border-t border-gray-700">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
                <p class="text-sm text-gray-400">&copy; 2025 Thariq Kemal. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    </div>
            </div>
        </footer>
    </div>
</body>
</html>