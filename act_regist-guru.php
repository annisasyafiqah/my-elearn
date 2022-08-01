
<?php 
include "koneksi.php";
$nip = $_POST['nip'];
$matapelajaran = $_POST['matapelajaran'];

$sql="INSERT INTO guru (nip, matapelajaran) 
	 VALUES ('".$nip."','".$matapelajaran."')";
$a=$koneksi->query($sql);
			if($a == true){
				// header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Berhasil mendaftar sebagai guru!');
        document.location='login.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>