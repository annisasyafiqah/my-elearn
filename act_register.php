<?php 
session_start();
include "koneksi.php";
$id = $_POST['id'];
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$jeniskelamin = $_POST['jeniskelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$password = md5($_POST['password']);
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];
$_SESSION['nisp'] = $id;

$sql="INSERT INTO user (id, namadepan, namabelakang, jeniskelamin, tempat_lahir, tanggal_lahir, agama, password, notelp, email, alamat, level) 
	 VALUES ('".$id."','".$namadepan."','".$namabelakang."','".$jeniskelamin."','".$tempat_lahir."','".$tanggal_lahir."','".$agama."','".$password."','".$notelp."','".$email."','".$alamat."','".$level."')";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Registrasi berhasil!');
        // document.location='login.php';
    </script>
<?php 			 
		if($level=="siswa"){
			header("location:regist-siswa.php");
			
		}elseif ($level=="guru") {
			header("location:regist-guru.php");
			
		}

			}else {
				echo "eroooorrrr";
			}
 ?>
