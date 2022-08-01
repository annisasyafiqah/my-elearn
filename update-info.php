
<?php 
include "koneksi.php";
	$id_info = $_GET['id_info'];
	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$konten = $_POST['konten'];
	$namafile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	$dirUpload = "terupload/";
	$link = '".$dirUpload.$namafile"';
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namafile);

	// echo $id_pelajaran;
	// echo $judul;
	// echo $deskripsi;
	// echo $namafile;

	$sql = "UPDATE informasi SET judul='$judul', tanggal='$tanggal', konten='$konten', namafile='$namafile' WHERE id_info =$id_info";

	$a = $koneksi->query($sql);
		if ($a == true) {
			header('location: info-admin.php');
	?>
	<?php 
		} else {
		echo "errooorr";
		}		
	if ($terupload) {
		// echo "Upload berhasil! <br/>";
		// echo "Link: <a href='".$dirUpload.$namafile."'>".$namafile."</a>";
	}else{
		echo "Upload Gagal!";
	}

?>