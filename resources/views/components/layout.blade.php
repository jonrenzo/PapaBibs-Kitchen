<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
<x-nav-bar></x-nav-bar>

{{ $slot }}


<x-footer></x-footer>
</body>
</html>
