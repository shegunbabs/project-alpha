<!DOCTYPE html>
<html class="h-full bg-white">
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

    <div class="min-h-full">
        <main class="flex items-center justify-center w-full h-full min-h-screen">
            <div class="max-w-7xl py-6 sm:px-6 lg:px-8 w-full">
                <div class="px-4 py-4 sm:px-0">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>

</div>

@stack('scripts')
</body>
</html>
