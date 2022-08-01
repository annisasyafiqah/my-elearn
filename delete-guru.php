<?php
// include database connection file
include 'koneksi.php';
 
// Get id from URL to delete that user
$id = $_GET['id'];
// echo $id;
 
// Delete user row from table based on given id
mysqli_query($koneksi,"DELETE FROM user WHERE id='$id'") or mysqli_error($koneksi);
mysqli_query($koneksi,"DELETE FROM guru WHERE nip='$id'") or mysqli_error($koneksi);
 
// After delete redirect to Home, so that latest user list will be displayed.
header("location: data-guru.php");
?>