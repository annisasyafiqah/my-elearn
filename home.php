<?php 

session_start();

include "koneksi.php";

error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if(!isset($_SESSION['username'])){
	die("Anda belum login");
}

$username = $_SESSION['username'];
$level=$_SESSION['level'];

if ($level=='siswa') {
?>
	<script language="JavaScript">
        alert('Anda Login sebagai siswa');
        document.location='home-siswa.php';
    </script>
<?php 
} elseif ($level=='guru') {
?>
	<script language="JavaScript">
        alert('Anda Login sebagai guru');
        header("location:home-Guru.php");
    </script>
<?php      
}elseif ($level=='admin') {
?>
	<script language="JavaScript">
        alert('Anda Login sebagai admin');
        header("location:home-Admin.php");
    </script>
<?php
}
?>
