<?php 
include "koneksi.php";
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$kode = $_POST['kode'];
$namafile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$dirUpload = "terupload/";
$link = '".$dirUpload.$namafile"';
// echo $kode_kelas;
// echo $nama_kelas;
// echo $idguru;

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namafile);

$sql= "UPDATE tugas SET judul='$judul', deskripsi='$deskripsi' where kode='$kode'";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Berhasil diedit!');
        document.location='class-tugas.php';
    </script>
<?php 			 }else {
					mysqli_error($koneksi);
			}
 ?>
