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
            <a href="#" class="text-white hover:text-darkGrayishBlue">Contact</a>
        </div>
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
                 class="inline-block rounded-2xl border-4 border-amber-100 shadow-lg md:skew-2">
        </div>
        <div class="flex justify-end content-center flex-col space-y-6 md:w-1/2">
            <h1 class="text-amber-50 text-4xl font-bold text-center mb-10 md:text-6xl md:text-left">
                Sedynah RAMANANTSOA
            </h1>

            <p class="text-center text-4xl font-extralight text-gray-400 md:text-left">
                Développeur Web Full Stack
            </p>
            <div class="flex text-center justify-center md:justify-start mt-10">
                <a type="button"
                   class="p-3 px-6 pt-2 text-black font-bold bg-amber-100 rounded-lg baseline hover:bg-amber-200 cursor-pointer">
                    Télécharger mon CV
                </a>
            </div>

        </div>
    </div>
</section>
<section id="experience" class="relative mb-40">
    <h1 class="text-center text-4xl mt-40 font-bold sticky top-0">Expériences
        Professionnelles</h1>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h2 class="text-4xl font-extralight text-center md:text-right">
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
            <h2 class="text-4xl font-extralight text-center md:text-right">
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
            <h2 class="text-4xl font-extralight text-center md:text-right">
                Développeur Web Freelance
            </h2>
            <div class="text-center md:text-right">
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">WordPress</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Prestashop</span>
                <span class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">HTML/CSS</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Shopify</span>
                <span
                    class="border-[#FEF3C6] border-2 text-[#FEF3C6] text-xs font-medium px-1.5 py-0.5 rounded">Laravel</span>
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
            <h2 class="text-4xl font-extralight text-center md:text-right">
                Stagiaire développeur - SLifeTracker
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
<section id="projets">
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
        <h2 class="text-4xl font-bold text-center">Mes projets</h2>
        <p class="text-lg text-center text-gray-500 mt-2">Réalisations sélectionnées</p>
        <div class="flex flex-col mt-15 md:flex-row space-y-6 md:space-y-0 md:space-x-6 border-t-2 pt-15">
            <div
                class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 transform transition duration-300 hover:scale-125">
                <img class="h-48 w-96 object-cover ..." src="{{asset('assets/images/car_rental.png')}}" alt="">
                <a href="#" class="text-lg text-black font-bold">Car Rental</a>
                <div class="text-sm text-darkGrayishBlue">
                    Développement d’une application web de location de véhicules avec système de suivi sur carte.
                    Permet de gérer les réservations et de visualiser la position des véhicules.
                </div>
            </div>
            <div
                class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 transform transition duration-300 hover:scale-125">
                <img class="h-48 w-96 object-cover ..." src="{{asset('assets/images/ar.png')}}" alt="">
                <a href="https://antillesrecrutement.com" target="_blank" class="text-lg text-black font-bold">Antilles
                    Recrutement</a>
                <div class="text-sm text-darkGrayishBlue">
                    Participation à l’amélioration du site Antilles Recrutement Martinique.
                    Ajout de fonctionnalités, correction de bugs et amélioration de l’interface utilisateur.
                </div>
            </div>
            <div
                class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 transform transition duration-300 hover:scale-125">
                <img class="h-48 w-96 object-cover ..." src="{{asset('assets/images/port.png')}}" alt="">
                <a href="{{route('trano')}}" class="text-lg text-black font-bold">Portfolio</a>
                <div class="text-sm text-darkGrayishBlue">
                    Création d’un site web personnel pour présenter mon parcours, mes compétences et mes réalisations.
                    Permet de valoriser mes projets et mon profil professionnel.
                </div>
            </div>

        </div>

    </div>
</section>
<section id="contact">
    <h2 class="text-4xl font-bold text-center mt-30">Contact</h2>
    <div class="container flex flex-col px-4 mx-auto mt-30 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <h1 class="text-center md:text-left text-6xl text-gray-300 font-[100]">Construisons quelque chose ensemble
                <span class="text-center md:text-left font-bold text-6xl leading-tight">
                de Grand et d’Impactant
            </span></h1>
            <p class="text-lg text-center md:text-left text-gray-200 mt-1 max-w-xl">
                Passionné par le développement web, je conçois des solutions modernes, performantes et centrées sur
                l’expérience utilisateur.
            </p>
        </div>
        <div class="flex flex-col space-y-3 md:w-1/2 md:mr-12">
            <form action="#" method="POST" class="flex flex-col space-y-3">
                @csrf
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm/6 font-semibold text-white">Prénom</label>
                        <div class="mt-2.5">
                            <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                                   class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"/>
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm/6 font-semibold text-white">Nom</label>
                        <div class="mt-2.5">
                            <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                                   class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm/6 font-semibold text-white">Email</label>
                        <div class="mt-2.5">
                            <input id="email" type="email" name="email" autocomplete="email"
                                   class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm/6 font-semibold text-white">Message</label>
                        <div class="mt-2.5">
                            <textarea id="message" name="message" rows="4"
                                      class="block w-full rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                            class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
