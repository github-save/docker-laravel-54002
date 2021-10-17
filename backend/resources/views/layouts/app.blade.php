<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <!-- サイドバー -->
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>