<!DOCTYPE html>
<html lang="en">

<head>
    <title>CareMed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CareMed demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.layout-landing.css')
    @stack('style-custom')
</head>

<body>

    <div class="super_container">

        @include('layouts.layout-landing.navbar')

        @yield('isi-contentLanding')
        {{ isset($slot) ? $slot : null }}

        @include('layouts.layout-landing.footer')
    </div>

    @include('layouts.layout-landing.js')
    @stack('script-custom')
</body>

</html>
