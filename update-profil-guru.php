<?php 
session_start();
include "koneksi.php";
$id = $_POST['id'];
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$jeniskelamin = $_POST['jeniskelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$_SESSION['nisp'] = $id;

$sql="UPDATE user SET namadepan = '$namadepan', namabelakang = '$namabelakang', jeniskelamin = '$jeniskelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', agama = '$agama', notelp = '$notelp', email = '$email', alamat = '$alamat' WHERE id = '$id'";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('edit data berhasil!');
        document.location='profile-guru.php';
    </script>
<?php 			 
		

			}else {
				echo "eroooorrrr";
			}
 ?>
