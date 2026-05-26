<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    {{ $darklight ?? '' }}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Geist:400,700&amp;display=swap">
</head>

<body>
    {{ $slot }}
</body>

</html>
