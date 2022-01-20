<!DOCTYPE html>
<html class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? "Project Alpha ::: Doctor's Dashboard" }}</title>
    <meta name="author" content="shegunbabs">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/app.css">
    @stack('head')
    @livewireStyles
    <style type="text/css">
        [x-cloak] { display: none !important; }
    </style>
    @livewireScripts
    <script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script>
</head>

<body class="h-full">
<div id="app" class="font-sans min-h-screen">

    <livewire:flash-container />
    <div class="min-h-full">
        @include('layouts.doctor.top-nav')

        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-lg leading-6 font-semibold text-gray-900">
                    Dashboard
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-4 sm:px-0">
                    {{ $slot }}
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>


</div>

@stack('scripts')
</body>
</html>
