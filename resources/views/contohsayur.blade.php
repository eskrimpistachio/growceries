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
    <div>
        <nav x-data="{ open: false }" class="bg-tertiary border-b border-gray-100 ">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-2">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <img class="w-3/4" src="../img/growceries logo.png" alt="MISSING">
                            </a>
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-white focus:outline-none transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex flex-col m-8">
            <div class="flex flex-row">
                <img class="w-1/3" src="/img/kubisungu.png" alt="">
                <div class="mx-8 justify-between flex flex-col gap-8">
                    <h1 class="font-semibold text-4xl">Sayuran Kubis Ungu</h1>
                    <div class="flex flex-row text-lg justify-between">
                        <h4 class="font-semibold">4.8</h4>
                        <img class="h-3/4" src="/img/bintang.png" alt="">
                        <h6>127 Terjual</h6>
                        <h6>Kota Malang</h6>
                    </div>
                    <div
                        class="rounded-lg border-2 border-gray-300 shadow-md font-semibold text-3xl text-primary py-4 px-4">
                        <h1>Rp 4.000 - Rp 15.700</h1>
                    </div>
                    <div class="flex flex-row justify-between gap-6">
                        <div>
                            <h6 class="font-semibold">Pilih Variasi</h6>
                            <div class="flex flex-row justify-between gap-4">
                                <div
                                    class="rounded-xl border-2 border-gray-600 px-4 hover:bg-gray-600 hover:text-white">
                                    <p>250 gr</p>
                                </div>
                                <div
                                    class="rounded-xl border-2 border-gray-600 px-4 hover:bg-gray-600 hover:text-white">
                                    <p>800 gr</p>
                                </div>
                                <div
                                    class="rounded-xl border-2 border-gray-600 px-4 hover:bg-gray-600 hover:text-white">
                                    <p>1 kg</p>
                                </div>
                            </div>
                        </div>
                        <div class="font-semibold">
                            <h6>Kuantitas</h6>
                            <img class="w-1/2" src="/img/adder.png" alt="">
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a class="bg-primary text-black py-3 px-8 text-lg font-semibold hover:border-primary hover:bg-transparent hover:border-2 hover:text-primary"
                            href="/belisekarang">Beli Sekarang</a>
                        <a class="hover:bg-primary hover:text-white text-primary border-2 border-primary py-3 px-8 text-lg font-semibold"
                            href="/kategori/sayur">Masukan Keranjang</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-16 gap-8">
                <div class="flex flex-row">
                    <h4 class="text-2xl font-semibold">Penilaian Produk</h4>
                    <div class="flex flex-row ml-auto gap-4">
                        <h4 class="font-bold text-xl">4.8</h4>
                        <img class="h-3/4 " src="/img/bintang.png" alt="">
                        <h6 class="text-sm font-semibold">(127)</h6>
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="rounded-lg border-2 border-grey-400 h-48 w-96 py-4 px-4 flex flex-col gap-4">
                        <div class="flex flex-row gap-2">
                            <h6 class="text-xl">Tasya</h6>
                            <img class="h-3/4" src="/img/bintang.png" alt="">
                        </div>
                        <p class="text-sm">Produk segar, pelayanannya juga cepat. Bakal repeat order.</p>
                    </div>
                    <div class="rounded-lg border-2 border-grey-400 h-48 w-96 py-4 px-4 flex flex-col gap-4">
                        <div class="flex flex-row gap-2">
                            <h6 class="text-xl">Nalendra</h6>
                            <img class="h-3/4" src="/img/bintang.png" alt="">
                        </div>
                        <p class="text-sm">Gak berharap banyak buat produk dari Growceries. Dikirain bakal gak se fresh
                            dibandingkan kalo beli langsung ya. Tapi so far, more then I expected. Ya walaupun agak lama
                            pengirimannya. But, ok.</p>
                    </div>
                    <div class="rounded-lg border-2 border-grey-400 h-48 w-96 py-4 px-4 flex flex-col gap-4">
                        <div class="flex flex-row gap-2">
                            <h6 class="text-xl">Salma</h6>
                            <img class="h-3/4" src="/img/bintang.png" alt="">
                        </div>
                        <p class="text-sm">Udah order berkali-kali di sini kalau lagi ga sempet ke supermarket karena
                            sibuk kuliah. The best dehhh superindo.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-8 gap-4">
                <h4 class="text-2xl font-semibold">Produk lain yang serupa</h4>
                <div class="flex flex-row my-8">
                    <a href="/kategori" class="hover:scale-110">
                        <img src="/img/sayur1.png" alt="">
                    </a>
                    <a href="/kategori" class="hover:scale-110">
                        <img src="/img/sayur2.png" alt="">
                    </a>
                    <a href="/kategori" class="hover:scale-110">
                        <img src="/img/sayur3.png" alt="">
                    </a>
                    <a href="/kategori/sayur" class="hover:scale-110">
                        <img src="/img/sayur4.png" alt="">
                    </a>
                    <a href="/kategori" class="hover:scale-110">
                        <img src="/img/sayur5.png" alt="">
                    </a>
                    <a href="/kategori" class="hover:scale-110">
                        <img src="/img/sayur6.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <footer class="bg-tertiary py-8">
            <div class="mx-8 flex flex-row justify-between gap-8">
                <a href="{{ route('dashboard') }}">
                    <img class="" src="../img/growceries logo.png" alt="">
                </a>
                <div class="flex flex-row text-white justify-between gap-8">
                    <div>
                        <h4 class="text-lg font-semibold">BANTUAN</h4>
                        <h6 class="text-sm">Pembayaran</h6>
                        <h6 class="text-sm">Pengiriman</h6>
                        <h6 class="text-sm">Status Pemesanan</h6>
                        <h6 class="text-sm">Pengembalian Produk</h6>
                        <h6 class="text-sm">Cara Belanja</h6>
                        <h6 class="text-sm">Hubungi Kami</h6>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">CUSTOMER CARE</h4>
                        <h6 class="text-sm">Buka 24 jam setiap hari</h6>
                        <h6 class="text-sm">081272807120012</h6>
                        <h6 class="text-sm">cs@growceries.com</h6>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">INFORMASI GROWCERIES</h4>
                        <h6 class="text-sm">Tentang Growceries</h6>
                        <h6 class="text-sm">Komunitas Growceries Friends</h6>
                        <h6 class="text-sm">Siaran Pers</h6>
                        <h6 class="text-sm">Kabar Terbaru </h6>
                        <h6 class="text-sm">Karir</h6>
                        <h6 class="text-sm">Ketentuan & Kebijakan Privasi</h6>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">KERJASAMA DENGAN GROWCERIES</h4>
                        <h6 class="text-sm">Affliate Program</h6>
                        <h6 class="text-sm">Jual di Growceries</h6>
                        <img class="my-2" src="../img/gojek.png" alt="">
                        <img class="my-2" src="../img/grab.png" alt="">
                    </div>
                </div>
            </div>

        </footer>

    </div>
</body>
