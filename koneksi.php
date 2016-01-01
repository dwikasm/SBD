<?php
	$username = "fp";
	$password = "fp";
	$db = "oci:FinalProjectSBD=XE";

	$conn = new PDO ($db, $username, $password);

	if(!$conn){
		$error=oci_error();
		echo "gagal connect", $error['text'];
	}
	else{
		echo "sukses boz";
	} 
?>