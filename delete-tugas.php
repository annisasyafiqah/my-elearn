<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$kode = $_GET['kode'];
// echo $id;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM tugas WHERE kode='$kode'") or mysqli_error($koneksi);
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location: tugas-guru.php");

?>
