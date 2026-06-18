<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f2f2f2;">

    <div class="container">

        <div class="row justify-content-center mt-5">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-header text-center">

                        <h4>LOGIN</h4>
                        <h6>Sistem Perpustakaan</h6>

                    </div>

                    <div class="card-body">

                        @if (session('error'))
                            <div class="alert alert-danger">

                                {{ session('error') }}

                            </div>
                        @endif

                        <form action="/login" method="POST">

                            @csrf

                            <label>Email</label>

                            <input type="text" name="email" class="form-control" required>

                            <br>

                            <label>Password</label>

                            <input type="password" name="password" class="form-control" required>

                            <br>

                            <button class="btn btn-primary w-100">

                                Login

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
