<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Mining Earth - ماينج إيرث')</title>
    <meta name="description" content="@yield('description', 'شركة مصرية ناشئة في التكنولوجيا العميقة')" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/site.css', 'resources/js/site.js'])

    <style>
        #page-loader {
            position: fixed;
            inset: 0;
            background: #0a0a0a;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 28px;
            z-index: 99999;
            transition: opacity .55s ease;
        }
        #page-loader.is-hidden { opacity: 0; pointer-events: none; }
        #page-loader img {
            width: 130px;
            height: auto;
            animation: pl-pulse 1.6s ease-in-out infinite;
            filter: drop-shadow(0 0 20px rgba(212, 175, 55, 0.25));
        }
        #page-loader .pl-ring {
            width: 44px;
            height: 44px;
            border: 2px solid rgba(212, 175, 55, 0.15);
            border-top-color: #d4af37;
            border-radius: 50%;
            animation: pl-spin .9s linear infinite;
        }
        @keyframes pl-pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(.94); opacity: .82; }
        }
        @keyframes pl-spin { to { transform: rotate(360deg); } }
        body.is-loading { overflow: hidden; }
    </style>

    @stack('head')
</head>
<body class="is-loading">

    <div id="page-loader" aria-hidden="true">
        <img src="{{ asset('images/logo.webp') }}" alt="Mining Earth" onerror="this.src='{{ asset('images/logo.png') }}'" />
        <div class="pl-ring"></div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script>
        (function () {
            var loader = document.getElementById('page-loader');
            if (!loader) return;
            function hide() {
                loader.classList.add('is-hidden');
                document.body.classList.remove('is-loading');
                setTimeout(function () { loader.remove(); }, 600);
            }
            if (document.readyState === 'complete') {
                hide();
            } else {
                window.addEventListener('load', hide);
                setTimeout(hide, 4000);
            }
        })();
    </script>

    @stack('scripts')
</body>
</html>
