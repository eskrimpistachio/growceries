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

    <div class="flex flex-col gap-4 my-16">
        <h1 class="text-4xl font-bold mx-auto">Metode Pembayaran</h1>
        <a href="/bayar/prosesbayar">
            <div
                class="flex flex-col gap-8 mx-auto border-2 border-gray-300 p-4 w-[500px] rounded-xl my-8 hover:scale-110">
                <div>
                    <h4 class="text-lg font-semibold">Transfer</h4>
                    <p class="text-sm">Anda bisa membayar dengan transfer melalui ATM, Internet Banking & Mobile
                        Banking.
                    </p>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h4 class="text-lg">Bank BCA</h4>
                    <div class="flex flex-row gap-4">
                        <img class="h-3/4" src="/img/bca.png" alt="">
                        <img src="/img/arrow.png" alt="">
                    </div>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h4 class="text-lg">Bank Mandiri</h4>
                    <div class="flex flex-row gap-4">
                        <img class="h-3/4" src="/img/mandiri.png" alt="">
                        <img src="/img/arrow.png" alt="">
                    </div>
                </div>
                <hr>
            </div>
        </a>

        <a href="/bayar/prosesbayar">
            <div
                class="flex flex-col gap-8 mx-auto border-2 border-gray-300 p-4 w-[500px] rounded-xl my-8 hover:scale-110">
                <div>
                    <h4 class="text-lg font-semibold">E-Wallet</h4>
                    <p class="text-sm">Anda bisa membayar dengan Gopay, OVO, atau Dana.</p>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h4 class="text-lg">Gopay</h4>
                    <div class="flex flex-row gap-4">
                        <img class="h-3/4" src="/img/gopay.png" alt="">
                        <img src="/img/arrow.png" alt="">
                    </div>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h4 class="text-lg">OVO</h4>
                    <div class="flex flex-row gap-4">
                        <img class="h-3/4" src="/img/ovo.png" alt="">
                        <img src="/img/arrow.png" alt="">
                    </div>
                </div>
                <hr>
                <div class="flex flex-row justify-around">
                    <h4 class="text-lg">DANA</h4>
                    <div class="flex flex-row gap-4">
                        <img class="h-3/4" src="/img/dana.png" alt="">
                        <img src="/img/arrow.png" alt="">
                    </div>
                </div>
                <hr>
            </div>
        </a>

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
</body>
