
<?php 
include "koneksi.php";
if ($_POST['upload']) {
	$kode_materi = $_POST['kode_materi'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$namafile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	$dirUpload = "terupload/";
	$link = '".$dirUpload.$namafile"';

	// echo $id_pelajaran;
	// echo $judul;
	// echo $deskripsi;
	// echo $namafile;

	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namafile);
	$sql = "UPDATE materi SET judul='$judul', deskripsi='$deskripsi', namafile='$namafile'";
	$a = $koneksi->query($sql);
		if ($a == true) {
			header('location: ixa-guru.php');
	?>
	<?php 
		} else {
		echo "errooorr";
		}		
	if ($terupload) {
		// echo "Upload berhasil! <br/>";
		// echo "Link: <a href='".$dirUpload.$namafile."'>".$namafile."</a>";
	}else{
		// echo "Upload Gagal!";
	}
}
?>