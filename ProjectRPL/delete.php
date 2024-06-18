<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($konek, "DELETE FROM datapenduduk WHERE id=$id");

    if($query){
        header("location:data.php?pesan=deleted");
    }else{
    echo "Proses input gagal!";
    }
?>