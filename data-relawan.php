<html>
<head>
	<title>Data Relawan Covid-19</title>
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
	<div class="box-data">
		<center>
		<h3>Data Relawan Covid19 wilayah DKI Jakarta </h3>
		<body onload="viewjam(); hari();">
		<div><i>Per</i> <strong><big><a id="tampilhari"></a></big></strong>
		<i></i> <strong><big><a id="tampiljam"></a></big></strong></div></h2>
		<h3 align="center"> Deny Pujiyanto / 2015141373 </h3><hr><br>
		</center>
		<table border="1" style="width:100%;border-collapse:collapse;text-align:center;" cellspacing="0">
			<tr style="hight:30px;">
				<td>Id</td>
				<td>Nama</td>
				<td>Alamat</td>
				<td>Propinsi</td>
				<td>Telpon</td><td>
				<td>Keahlian</td>
				<td>Email</td>
			</tr>
			<?php
			include 'db.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
			while($row = mysqli_fetch_array($data)){
			?>
			<tr style="hight:30px;">
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['nama_propinsi'] ?></td>
				<td><?php echo $row['no._telepon'] ?></td><td>
				<td><?php echo $row['keahlian'] ?></td>
				<td><?php echo $row['email'] ?></td>				
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>

var hariseminggu = new Array('Ahad','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
          var bulansetahun = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
         
          function hari(){
                   var hariini;
                   var hari = new Date();//membuat objek waktu
                   hariini = hariseminggu[hari.getDay()]+", "+hari.getDate()+" "+bulansetahun[hari.getMonth()]+" "+hari.getFullYear();//menempatkan data waktu pada variabel
                   document.getElementById('tampilhari').innerHTML=hariini; //menampilkan variabel hariini pada html
                   setTimeout('hari()',300); //meload function secara terus menerus
          }
		   
		   function viewjam(){
                   var jam;
                   var jamku = new Date();//membuat objek waktu
                   jam = " "+jamku.getHours()+":"+jamku.getMinutes()+":"+jamku.getSeconds();//menempatkan data waktu pada variabel
                   document.getElementById('tampiljam').innerHTML=jam;//menampilkan variabel jam pada html
                   setTimeout('viewjam()',0);//meload function secara terus menerus
          }

</script>
</body>
</html>