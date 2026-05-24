<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    <x-js.darklight/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Geist:400,700&amp;display=swap">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <x-dashboard.sidenav/>
            <div class="col-md-9 col-xl-10 bg-body-tertiary px-0">
                <div class="d-md-none p-2 sticky-top">
                    <nav class="navbar bg-body rounded-4 shadow-sm px-2">
                        <div class="container-fluid"><a class="text-decoration-none link-body-emphasis d-inline-flex align-items-center" href="#"><svg class="bi bi-circle-square fs-5 me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6"></path>
                                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a7 7 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79q.145.486.22 1"></path>
                                </svg><span class="fs-5 fw-bold">Brand</span></a><button class="navbar-toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    </nav>
                </div>
                <main class="px-3 px-md-4">
                    <x-dashboard.topbar>{{ $breadcrumb??"" }}</x-dashboard.topbar>
                    {{ $slot??"" }}
                    <x-dashboard.footer/>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
