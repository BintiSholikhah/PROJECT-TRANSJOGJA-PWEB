<?php
	$nama     = $_POST['nama'];
	$email    = $_POST['email'];
	$komentar = $_POST['komentar'];

	$fp = fopen("komentar3.txt", "a+");
	fputs($fp, "$nama |  $email   |   $komentar\n");
	fclose($fp);

	include"lihat3.php";
?>