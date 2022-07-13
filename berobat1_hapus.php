<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM berobat1 WHERE id_berobat1 = '{$id}'";
	$result = mysqli_query($con, $sql);
	header('location: berobat1.php');
?>