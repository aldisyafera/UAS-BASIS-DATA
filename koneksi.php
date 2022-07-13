<?php
$con = mysqli_connect('localhost','admin_klinik','312010008','klinik_312010008');

if ($con == false)
{

	echo "Koneksi ke server gagal.";
	die();

} 
?>