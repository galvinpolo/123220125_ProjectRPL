<?php

session_start();
$query=new mysqli('localhost', 'root', '', 'projekrpl');


$username= $_POST['username'];
$sandi=$_POST['sandi'];

$data=mysqli_query($query,"SELECT * FROM usertamu where username='$username' and sandi='$sandi'") or die (mysqli_error($query));
(mysqli_error($query));
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header("location:homeuser.php");
}else{
	header("location:login_user.php?pesan=gagal");
    }

?>