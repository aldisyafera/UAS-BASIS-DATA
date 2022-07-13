<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: 	#FF4500;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header class="hero">
	<h2 align="center">Tabel Pasien</h2>
	</header>
	<hr>
	<div class="btn-toolbar mb-2 mb-md-10">
        <a class="btn btn-primary me-2" href="data.php" role="button">Kembali</a>
        <a class="btn btn-primary" href="pasien_tambah.php" role="button">Tambah</a>
        
	</div>
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Pasien</td>
                <td>Nama Pasien</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>   
                <td>Aksi </td>             
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM pasien');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['nama_pasien'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['umur'] ?></td>
                <td>
					<a href="pasien_ubah.php?id=<?= $data['id_pasien'];?>" role="button" class="btn btn-success">Edit</a>
					<a href="pasien_hapus.php?id=<?= $data['id_pasien'];?>" role="button" class="btn btn-danger">Hapus</a>
				</td>
            </tr>
        <?php } ?>
    </table>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>