<?php
	echo "<table border=0>";
	$fp = fopen("komentar4.txt", "r");
	while ($isi = fgets($fp, 100)) {
		$pisah = explode("|", $isi);
		echo "<tr><td>Nama </td><td> : $pisah[0]</td></tr>";
		echo "<tr><td>Email </td><td> : $pisah[1]</td></tr>";
		echo "<tr><td>Komentar</td><td> : $pisah[2]</td></tr>";
		echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}
	echo"</table>";
	fclose($fp);
?>