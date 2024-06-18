<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login Options</title>
    <style>
        .card:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body style="background-color: hsl(0, 0%, 96%)">

    <div class="container-fluid pt-5 my-5 pb-5 text-dark">
        <div class="container">
            <div class="row pt-4 gx-4 gy-4 justify-content-center">

                <div class="col-md-4 card-group">
                    <div class="card" style="background-color: rgb(169, 179, 136);" onclick="location.href='login_user.php';">
                        <img src="user.jpg" width="500" height="400" class="card-img-top" alt="...">
                        <div class="card-body text-center text-light">
                            <h4 class="card-title" style="font-weight: bolder;">Masuk sebagai tamu</h4>
                            <!-- Removed the login button -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 card-group">
                    <div class="card" style="background-color: rgb(169, 179, 136);" onclick="location.href='login_admin.php';">
                        <img src="admin.jpg" width="500" height="400" class="card-img-top" alt="...">
                        <div class="card-body text-center text-light">
                            <h4 class="card-title" style="font-weight: bolder;">Masuk sebagai admin</h4>
                            <!-- Removed the login button -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
