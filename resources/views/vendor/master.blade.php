<html>
    <head>
        <title>@yield('title')</title>
    </head>

    <body>
        @section('menu')
        Contenido base del menú

        @show
        <div class="container">

            @yield('content')

        </div>
    </body>
</html>
