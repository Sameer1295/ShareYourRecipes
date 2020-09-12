<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <h3>This is the master sidebar.</h3>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>