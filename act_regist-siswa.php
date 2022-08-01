
<?php 
include "koneksi.php";
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];

$sql="INSERT INTO siswa (nis, kelas) 
	 VALUES ('".$nis."','".$kelas."')";
$a=$koneksi->query($sql);
			if($a == true){
				// header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Berhasil mendaftar sebagai siswa!');
        document.location='login.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>