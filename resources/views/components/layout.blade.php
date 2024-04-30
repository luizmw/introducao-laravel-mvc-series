<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de séries</title> {{-- control of series, title default --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="container p-2">
        <h1>{{ $title }}</h1>
        {{-- slot = sessão onde recebe o conteúdo --}}
        {{ $slot }}
    </div>
</body>

</html>
