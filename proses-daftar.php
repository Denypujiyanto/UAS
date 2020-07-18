<?php 
if(isset($_POST['daftar'])){
	include 'db.php';
	if(!is_numeric($_POST['telp'])){
		header("location:form-daftar.php?err1");
	}else{
	$daftar = mysqli_query($koneksi, "INSERT INTO tb_daftar VALUES(
			NULL,
			'".$_POST['nama']."',
			'".$_POST['alamat']."',
			'".$_POST['propinsi']."',
			'".$_POST['telp']."',
			'".$_POST['keahlian']."',
			'".$_POST['email']."')");
	if($daftar){
			header ("location:data-relawan.php");
		}else{
			echo 'noo'.mysqli_error($koneksi);
		}
	}	
}
?>