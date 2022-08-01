<?php 
session_start();
include "koneksi.php";

$id = $_POST['id'];
$password = md5($_POST['password']);

$op = $_GET['op'];

if($op == "in"){

	$query_l="SELECT * from user where id = '$id' AND password = '$password'";
	$h_l = $koneksi ->query($query_l);
	
	if(mysqli_num_rows($h_l)==1){
		$d_l = $h_l ->fetch_array();

		$_SESSION['id'] = $d_l['id'];
		$_SESSION['level'] = $d_l['level'];
		$_SESSION['namadepan'] = $d_l['namadepan'];
		$_SESSION['namabelakang'] = $d_l['namabelakang'];
		$_SESSION['jeniskelamin'] = $d_l['jeniskelamin'];
		$_SESSION['alamat'] = $d_l['alamat'];
		$_SESSION['notelp'] = $d_l['notelp'];
		$_SESSION['email'] = $d_l['email'];


	$level = $_POST['level'];

		if($d_l['level']=="siswa"){
			header("location:home-siswa.php");
			
		}elseif ($d_l['level']=="guru") {
			$query_g="SELECT * from guru WHERE nip=$id";
			$h_g = $koneksi->query($query_g);
			if (mysqli_num_rows($h_g)==1) {
				$d_g = $h_g -> fetch_array();
				
				$_SESSION['matapelajaran'] = $d_g['matapelajaran'];
			}
			header("location:home-guru.php");
			
		}elseif ($d_l['level']=="admin") {
			header("location:home-admin.php");
			
		}

	}else{
?>
    <script language="JavaScript">
        alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
        document.location='login.php';
    </script>
<?php
    }

}else if($op=="out"){
    unset($_SESSION['id']);
    unset($_SESSION['level']);
    unset($_SESSION['namadepan']);
    unset($_SESSION['namabelakang']);
    unset($_SESSION['jeniskelamin']);
    unset($_SESSION['alamat']);
    unset($_SESSION['notelp']);
    unset($_SESSION['email']);
    unset($_SESSION['matapelajaran']);
    header("location:login.php");
}
?>

 <?php 
setcookie($username, time() + (86400 * 30), "/"); 
 ?>