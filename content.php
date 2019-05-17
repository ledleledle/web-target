<?php
include 'connect.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM artikel WHERE id={$id}") or die(mysqli_error($conn));
$row = mysqli_fetch_array($data);
echo $row['judul'];
echo $row['tgl'];
?>