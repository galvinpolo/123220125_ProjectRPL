<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<!-- <div class="position-absolute top-50 start-50 translate-middle">
   <div class="inputlogin">
   <h2 class="text-center">Welcome admin</h2>
       <div class="" style="margin: 1rem 10rem; border: .5px solid; padding: 2rem; border-radius: 7px;">
               <h2><center>login</center></h2>
               <form method="POST" action="cek_loginadmin.php">
               <table>
                   <div class="mb-3">
                       <input type="text" class="form-control" name="username" placeholder="username">
                   </div>
                   <div class="mb-3">
                       <input type="password" class="form-control" name="password" placeholder="password">
                   </div>
                   <td><input type="submit" class="btn btn-primary" value="LOGIN"></td>
               </table>
           </form>
           <center>
               <p>belum punya akun? <a href="akunbaru.php">daftar disini!</a></p> 
           </center>
   </div>
   </div>  
</div>  -->

<!-- Section: Design Block -->
<div class="inputlogin">
<section class="jumbotron">
  <div class="px-4 py-5 text-center text-lg-start" style="margin-top: 165px;">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-1 fw-bold ls-tight">
            AD<span class="text" style="color: rgb(169, 179, 136);">MIN</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            only admin can enter this
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card" style="background-color: #fafcfa">
            <div class="card-body py-5 px-md-5 text-dark">
              <form method="POST" action="cek_loginadmin.php">
                <!-- Email input -->
                <div class="form-floating mb-3">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="">
                  <label for="floatingInput">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

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

</body>
</html>