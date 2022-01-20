<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="your, tags"/>
    <meta name="description" content="150 words"/>
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="name, email@hotmail.com">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <title>Your Website</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    @stack('head')
    @livewireStyles

    @livewireScripts
    <script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script>
</head>

<body>

@stack('scripts')
</body>
</html>
