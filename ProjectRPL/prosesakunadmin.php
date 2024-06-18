<?php

include 'koneksi.php';
$username= $_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($konek,"INSERT INTO useradmin VALUES('','$username','$password')") or die(mysqli_error($konek));

if($query){
    echo"account succesfully made";
    header("Location: login_admin.php");
    exit();
}
?>