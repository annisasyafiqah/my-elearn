<?php 
include "koneksi.php";
$id_pelajaran = $_POST['id_pelajaran'];
$nama = $_POST['nama'];
$idguru = $_POST['idguru'];
echo $id_pelajaran;
echo $nama;
echo $idguru;

$sql="INSERT INTO pelajaran (id_pelajaran, nama, idguru) 
	 VALUES ('".$id_pelajaran."','".$nama."','".$idguru."')";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Pelajaran berhasil ditambahkan!');
        document.location='data-pelajaran.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>