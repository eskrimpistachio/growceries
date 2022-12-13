<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <img class="-mt-3" src="img/heroimage.png" alt="missing hero img">
        <div class="container mx-8">
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Sayuran Segar
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/sayur1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/sayur2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/sayur3.png" alt="">
                </a>
                <a href="/kategori/sayur" class="hover:scale-110">
                    <img src="img/sayur4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/sayur5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/sayur6.png" alt="">
                </a>
            </div>
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Buah Segar
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah3.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/buah6.png" alt="">
                </a>
            </div>
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Ayam dan Daging
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam3.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ayam6.png" alt="">
                </a>
            </div>
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Bumbu Dapur & Kue
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu3.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/bumbu6.png" alt="">
                </a>
            </div>
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Susu & Olahan Susu
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu3.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/susu6.png" alt="">
                </a>
            </div>
            <div class="bg-tranparent border-2 mx-auto border-secondary rounded-lg w-64 text-center py-4 font-bold text-lg text-secondary mt-28 mb-8 hover:bg-secondary hover:text-white">
                Makanan Ringan
            </div>
            <div class="flex flex-row my-8">
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan1.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan2.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan3.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan4.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan5.png" alt="">
                </a>
                <a href="/kategori" class="hover:scale-110">
                    <img src="img/ringan6.png" alt="">
                </a>
            </div>
        </div>
        @include('layouts.footer')

    </div>
</body>
