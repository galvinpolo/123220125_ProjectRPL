<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laman Edit</title>
</head>
<body>
<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query=mysqli_query($konek,"select * from datapenduduk where id=$id ");
    $data=mysqli_fetch_array($query);
?>
<div class="inputdata container my-5">
    <form action="editsql.php" method="POST">
    
    <div class="form-group col-4 col-4" >
        <label for="formGroupExampleInput">ID</label>
        <input type="text" name="id" id="id" Value="<?php echo $data['id']; ?>" class="form-control" id="formGroupExampleInput" readonly>
      </div>

      <div class="form-group col-4" >
        <label for="formGroupExampleInput">Nama</label>
        <input type="text" name="nama" Value="<?php echo $data['nama']; ?>" class="form-control" id="formGroupExampleInput" >
      </div>

      <div class="form-group col-4" >
        <label for="formGroupExampleInput">Alamat</label>
        <input type="text" name="alamat" Value="<?php echo $data['alamat']; ?>" class="form-control" id="formGroupExampleInput" >
      </div>

      <label for="formGroupExampleInput">Pesanan</label>
      <select class="form-select col-4" name="pesanan" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="Nasi Kucing">Nasi Kucing</option>
        <option value="Nasi Bakar">Nasi Bakar</option>
        <option value="Es Dawet">Es Dawet</option>
        <option value="Es Teh">Es Teh</option>
        <option value="Rawon">Rawon</option>
        <option value="Sate Telur">Sate Telur</option>
      </select>

      <div class="form-group col-4 mb-3" >
        <label for="formGroupExampleInput">Username</label>
        <input type="text" name="username" Value="<?php echo $data['username']; ?>" class="form-control" id="formGroupExampleInput" readonly>
      </div>

      <button type="submit" name ="submit" class="btn btn-primary btn-block col-1">EDIT</button><br>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>