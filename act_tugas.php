<?php 
session_start();
include "koneksi.php";
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$deadline = $_POST['deadline'];
	$kodepelajaran = $_SESSION['matapelajaran'];
	$namafile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	$dirUpload = "terupload/";
	$link = '".$dirUpload.$namafile"';

	$sql="INSERT INTO tugas (judul, deskripsi, deadline, namafile, kodepelajaran) 
		 VALUES ('".$judul."','".$deskripsi."','".$deadline."','".$namafile."','".$kodepelajaran."')";
	$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
	?>
	<script language="JavaScript">
        alert('Tugas berhasil ditambahkan!');
        document.location='class-tugas.php';
    </script>
	<?php 	}else {
				echo "eroooorrrr";
			}		
 	?>