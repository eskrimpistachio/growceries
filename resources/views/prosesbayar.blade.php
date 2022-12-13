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
    <div class="text-center flex flex-col justify-evenly my-16">
        <h1 class="text-2xl font-bold">Memproses Pembayaran</h1>
        <p class="text-primary">Tunggu sebentar ya!</p>
        <p class="text-primary">Pembayaranmu sedang dikonfirmasi.</p>
    </div>
    <script src="/berhasil.js"></script>
</body>