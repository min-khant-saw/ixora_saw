    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:site_name" content="Ixora Saw">
        <meta property="og:title" content="Ixora Saw">
        <meta property="og:description" content="Boutique. Sell handmade products.">
        <meta property="og:url" content="{{ url()->full() }}">
        <meta property="og:image" content="{{ URL::asset('build/assets/images/Ixora-Saw-Logo-background.png') }}">


        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('mstyle.css') }}?=fdsafdsa">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- Scripts -->
        <link rel="shortcut icon" href="{{ URL::asset('build/assets/images/Ixora-Saw-Logo-background.png') }}"
            type="image/x-icon">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
