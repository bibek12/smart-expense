<!DOCTYPE html>
<html lang="en">
@include('partials._header')
<body style="background-color:#272b2f !important; color:#d9534f !important">
    <div class="container">
    
        <div class="row">
            @yield('authcontent')
        </div>
    </div>
  
  
@include('partials._script')  

</body>
</html>