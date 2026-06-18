<!DOCTYPE html>
<html>

<head>
    <title>Sistem Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    @include('partials.navbar')

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2 p-0">

                @include('partials.sidebar')

            </div>

            <div class="col-md-10 p-4">

                @yield('content')

            </div>

        </div>

    </div>

</body>

</html>
