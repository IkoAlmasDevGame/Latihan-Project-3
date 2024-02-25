<?php 
if($_SESSION["user_level"] == ""){
    header("location:../index.php");
    exit(0);
}
?>

<?php 
if($_SESSION["user_level"] == "admin"){
?>
<div class="col-md-12 col-lg-12">
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a href="../dashboard/index.php" class="navbar-brand fs-5 text-light">dashboard message</a>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarSupported" data-bs-toggle="collapse"
                aria-controls="navbarSupported" aria-label="navbarSupportedToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../dashboard/index.php" aria-current="page" class="nav-link active fs-5 text-light">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../pesan/index.php?email=<?=$_SESSION['email_pengguna']?>" aria-current="page"
                            class="nav-link active fs-5 text-light">
                            Pesan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../ui/header.php?aksi=keluar"
                            onclick="javascript:return confirm('Apakah kamu ingin keluar dari website sederhana ini ?')"
                            aria-current="page" class="nav-link active fs-5 text-light">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php
}else{
    header("location:../index.php");
}
?>