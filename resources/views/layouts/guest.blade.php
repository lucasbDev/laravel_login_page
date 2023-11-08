<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.nam e', 'Tita Therapy') }}</title>

    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/1dba34_7b06215d56644239ab46bbc28ee6c2e9%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/1dba34_7b06215d56644239ab46bbc28ee6c2e9%7Emv2.png" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img src="https://www.camc.org/sites/default/files/2023-07/Autism-Logo.png" alt="Your Logo" class="w-240 h-40 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-blue-400 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
