<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-4HfFay3AYJnEmbgRzxYWJk/Ka5jIimhB/Fssk7NGT9Tj3rkEChpSxLK0btOGzf2I" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " style="justify-content: space-between">
        <div class="container">
            <a class="navbar-brand" href="/">My Notes</a>
            <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('search') }}">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
