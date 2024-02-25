<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Message By PHP Non PHPEmailer">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <link rel="stylesheet" href="../../dist/css/glyphicon.css">
    <style type="text/css">
    body,
    .layout,
    .layoutApp {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        font-size: 14px;
        background: rgba(120, 100, 150, 1);
    }
    </style>
</head>

<body onload="startTime()">
    <div class="layout">
        <div class="layoutApp">
            <nav class="navbar navbar-expand-lg fixed-top bg-light">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">Dashboard Message By PHP</a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupported"
                        aria-controls="navbarSupported" aria-label="navbar Supported Toggle" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupported">
                        <ul class="navbar-nav navbar-nav-scroll ms-auto">
                            <li class="nav-item">
                                <a href="index.php" aria-current="page" class="nav-link active">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-bs-target="#modalSignIn" data-bs-toggle="modal" aria-current="page"
                                    class="nav-link active">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal fade" id="modalSignIn" tabindex="-1">
                <div class="modal-dialog pt-5 mt-5">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5">Login Dashboard Message</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="act-signin.php" method="post">
                                <div class="row form-group input-group
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="text" name="userEmail" class="form-control"
                                                placeholder="Masukkan Email atau Username ..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <div class="row form-group input-group 
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan kata sandi ...." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit">
                                        <i class="fas fa-sign-in-alt"></i>
                                        <span>Log In</span>
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        <i class="fas fa-eraser"></i>
                                        <span>Reset</span>
                                    </button>
                                </p>
                            </form>
                            <p class="text-center">
                                <span class="text-primary">
                                    <a href="" data-bs-target="#modalSignUp" data-bs-toggle="modal"
                                        class="text-decoration-none">Register</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalSignUp" tabindex="-1">
                <div class="modal-dialog pt-5 mt-5">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5">Register Dashboard Message</h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="act-register.php" method="post">
                                <div class="row form-group input-group
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Masukkan Email baru anda ..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <div class="row form-group input-group 
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan kata sandi baru anda ...." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <div class="row form-group input-group 
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Masukkan username baru anda ...." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <div class="row form-group input-group 
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="text" name="nama" class="form-control"
                                                placeholder="Masukkan username baru anda ...." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2"></div>
                                <div class="row form-group input-group 
                                    d-flex justify-content-end align-items-end flex-wrap">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="input-group-addon">
                                            <input type="text" name="user_level" class="form-control" value="pengguna"
                                                readonly placeholder="Masukkan jabatan baru anda ...." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submited">
                                        <i class="fas fa-save"></i>
                                        <span>Simpan</span>
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        <i class="fas fa-eraser"></i>
                                        <span>Reset</span>
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid col-md-12 col-lg-12 bg-secondary fixed-bottom">
                <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-2 my-2 border-dark">
                    <p class="text-start">
                        &copy; Dashboard Message By PHP
                    </p>
                </footer>
                <div class="border-top border-dark"></div>
                <p class="text-end" id="time"></p>
            </div>
        </div>
    </div>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
    function startTime() {
        var today = new Date();
        var tahun = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML =
            h + ":" + m + ":" + s + ", " + tahun;
        var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
    </script>
</body>

</html>