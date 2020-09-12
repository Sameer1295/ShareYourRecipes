<html>
    <head>
        <title> @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <h3 style="background-color: pink">This is the master sidebar.</h3>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>