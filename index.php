<?php
	require "session.php";
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
		.navbar{
			background-color: #008080;
		}
		.hero {
			background-color: #E0FFFF;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		.super {
			background-color: #E6E6FA;
			padding: 50px 23px;
			margin-bottom: 20px;
		}
		
	</style>
</head>
<body>
<div class="container shadow">
        <header>
			<h1 align="center" class="mb-3">Sistem Informasi Klinik</h1>
        </header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="index.php"><i class="fa-solid fa-house-chimney"></i>home</a>

						</li>
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="data.php"><i class="fa-solid fa-file-medical"></i> Data</a>
						</li>
						<li class="nav-item me-4">
							<a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
						</li>
					</ul>
				</div>
			 </div>
		</nav>
		<div>
			<h2>Selamat datang Admin</h2>
			<div class="container mt-4">
				<div class="row">
					<p>Website ini berisi data - data klinik Aldi. website dinamis ini dibuat untuk memenuhi tugas matakuliah Sistem Basis Data pada pertemuan 12.</p>
					<div class="hero">
					<hr class="divider" />
						<article class="entry">
							<h2>Pelayanan Rawat Inap</h2>
							<p style="margin-left: 3px;"><img src="rawat inap.jfif" alt="klinik" width="189px" style="float:left;"> Kami melayani pasien rawat inap menggunakan BPJS maupun asuransi swasta dengan proses yang mudah</p>
						</article>
					</div>
					<div class="super">
					<hr class="divider" />
						<article class="entry ">
							<h2>Pelayanan Rawat Jalan</h2>
							<img src="rawat jalan 1.png" alt="klinik" width="189px" style="float:left;">
							<p style="text-align:justify;"><img src="rawat jalan 2.png" alt="klinik" width="189px" style="float:left;"> Kami melayani pasien rawat jalan menggunakan BPJS maupun asuransi swasta dengan proses yang mudah</p>
						</article>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>