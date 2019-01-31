<!DOCTYPE html>
<html lang="en">
@include('partials._header')
<body>
    @include('partials._navbar')
    <div class="container">
        @include('partials._errors')
    
        @yield('content')

        @include('partials._footer')
    </div>
  
    
@include('partials._script')
@yield('script')
</body>
</html>