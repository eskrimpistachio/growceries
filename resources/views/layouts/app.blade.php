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

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <img class="-mt-3" src="img/heroimage.png" alt="missing hero img">
        <div class="container mx-8">
            <div>
                <h3 class="font-bold text-3xl my-4">Kategori</h3>
                <div class="flex flex-row">
                    <a href="/kategori"><img class="hover:scale-110 w-3/4" src="img/siapsaji.png" alt=""></a>
                    <a href="/kategori"><img class="hover:scale-110 w-3/4" src="img/olahansusu.png" alt=""></a>
                    <a href="/kategori"><img class="hover:scale-110 w-3/4" src="img/ikanseafood.png" alt=""></a>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-3xl my-4">Temui Growceries di tempatmu</h3>
                <div class="flex flex-row flex-wrap justify-between">
                    <div class="bg-white drop-shadow-lg w-[300px] h-[150px] rounded-md hover:scale-110">
                        <a class="" href="">
                            <img class="mx-auto" src="img/superindo.png" alt="">
                        </a>
                    </div>
                    <div class="bg-white drop-shadow-lg w-[300px] h-[150px] rounded-md hover:scale-110">
                        <a href="">
                            <img class="mt-2 mx-auto" src="img/carrefour.png" alt="">
                        </a>
                    </div>
                    <div class="bg-white drop-shadow-lg w-[300px] h-[150px] rounded-md hover:scale-110">
                        <a href=""><img class="mt-10 mx-auto" src="img/ranch.png" alt=""></a>
                    </div>
                    <div class="bg-white drop-shadow-lg w-[300px] h-[150px] rounded-md hover:scale-110">
                        <a href=""><img class="mt-8 mx-auto" src="img/hero.png" alt=""></a>
                    </div>
                </div>
                {{-- <div>
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div> --}}
            </div>
            <div class="flex flex-row my-8">
                <img src="img/kenapa.png" alt="">
                <div class="mx-2">
                    <h4 class="font-bold text-3xl my-4">Kenapa Growceries?</h4>
                    <p class="text-justify">Growceries merupakan distribusi produk swalayan yang berbasis website di
                        Indonesia. Growceries sudah berdiri selama 10 tahun sejak 2012 yang membuktikan bahwa Growceries
                        berhasil memberikan pelayanan terbaik untuk pengguna kami. Growceries juga akan memberikan
                        eksperien yang baru, dengan keunggulan dalam kecepatan dakn keefesiensian pada pemesanan dan
                        pengiriman. Menggunakan jasa pengiriman terbaik di Indonesia, yangn membuat jaminan produk cepat
                        dan aman sampai tujuan.
                    </p>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.footer')
</body>

</html>
