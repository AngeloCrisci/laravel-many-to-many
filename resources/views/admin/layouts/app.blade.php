<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("additional-meta")
    <title>@yield("page-title", "")</title>

    @yield("additional-cdn")
</head>
<body>
    {{-- includi header --}}
    @include("admin.partials.header")

    {{-- inserisci contenuti da chi estende --}}
    <main>
        @yield("main-content")
    </main>

    {{-- includi footer --}}
    @include("admin.partials.footer")

    @vite("resources/sass/app.scss")
    @vite("resources/js/app.js")
    @yield("additional-scripts")
</body>
</html>
