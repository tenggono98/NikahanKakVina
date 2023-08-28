<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $page_name ?? '' }}</title>
    @livewireStyles
</head>
<body>

    {{ $slot }}

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
</body>
</html>
