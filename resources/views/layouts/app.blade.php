@php
    $theme = session('theme','dark');
@endphp

<!DOCTYPE html>
<html lang="en" data-theme="{{ $theme }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/styles/app.scss', 'resources/scripts/app.js'])
</head>

<body>
    {{ $slot }}
</body>

</html>
