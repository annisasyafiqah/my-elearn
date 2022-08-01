<?php 
include "koneksi.php";
$nip = $_POST['nip'];
$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$email = $_POST['email'];


$sql= "UPDATE user SET namadepan='$namadepan',namabelakang='$namabelakang', email='$email' where id='$nip'";
$a=$koneksi->query($sql);
			if($a == true){
			
?>
<script language="JavaScript">
        alert('Data guru berhasil diedit!');
        document.location='data-guru.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
				mysqli_error($koneksi);
			}
 ?>
