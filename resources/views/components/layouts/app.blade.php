<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://www.nerdfonts.com/assets/css/webfont.css">
    @vite(['resources/styles/app.scss', 'resources/scripts/app.js'])
</head>

<body>
    {{ $slot }}
</body>

</html>
