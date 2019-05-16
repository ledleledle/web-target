<?php
include 'connect.php';

$data = mysqli_query($conn, "SELECT * FROM artikel");
while ($row = mysqli_fetch_array($data)) {
	echo "<b>".$row['judul']."</b>";
	echo "<br>".$row['tgl'];
	echo "<br>".$row['isi'];
}
?>