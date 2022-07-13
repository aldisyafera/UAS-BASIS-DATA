<?php
error_reporting(E_ALL);
include 'koneksi.php';

if (isset($_POST['submit']))
{
	$id = $_POST['id_pasien'];
	$nama = $_POST['nama_pasien'];
	$gender = $_POST['jenis_kelamin'];
	$age = $_POST['umur'];
	$sql = 'INSERT INTO pasien (id_pasien, nama_pasien, jenis_kelamin, umur)';
	$sql .= "VALUE ('{$id}', '{$nama}', '{$gender}', '{$age}')";
	$result = mysqli_query($con, $sql);
	header('location: pasien.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<title>Tambah Pasien</title>
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
		<h2 align="center" class="text-white">Tambah pasien</h2>
		</header>
		<hr>
			<div class="main">
				<form method="post" action="pasien_tambah.php" enctype="multipart/form-data">
					
					<div class="input mb-3">
						<label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
						<input type="text" class="form-control" name="nama_pasien">
					</div>
					<div class="input">
						<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
						<select name="jenis_kelamin">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
						</select>
					</div>
					<div class="input mb-3">
						<label for="umur" class="col-sm-2 col-form-label">umur</label>
						<input type="number" class="form-control" name="umur">
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