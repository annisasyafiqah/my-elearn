<?php 
    include "koneksi.php";
    if($_POST['upload']){
    	$id_pelajaran = $_POST['id_pelajaran'];
        $judul    = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $namafile = $_FILES['berkas']['name'];
		$namaSementara = $_FILES['berkas']['tmp_name'];
		$link = '".$dirUpload.$namaFile."';

		echo $id_pelajaran;
		echo $judul;
		echo $deskripsi;
		echo $namafile;
		// tentukan lokasi file akan dipindahkan
		$dirUpload = "terupload/";

		// pindahkan file
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namafile);

			$sql="INSERT INTO materi (id_pelajaran, judul, deskripsi, namafile) VALUES ('".$id_pelajaran."','".$judul."','".$deskripsi."','".$namafile."')";
			$a=$koneksi->query($sql);
						if($a == true){
							// header('location: absensi.php');
			?>
			<?php 			 }else {
							echo "eroooorrrr";
						}
		if ($terupload) {
		    echo "Upload berhasil!<br/>";
		    echo "Link: <a href='".$dirUpload.$namafile."'>".$namafile."</a>";
		} else {
		    echo "Upload Gagal!";
		}
	}
    ?>