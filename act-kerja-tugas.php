<?php 
session_start();
include "koneksi.php";
$nis = $_POST['nis'];
$kode= $_GET['kode'];
$namafile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$dirUpload = "terupload/";
$link = '".$dirUpload.$namafile"';
$id_pelajaran = $_GET['id_pelajaran'];
// echo $id_pelajaran;
// echo $nis;
// echo $kode;

$sql = "INSERT INTO submission (kode, namafile, nis) 
		 VALUES ('".$kode."','".$namafile."','".$nis."')";
	$a=$koneksi->query($sql);
			if($a == true){
				// header('location: formlogin.php?id_pelajaran=echo"$id_pelajaran"');
	?>
	<script language="JavaScript">
        alert('Tugas berhasil dikumpulkan!');
        document.location='bindo.php?id_pelajaran=<?php echo $id_pelajaran; ?>';
    </script>
	<?php 	}else {
				echo "eroooorrrr";
			}		
 ?>