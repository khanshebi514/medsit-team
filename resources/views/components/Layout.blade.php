<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedsNexus It</title>
    @vite(['resources/css/app.css', 'resources/css/app.scss','resources/js/app.js'])
</head>
<body>
    @include('ui.Topbar')
    <x-Navbar/>
    {{$slot}}
    <x-Footer/>
</body>
</html>