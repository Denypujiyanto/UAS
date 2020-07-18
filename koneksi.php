<?php
	$conn =mysqli_connect('localhost','root','','tutorlogin');
	if(!$conn){
		echo 'gagal terhubung ke database';
	}
?>