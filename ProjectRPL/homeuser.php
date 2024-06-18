<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="inicss.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body >
    <?php
    session_start();
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3" style="background-color: rgb(169, 179, 136);" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand fw-bold">Welcome, <?php echo $_SESSION['username']; ?></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="homeuser.php">Home</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#proker">Menu</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="riwayatpesanan.php">Riwayat Pesanan</a></li>     
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="cek_logout.php">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container my-6 mb-5">
        <div class="row align-items-center mt-7 content-container">
            <div class="col-6 col-6 py-6 text-sm-start text-container">
                <h3 class="mt-6 mb-4 display-5 fw-bold">Puncak Sosok, <span class="text-success">an amazing place in Jogja</span><br class="d-block d-lg-none d-xl-block" /></h3>
                <a class="btn btn-lg" href="inputdata.php"  style="background-color: rgb(169, 179, 136)">PESAN</a>
            </div>
            <div class="col-6 col-6 col-5 mt-5 image-container">
                <img src="sosok1.jpg" width="550" height="700" class="img-fluid" alt="Sample image">
            </div>
        </div>
    </div>

    <br>
    <br>

<!-- card section -->
<div class="container" id="proker">
    <h1 style="font-weight: bolder"><center>Menu</center></h1><br><br>
    <div class="container-fluid">
        <div class="row">
            <!-- card 1 -->
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="telur.jpg" class="card-img-top" alt="croffle">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder">Sate Telur</h5>
                        <p class="card-text">Sate telur tradisional yang enak untuk dicemil atau dijadikan lauk tambahan</p>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="kucing.jpg" class="card-img-top" alt="cookiemon">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder">Nasi Kucing</h5>
                        <p class="card-text">Nasi kucing angkringan yang tentunya sangat menggugah selera makan</p>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="dawet.jpg" class="card-img-top" alt="caramel machiato">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder">Es Dawet</h5>
                        <p class="card-text">Minuman yang sangat menyegarkan dan sangat uenakkkk</p>
                    </div>
                </div>
            </div>

            <!-- card 4 -->
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="bakar.jpeg" width="300" height="200" class="card-img-top" alt="cookies">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Bakar</h5>
                        <p class="card-text">Nasi dengan lauk ikan didalamnya, yang dibungkus dengan daun lalu dibakar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
</body>
</html>