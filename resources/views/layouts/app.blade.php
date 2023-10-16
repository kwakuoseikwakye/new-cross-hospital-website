<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
          </div>
        @include('includes.header')

        @yield('page-content')

        @include('includes.footer')
    </div>
    @include('includes.script')
</body>
</html>