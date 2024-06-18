<?php
  session_start();
  include "koneksi.php";

   $id=$_POST['id'];
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $pesanan=$_POST['pesanan'];
   $akun = $_POST['username'];
   
   $query=mysqli_query($konek,"UPDATE datapenduduk SET nama='$nama', alamat='$alamat', pesanan='$pesanan', username='$akun' where id='$id'"
    ) or die(mysqli_error($konek));
    if($query){

    header("location:data.php?pesan=berhasil");
    }
     else 
   {
     echo "Proses Input gagal";
    }
?>
                    

?>