<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Login</title>
</head>
<body style="background-color: hsl(0, 0%, 96%)">
<?php 
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal")
			{
			echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout")
            {
                echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login")
                {
                echo "Anda harus login untuk mengakses website admin";
                }
             }
           ?>
        

<!-- Section: Design Block -->
<div class="inputlogin">
<section class="jumbotron">
  <div class="px-4 py-5 text-center text-lg-start" style="margin-top: 165px;">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Puncak <br />
            <span class="text" style="color: rgb(169, 179, 136);">Sosok</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Puncak Sosok di Yogyakarta adalah surga tersembunyi yang menawarkan pemandangan memukau dan suasana tenang. Terletak di Bantul, tempat ini menjadi favorit untuk menikmati matahari terbenam dan panorama kota dari ketinggian.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card" style="background-color: #fafcfa">
            <div class="card-body py-5 px-md-5 text-dark">
              <form method="POST" action="cek_loginuser.php">
                <!-- Email input -->
                <div class="form-floating mb-3">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="">
                  <label for="floatingInput">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" name="sandi" placeholder="Password">
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
            <center>
               <p>belum punya akun? <a href="akunbaru.php">daftar disini!</a></p> 
           </center>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Section: Design Block -->
             
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>