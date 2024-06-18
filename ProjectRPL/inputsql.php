<?php
  session_start();
  include "koneksi.php";

   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $pesanan=$_POST['pesanan'];
   $akun = $_SESSION['username'];
   
   $query=mysqli_query($konek,"INSERT INTO datapenduduk 
     VALUES('','$nama','$alamat','$pesanan','$akun')"
    ) or die(mysqli_error($konek));
    if($query){

    header("location:homeuser.php?pesan=berhasil");
    }
     else 
   {
     echo "Proses Input gagal";
    }
?>
                    

?>