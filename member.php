<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Hasil Inputan</title>	
	<style type="text/css">
		html, body {
			width: 100%;
			height: 100%;
			background-image: url("bni.jpg");
			color: navy;
		}
	</style>
</head>
<body>
	<br><br>
	<?php
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$tlp = $_POST['tlp'];
		$alamat = $_POST['alamat'];

		include_once ("koneksi.php");
		$mysqli = "INSERT INTO member(Nama, NIK, Tlp, Alamat) VALUES ('$nama', '$nik', '$tlp', '$alamat')";
		$result = mysqli_query($koneksi, $mysqli);
	?>
	<table border="1px" align="center" width="70%" bgcolor="lightgrey" cellpadding="24">
		<tr>
			<td width="100%" colspan="2"><h2 align="center">Data yang Anda Masukkan</h2></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td><?php echo $nik; ?></td>
		</tr>
		<tr>
			<td>Tlp</td>
			<td><?php echo $tlp; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td width="100%" colspan="2"><p align="center" style="color: red";>Silahkan registrasi ulang di kantor resmi TransJogja dengan membawa fotocopy KK atau KTP</p></td>
			</tr>
	</table>
</body>
</html>