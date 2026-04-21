<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>
        {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body>
<nav class="relative container mx-auto p-6 bg">
    <div class="flex items-center justify-between">
        <div class="pt-2">
            <h1 class="text-white text-2xl">S <span class="text-gray-400">D</span></h1>
        </div>
        <div class="hidden md:flex space-x-12">
            <a href="#" class="text-white hover:text-darkGrayishBlue">Expériences</a>
            <a href="#" class="text-white hover:text-darkGrayishBlue">Projets</a>
            <a href="#" class="text-white hover:text-darkGrayishBlue">Services</a>
        </div>
        <a class="hidden md:block p-3 px-6 pt-2 bg-white text-[#19374F] rounded-full baseline hover:bg-gray-300 cursor-pointer">
            Contact Me
        </a>
    </div>
    <div aria-hidden="true"
         class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#CD8E65] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
    </div>
</nav>
<section id="hero">
    <div
        class="container flex flex-col justify-between md:flex-row items-center px-6 mx-auto mt-10 space-y-12 md:space-y-0">
        <div class="flex justify-center md:w-1/2">
            <img src="{{asset('assets/images/profil.png')}}" alt="profile" width="400"
                 class="inline-block rounded-2xl border-4 border-amber-100 shadow-lg skew-2">
        </div>
        <div class="flex justify-end content-center flex-col md:w-1/2">
            <h1 class="text-amber-50 text-4xl font-bold text-center mb-10 md:text-6xl md:text-left">
                Développeur Web Full Stack
            </h1>
            <p class=" text-center text-[25px] text-darkGrayishBlue md:text-left">
                Développeur web full stack, spécialisé en PHP (Laravel) et JavaScript, je développe des applications web
                et des API robustes. J’accompagne aussi les projets dans l’intégration, l’optimisation des performances
                et l’amélioration de l’expérience utilisateur.
            </p>
        </div>
    </div>
</section>
<section id="experience" class="mb-40">
    <h1 class="text-center text-4xl mt-40 font-bold text-amber-100 underline opacity-20">Expériences
        Professionnelles</h1>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h2 class="text-4xl font-bold text-center md:text-right">
                Développeur Laravel Freelance
            </h2>
            <div class="text-center md:text-right">
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">MySql</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Laravel</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Javascript</span>
            </div>
            <p class="text-center text-darkGrayishBlue md:text-right">
                Septembre 2025 – Décembre 2025
            </p>
        </div>
        <div class="flex flex-col space-y-8 md:w-1/2">
            <ul class="space-y-4 text-left text-body">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Développement et amélioration d’applications web avec Laravel</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6  text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Création et gestion d’API REST pour application mobile</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Intégration avec Odoo et gestion des données</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Optimisation des performances et correction de bugs</span>
                </li>
            </ul>

        </div>
    </div>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h2 class="text-4xl font-bold text-center md:text-right">
                Développeur Laravel – COPILOTAS
            </h2>
            <div class="text-center md:text-right">
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">MySql</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Laravel</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Javascript</span>
            </div>
            <p class="text-center text-darkGrayishBlue md:text-right">
                Avril 2025 – Août 2025
            </p>
        </div>
        <div class="flex flex-col space-y-8 md:w-1/2">
            <ul class="space-y-4 text-left text-body">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Développement de fonctionnalités sur une plateforme de recrutement</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6  text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Maintenance, correction de bugs et amélioration des performances</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Gestion et structuration des données</span>
                </li>
            </ul>

        </div>
    </div>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h2 class="text-4xl font-bold text-center md:text-right">
                Développeur Web Freelance
            </h2>
            <div class="text-center md:text-right">
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">WordPress</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Prestashop</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">HTML/CSS</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Shopify</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Laravel</span>
            </div>
            <p class="text-center text-darkGrayishBlue md:text-right">
                Novembre 2023 – Mars 2025
            </p>
        </div>
        <div class="flex flex-col space-y-8 md:w-1/2">
            <ul class="space-y-4 text-left text-body">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Création et refonte de sites web avec WordPress et PrestaShop</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6  text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Intégration de maquettes en HTML/CSS (Figma)</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Maintenance de sites (mises à jour, bugs, performance)</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Optimisation SEO et amélioration de l’expérience utilisateur</span>
                </li>
            </ul>

        </div>
    </div>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h2 class="text-4xl font-bold text-center md:text-right">
                STAGIAIRE DÉVELOPPEUR - SLifeTracker
            </h2>
            <div class="text-center md:text-right">
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Node.js</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Express.js</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">MongoDB</span>
            </div>
            <p class="text-center text-darkGrayishBlue md:text-right">
                Septembre 2023 – Novembre 2023
            </p>
        </div>
        <div class="flex flex-col space-y-8 md:w-1/2">
            <ul class="space-y-4 text-left text-body">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Développement et maintenance des sites web, en se concentrant sur le côté backend.</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6  text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Utilisation de Node.js et Express.js pour la création et l’optimisation d'applications web.</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-6 h-6 text-amber-50 shrink-0 me-1.5" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="text-[20px]">Conception d'API, gestion des bases de
données et amélioration des performances
des sites existants.</span>
                </li>

            </ul>

        </div>
    </div>

</section>
</body>
</html>
