<?php
   session_start();
   include 'koneksi.php';
   if(empty($_SESSION['username'])){
    header("location:login_admin.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3" style="background-color: rgb(169, 179, 136);" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                    <a class="navbar-brand fw-bold">Admin</a>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="halamanadmin.php">Home</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="data.php">Data</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="cek_logout_admin.php">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
    <?php  
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "updated"){
        echo "<div class='alert alert-primary' role='alert'>
                *Data berhasil diperbarui
            </div>";
        }else if($_GET['pesan'] == "sudah_login"){
        echo "<div class='alert alert-info' role='alert'>
                *Anda Sudah Login
            </div>";
        }else if($_GET['pesan'] == "deleted"){
        echo "<div class='alert alert-dark' role='alert'>
                *Data berhasil dihapus
            </div>";
        }else if($_GET['pesan'] == "berhasiltambah"){
        echo "<div class='alert alert-success' role='alert'>
                *Berhasil Menambahkan Data
            </div>";
        }
    }
    ?>

        <h1>Selamat Datang</h1>
        <h3>Mr. <?php echo $_SESSION['username']?></h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>