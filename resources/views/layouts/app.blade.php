<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    {{ $darklight??""  }}
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Geist:400,700&amp;display=swap">
    <link rel="stylesheet" href="/assets/css/bss-overrides.css">
    <link rel="stylesheet" href="/assets/css/app-ui/file-storage.css">
    <link rel="stylesheet" href="/assets/css/app-ui/fitness-tracker.css">
    <link rel="stylesheet" href="/assets/css/app-ui/product-card.css">
    <link rel="stylesheet" href="/assets/css/app-ui/social-feed.css">
    <link rel="stylesheet" href="/assets/css/app-ui/wallet.css">
    <link rel="stylesheet" href="/assets/css/app-ui/weather-forecast.css">
    <link rel="stylesheet" href="/assets/css/sales-report.css">
    <link rel="stylesheet" href="/assets/css/template.css">
</head>

<body>
{{ $slot }}
</body>

</html>
