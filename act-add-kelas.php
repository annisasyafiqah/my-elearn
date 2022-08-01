<?php 
include "koneksi.php";
$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$sql="INSERT INTO kelas (kode_kelas, nama_kelas) 
	 VALUES ('".$kode_kelas."','".$nama_kelas."')";
$a=$koneksi->query($sql);
			if($a == true){
?>

<script language="JavaScript">
        alert('Kelas berhasil ditambahkan!');
        document.location='data-kelas.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>