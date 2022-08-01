<?php 
include "koneksi.php";
$nis = $_POST['nis'];
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];

// echo $nis;
// echo $namadepan;
// echo $namabelakang;
// echo $email;
// echo $kelas;

$sql= "UPDATE user SET namadepan='$namadepan',namabelakang='$namabelakang', email='$email' where id='$nis'";
$a=$koneksi->query($sql);
			if($a == true){
			$sql2= "UPDATE siswa SET kelas=$kelas where nis='$nis'";
			$a2=$koneksi->query($sql2);
?>
<script language="JavaScript">
        alert('Data siswa berhasil diedit!');
        document.location='data-siswa.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
				mysqli_error($koneksi);
			}
 ?>
