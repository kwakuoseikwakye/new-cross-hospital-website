<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="wrapper">
        @include('includes.header')

        @yield('page-content')

        @include('includes.footer')
    </div>
    @include('includes.script')
</body>
</html>