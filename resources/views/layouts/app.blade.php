<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title', 'Web Hydraulic')</title>

    <meta
        name="description"
        content="@yield('meta_description', 'Premium hydraulic products, services and industrial solutions.')"
    >

    {{-- Main CSS --}}
    <link
        rel="stylesheet"
        href="{{ asset('css/main.css') }}"
    >

    @stack('styles')

</head>

<body>

    {{-- HEADER --}}
    @include('components.navbar')


    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>


    {{-- FOOTER --}}
     @include('components.footer') 


    {{-- Main JS --}}
    <script
        src="{{ asset('js/main.js') }}"
    ></script>

    @stack('scripts')

</body>

</html>