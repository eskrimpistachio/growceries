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

<body class="text-center flex flex-row gap-16 justify-center mt-8">
    <div>
        <h1 class="text-3xl font bold font-bold my-8">Pembayaran Berhasil</h1>
        <a class="bg-primary text-black py-3 px-8 text-lg font-semibold hover:border-primary hover:bg-transparent hover:border-2 hover:text-primary rounded-2xl" href="/">Kembali ke Beranda</a>
    </div>
    <img class="h-1/4" src="/img/success.png" alt="">
</body>