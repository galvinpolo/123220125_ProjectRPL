<?php

include 'koneksi.php';
$username= $_POST['username'];
$sandi=$_POST['sandi'];
$query=mysqli_query($konek,"INSERT INTO usertamu VALUES('','$username','$sandi')") or die(mysqli_error($konek));

if($query){
    echo"account succesfully made";
    header("Location: login_user.php");
    exit();
}
?>