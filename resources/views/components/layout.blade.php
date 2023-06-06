<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @font-face{
            font-family: spinnaker;
            src:url({{ asset('font/Spinnaker-Regular.ttf')}})
        }
        @font-face{
            font-family: geovano;
            font-weight: 100;
            src:url({{ asset('font/Geovano-Sans-Regular.otf')}})
        }
    </style>
    @vite('resources/css/app.css')
    <title>Document</title>
    @livewireStyles
</head>
<body>

    {{ $slot }}

    @livewireStyles
</body>
</html>
