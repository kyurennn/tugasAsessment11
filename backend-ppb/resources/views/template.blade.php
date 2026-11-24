<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    </head>
    <body class="container">
        @auth
        <div class="row justify-content-end" style="margin-top:2%">
            <div class="col-3">
                {{ Auth::user()->name }}
                <a href="/logout" class="btn btn-warning">Logout</a>
            </div>
        </div>
        @endauth
        <div class="row justify-content-center mt-5">
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
            <script>
                let table = new DataTable('.table');
            </script>
    </body>
</html>