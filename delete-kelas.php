<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$kode_kelas = $_GET['kode_kelas'];
echo $kode_kelas;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM kelas WHERE kode_kelas=$kode_kelas");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location: data-kelas.php");

?>
