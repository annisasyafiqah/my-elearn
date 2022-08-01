<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$kode = $_GET['kode_materi'];
// echo $id;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM materi WHERE kode_materi='$kode'") or mysqli_error($koneksi);
mysqli_query($koneksi,"DELETE FROM submission WHERE kode='$kode'") or mysqli_error($koneksi);
// After delete redirect to Home, so that latest user list will be displayed.
header("location: materi.php");

?>
