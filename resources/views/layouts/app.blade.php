<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<script src="//unpkg.com/alpinejs" defer></script>

<main>
    <section class="bg-white dark:bg-gray-900">
    <nav x-data="{ isOpen: false }" class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
        <div>
            <a class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl" href="#">Brand</a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex lg:hidden">
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400" aria-label="toggle menu">
            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>

            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out dark:bg-gray-900 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent">
        <div class="lg:-px-8 flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8" href="#">Home</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8" href="#">Components</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8" href="#">Pricing</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8" href="#">Contact</a>
        </div>

        <a class="mt-4 block rounded-lg bg-blue-600 px-6 py-2.5 text-center font-medium capitalize leading-5 text-white hover:bg-blue-500 lg:mt-0 lg:w-auto" href="#"> Get started </a>
        </div>
    </nav>
    @yield('content')




<footer class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-12">
        <div class="md:-mx-3 md:flex md:items-center md:justify-between">
        <h1 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">Subscribe our newsletter to get update.</h1>

        <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
            <a href="#" class="inline-flex w-full items-center justify-center rounded-lg bg-gray-800 px-4 py-2 text-sm text-white duration-300 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
            <span class="mx-2">Sign Up Now</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
            </a>
        </div>
        </div>

        <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <div>
            <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

            <div class="mt-5 flex flex-col items-start space-y-2">
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Home</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Who We Are</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Our Philosophy</a>
            </div>
        </div>

        <div>
            <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

            <div class="mt-5 flex flex-col items-start space-y-2">
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Retail & E-Commerce</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Information Technology</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Finance & Insurance</a>
            </div>
        </div>

        <div>
            <p class="font-semibold text-gray-800 dark:text-white">Services</p>

            <div class="mt-5 flex flex-col items-start space-y-2">
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Translation</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Proofreading & Editing</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Content Creation</a>
            </div>
        </div>

        <div>
            <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>

            <div class="mt-5 flex flex-col items-start space-y-2">
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">+880 768 473 4978</a>
            <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">info@merakiui.com</a>
            </div>
        </div>
        </div>

        <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

        <div class="flex flex-col items-center justify-between sm:flex-row">
        <a href="#" class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Brand</a>

        <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© Copyright 2021. All Rights Reserved.</p>
        </div>
    </div>
    </footer>




    </main>
</body>
</html>
