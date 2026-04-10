<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - RescueBites</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<body class="bg-gray-50 dark:bg-gray-900">

    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-sm sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3">
                <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white text-green-600">RescueBites</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800">
                    <li><a href="#" class="block py-2 px-3 text-green-600 font-bold" aria-current="page">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-green-600">Donasi</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-green-600">Tentang Kami</a></li>
                    <li><a href="/admin/login" class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-sm px-4 py-2 text-center ml-2">Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-white dark:bg-gray-900 font-bricolage">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Hunian Masa <br>
                    <span> Depan Yang </span>
                    <br> <span>Lestari</span></h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Bergabunglah bersama kami untuk menyalurkan surplus makanan kepada mereka yang membutuhkan. Langkah kecil untuk dampak besar bagi lingkungan.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300">
                    Mulai Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox