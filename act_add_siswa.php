<?php 
include "koneksi.php";
$nis = $_POST['nis'];
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$level = "siswa";
$sql="INSERT INTO user (id, namadepan, namabelakang, email, level) 
	 VALUES ('".$nis."','".$namadepan."','".$namabelakang."','".$email."','".$level."')";
$a=$koneksi->query($sql);
			if($a == true){

$sql2="INSERT INTO siswa (nis, kelas) 
	 VALUES ('".$nis."','".$kelas."')";
$a2=$koneksi->query($sql2);
			if($a2 == true){
				// header('location: formlogin.php');
				}else {
				echo "eroooorrrr";
			}
?>

<script language="JavaScript">
        alert('Siswa berhasil ditambahkan!');
        document.location='data-siswa.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>