<!DOCTYPE html>
<html lang = "en">

<head>
    @include('backend.includes.header')

    @include('backend.includes.css')
</head>

<body>

    @include('backend.includes.menu')

    @include('backend.includes.topbar')

    @include('backend.includes.rightPanel')

    <div class = "br-mainpanel">
        @yield('body')


        @include('backend.includes.footer')
    </div><!-- br-mainpanel -->

    @include('backend.includes.script')
</body>

</html>
