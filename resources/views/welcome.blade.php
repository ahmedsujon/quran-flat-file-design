<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Quran Database Search</title>
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/headers.css') }}" rel="stylesheet">
    @stack('styles')
    @livewireStyles
</head>

<body>
    <main>
        <div>
            <h1 class="visually-hidden">Quran Search</h1>

            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-4">Quran Search</span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    </ul>
                </header>
            </div>
        </div>
        <div class="b-example-divider"></div>
        {{ $slot }}
    </main>
    @stack('scripts')
    @livewireScripts

    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>