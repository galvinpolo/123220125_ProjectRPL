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
    <title>Riwayat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
</head>
<body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: rgb(169, 179, 136);" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand fw-bold">Welcome, <?php echo $_SESSION['username']; ?></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" aria-current="page" href="homeuser.php">Home</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="homeuser.php">Menu</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" href="riwayatpesanan.php">Riwayat Pesanan</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="cek_logout.php">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" container text-center pt-5">
        <img src="riwayat.png" alt="network-logo" width="72" height="72" />
        <h2>Riwayat Pesanan Anda</h2>
    </div>

    <table class="table container table-stripped mt-3" style="font-size: 12px;">
        <thead class="table-success">
            <tr>
                <td> No </td>
                <td> Nama </td>                
                <td> Pesanan </td>
            </tr>
        </thead> 
            <?php
                include 'koneksi.php';
                $nomer = 0;
                $query=mysqli_query($konek,"select * from datapenduduk");
                if(mysqli_num_rows($query) > 0){
                  while ($row = $query->fetch_assoc()) {
                    if($row['username'] == $_SESSION['username']){  
                      $nomer++; 
            ?>
        <tbody class="table table-hover table-stripped">
            <tr>
                <td> <?php echo $nomer; ?></td>
                <td> <?php echo $row['nama']; ?> </td>
                <td> <?php echo $row['pesanan']; ?> </td>
            </tr>
        </tbody>
        <?php 
            }
          }
        }	?>
        </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>