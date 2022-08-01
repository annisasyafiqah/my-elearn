<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$id_pelajaran = $_GET['id_pelajaran'];
echo $id_pelajaran;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM pelajaran WHERE id_pelajaran='$id_pelajaran'");
mysqli_query($koneksi,"DELETE FROM materi WHERE id_pelajaran='$id_pelajaran'");
// After delete redirect to Home, so that latest user list will be displayed.
header("location: data-pelajaran.php");

?>
