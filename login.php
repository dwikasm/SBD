<?php
include('koneksi.php');
$username=$_POST['user'];
$password=$_POST['pass'];

$row=$conn->query("select * from petugas")->fetchAll();
if($row==1){
	header("location:index-login.php");
}else{
	header("location:search.php");
}
?>