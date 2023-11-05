<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body class="overflow-x-hidden">
    <div id="app">
        @include('components.navbar')
        <main class="py-36">
            @yield('content')
        </main>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

    <script>
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("sliderPenghargaan");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("sliderPenghargaan");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);

        let defaultTransform2 = 0;

        function goNext2() {
            defaultTransform2 = defaultTransform2 - 398;
            var slider = document.getElementById("sliderPartner");
            if (Math.abs(defaultTransform2) >= slider.scrollWidth / 1.7) defaultTransform2 = 0;
            slider.style.transform = "translateX(" + defaultTransform2 + "px)";
        }
        next2.addEventListener("click", goNext2);

        function goPrev2() {
            var slider = document.getElementById("sliderPartner");
            if (Math.abs(defaultTransform2) === 0) defaultTransform2 = 0;
            else defaultTransform2 = defaultTransform2 + 398;
            slider.style.transform = "translateX(" + defaultTransform2 + "px)";
        }
        prev2.addEventListener("click", goPrev2);

        let defaultTransform3 = 0;

        function goNext3() {
            defaultTransform3 = defaultTransform3 - 398;
            var slider = document.getElementById("sliderInstruktur");
            if (Math.abs(defaultTransform3) >= slider.scrollWidth / 1.7) defaultTransform3 = 0;
            slider.style.transform = "translateX(" + defaultTransform3 + "px)";
        }
        next3.addEventListener("click", goNext3);

        function goPrev3() {
            var slider = document.getElementById("sliderInstruktur");
            if (Math.abs(defaultTransform3) === 0) defaultTransform3 = 0;
            else defaultTransform3 = defaultTransform3 + 398;
            slider.style.transform = "translateX(" + defaultTransform3 + "px)";
        }
        prev3.addEventListener("click", goPrev3);
    </script>
</body>

</html>
