<!DOCTYPE html>
<html leng="en">
<head>
    @include('partials._head')
</head>
<body>

    @include('partials._nav')

    <div class="container">
        @include('partials._messages')


        @yield('content')
        <hr>
        
    </div> <!-- end of .container -->
    @include('partials._footer')
    
    @include('partials._javascript')

    @yield('scripts')
</body>
</html>