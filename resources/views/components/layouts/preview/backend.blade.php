<!DOCTYPE html>
<html class="">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="your, tags"/>
    <meta name="description" content="150 words"/>
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="name, email@hotmail.com">
    <meta name="designer" content="">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <title>{{ $pageTitle ?? 'CashMore :: Get profit on all your transaction' }}</title>
    <link href="/css/tw-styles.css" rel="stylesheet"/>
    @livewireStyles

    @livewireScripts
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    {{ $scripts }}
</head>

<body class="bg-gray-50 antialiased min-h-screen">

{{ $slot }}

</body>
</html>
