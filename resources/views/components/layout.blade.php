<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork-rotte-viste</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- Inserisci il contenuto di una pagina in maniera dinamica -->
     <x-navbar></x-navbar>
     {{  $slot  }}

</body>
</html>
