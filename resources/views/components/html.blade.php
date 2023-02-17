<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Dev - AGP Soluções</title>
    <link rel="stylesheet" href="{{ URL::asset('styles/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('styles/form.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('styles/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <x-navbar />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    {{ $slot }}
    <script src="{{ URL::asset('scripts/masks.js') }}"></script>
    <script src="{{ URL::asset('scripts/cleaners.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
