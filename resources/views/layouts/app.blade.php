<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        @include('layouts._nav')

        <main class="py-4">
            <div class="container">
                @if (session('success-message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error-message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error-message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="content-box border bg-white">
                    <div class="content-title border-bottom p-3">
                        <h5>@yield('title')</h5>
                    </div>
                    <div class="content-body p-3">
                        @yield('content')
                    </div>
                </div>
    
            </div>
            
        </main>
    </div>
</body>
</html>
