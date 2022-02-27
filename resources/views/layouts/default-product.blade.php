<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @stack('prepend-style')
    @include('frontend.includes.style2')
    @stack('addon-style')
</head>
<body>
    {{-- navbar --}}

    @include('frontend.includes.navbar')

     {{-- content --}}

    @yield('content')

    <!-- Footer -->

    @include('frontend.includes.footer')

    {{-- script --}}
    @stack('prepend-script')
    @include('frontend.includes.script2')
    @stack('addon-script')
</body>
</html>