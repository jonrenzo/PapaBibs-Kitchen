<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="./images/Logo-Txt.png" type="image/x-icon">
    <title>PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans">
<x-nav-bar></x-nav-bar>

{{ $slot }}

<x-footer></x-footer>
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
