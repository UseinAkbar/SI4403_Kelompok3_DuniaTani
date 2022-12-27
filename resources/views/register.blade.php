<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
    <section id="loginn">

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left"></div>
                <div class="col-md-6">
                    <div class="form-login m-auto ps-5">
                        <h2 class="fw-bold mb-4">Register</h2>
                        <form action="/register" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control w-75 required">
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control w-75 required">
                            </div>
                            <div class="mb-1">
                                <label for="username" class="form-label">username</label>
                                <input type="text" name="username" id="username" class="form-control w-75 required">
                            </div>
                            <div class="mb-1">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control w-75 required">
                            </div>

                            <button type="submit" name="register" class="d-block btn btn-primary mb-3">Register</button>
                        </form>
                        <p>Anda sudah punya akun? <a href="/login">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>