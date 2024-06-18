<?php

session_start();
$query=new mysqli('localhost', 'root', '', 'projekrpl');


$username= $_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($query,"SELECT * FROM useradmin where username='$username' and password='$password'") or die (mysqli_error($query));
(mysqli_error($query));
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header("location:homeadmin.php");
}else{
	header("location:login_admin.php?pesan=gagal");
    }

?>