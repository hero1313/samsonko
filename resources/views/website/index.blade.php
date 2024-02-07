<!doctype html>
<html class="no-js" lang="en">

@include('website.layouts.head')

<body>

    @include('website.layouts.header')

    @yield('content')
    
    @include('website.layouts.brand')

    @include('website.layouts.footer')

    @include('website.layouts.script')

</body>

</html>
