<?php
	require "koneksi.php";
	require "session.php";
	
	$querypasien = mysqli_query($con, "SELECT * FROM pasien");
	$jumlahpasien = mysqli_num_rows($querypasien);
	
	$queryobat = mysqli_query($con, "SELECT * FROM obat");
	$jumlahobat = mysqli_num_rows($queryobat);
	
	$querydokter = mysqli_query($con, "SELECT * FROM dokter");
	$jumlahdokter = mysqli_num_rows($querydokter);
	
	$queryberobat = mysqli_query($con, "SELECT * FROM berobat");
	$jumlahberobat = mysqli_num_rows($queryberobat);
	
	$queryresep = mysqli_query($con, "SELECT * FROM resep_obat");
	$jumlahresep = mysqli_num_rows($queryresep);
	
	$queryuser = mysqli_query($con, "SELECT * FROM user");
	$jumlahuser = mysqli_num_rows($queryuser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/fontawesome/css/all.css" />
    <title>Home</title>
	
	<style>
		
		.kotak {
			border: solid;
		}
		.summary-pasien{
			background-color: #FF0000;
			border-radius: 15px;
		}
		.summary-obat{
			background-color: #0a516b;
			border-radius: 15px;
		}
		.summary-dokter{
			background-color: #008B8B;
			border-radius: 15px;
		}
		.summary-berobat{
			background-color: #8FBC8F;
			border-radius: 15px;
		}
		.summary-resep{
			background-color: #66CDAA;
			border-radius: 15px;
		}
		.summary-user{
			background-color: #DEB887;
			border-radius: 15px;
		}
		.no-decoration{
			text-decoration: none;
		}
		.navbar{
			background-color: #008080;
		}
		.container-data {
			background-color: #E0FFFF;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow">
        <header>
            <h1 align="center" class="mb-3">RUMAH SAKIT PENGIN SEMBUH</h1>
        </header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="index.php"><i class="fa-solid fa-house-chimney"></i> Home</a>
						</li>
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="data.php"><i class="fa-solid fa-file-medical"></i> Data</a>
						</li>
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-file-medical"></i> Logout</a>
						</li>
					</ul>
				</div>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-light" type="submit">Search</button>
				  </form>
			 </div>
		</nav>
	<div class="container mt-4">
		<h2><i class="fa-solid fa-user"></i> Halo Pak Bos Aldi</h2>
		<hr>
		<div class="container-data mt-4">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-pasien p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-bed-pulse fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">Pasien</h3>
								<p class="fs-4"><?php echo $jumlahpasien; ?> Pasien</p>
								<p> <a href="pasien.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-obat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-capsules fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">Obat</h3>
								<p class="fs-4"><?php echo $jumlahobat; ?> Obat</p>
								<p> <a href="obat.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-dokter p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-user-doctor fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">Dokter</h3>
								<p class="fs-4"><?php echo $jumlahdokter; ?> Dokter</p>
								<p> <a href="dokter.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-berobat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-syringe fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">Berobat</h3>
								<p class="fs-4"><?php echo $jumlahberobat; ?> Berobat</p>
								<p> <a href="berobat1.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-resep p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-receipt fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">Resep</h3>
								<p class="fs-4"><?php echo $jumlahresep; ?> Resep</p>
								<p> <a href="resep_obat.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-user p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-hospital-user fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-white">
								<h3 class="fs-2">User</h3>
								<p class="fs-4"><?php echo $jumlahuser; ?> User</p>
								<p> <a href="user.php" class="text-white no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>