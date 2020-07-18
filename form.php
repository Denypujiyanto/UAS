<html>
<head>
	<title>Daftar Relawan Covid-19 Wilayah DKI Jakarta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<head>
		<title>Halaman Beranda</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<header>
			<ul>
				<a href="index.php"><li>Beranda</li></a>
				<a href="form.php"><li>Daftar</li></a>
				<a href="data-relawan.php"><li>Data Relawan</li></a>
				<a href="keluar.php"><li>Keluar</li></a>
			</ul>
		</header>
		<div class="box-form">
			<h3>Form Data Relawan Covid-19</h3><hr><br>
			<?php 
			if(isset($_GET['err1'])){
				echo '<div class="alert-error">Maaf, nomor telepon harus angka!!!</div>';
			}
			?>
			<form action="proses-daftar.php" method="post">
				Nama :<br>
				<input type="text" name="nama" required/><br><br>
				Alamat :<br>
				<textarea name="alamat" rows="5" cols="50"></textarea><br><br>
				Nama Propinsi :<br>
				<input type="text" name="propinsi" required/><br><br>
				No. Telepon :<br>
				<input type="text" name="telp" required/><br><br>
				Keahlian :<br>
				<input type="keahlian" name="keahlian" required/><br><br>
				Email :<br>
				<input type="email" name="email" required/><br><br>
				<input type="submit" name="daftar" value="Daftar">
			</form>
		</div>
		<footer>
			Copyright &copy; 2020 Deny Pujiyanto.
		</footer>
</body>
</html>