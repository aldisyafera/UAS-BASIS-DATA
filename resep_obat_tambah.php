<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{
	$id = $_POST['id_resep'];
	$nama = $_POST['id_berobat'];
	$gender = $_POST['id_obat'];
	$sql = 'INSERT INTO resep_obat (id_resep,id_berobat, id_obat)';
	$sql .= "VALUE ('{$id}', '{$nama}', '{$gender}')";
	$result = mysqli_query($con, $sql);
	header('location: resep_obat.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<title>Tambah Resep Obat</title>
	<style>
	.aldi {
		background-color: 	#DEB887;
		border-radius: 5px;
		padding: 10px 23px;
		margin-bottom: 20px;
	}
	form div > label {
			display: inline-block;
			width: 100px;
			height: 30px;
	}
	form div > label {
			display: inline-block;
			width: 100px;
			height: 50px;
	}
	form input[type="text"], form textarea {
			border: 1px solid;
	}
	
	.main{
		height: 100vh;
	}
	
	.tambah-box{
		width: 900px;
		height: 600px;
		box-sizing: border-box;
		border-radius: 10px
	}
	</style>
</head>
<body>
	<div class="main d-flex flex-column justify-content-center align-items-center">
		<div class="tambah-box p-5 shadow">
		<header class="aldi">
		<h2 align="center" class="text-white">Tambah Resep Obat</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="resep_obat.php" enctype="multipart/form-data">
				<div class="input mb-3">
						<label for="id_resep" class="col-sm-2 col-form-label">ID Resep</label>
						<input type="number" class="form-control" name="id_resep">
					</div>
				    <div class="input mb-3">
						<label for="id_berobat" class="col-sm-2 col-form-label">ID Berobat</label>
						<input type="number" class="form-control" name="id_berobat">
					</div>
					
					<div class="input mb-3">
						<label for="id_obat" class="col-sm-2 col-form-label">Id Obat</label>
						<input type="number" class="form-control" name="id_obat">
					</div>
					<div class="submit">
						<input class="btn btn-primary mt-2" type="submit" name="submit" value="Simpan Data" />

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>