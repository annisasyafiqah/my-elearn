<?php 
include "koneksi.php";
$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
// echo $kode_kelas;
// echo $nama_kelas;
// echo $idguru;

$sql= "UPDATE kelas SET nama_kelas='$nama_kelas' where kode_kelas='$kode_kelas'";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Berhasil diedit!');
        document.location='data-kelas.php';
    </script>
<?php 			 }else {
					mysqli_error($koneksi);
			}
 ?>
