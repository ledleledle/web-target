<?php
include 'connect.php';

$data = mysqli_query($conn, "SELECT * FROM artikel");
while ($row = mysqli_fetch_array($data)) {
	echo "<b><a href=content.php?id=".$row['id'].">".$row['judul']."</a></b>";
	echo "<br>".$row['tgl'];
	if(strlen($row['isi']) > 200){
		$str = substr($row['isi'], 0, 200) . '...';
		echo "<br>".$str;
	}else{
	echo "<br>".$row['isi'];
	}
}
?>