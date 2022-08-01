<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$id_info = $_GET['id_info'];
// echo $id;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM informasi WHERE id_info='$id_info'") or mysqli_error($koneksi);
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location: info-admin.php");

?>
