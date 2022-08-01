
<?php 
include "koneksi.php";
$tanggal = $_POST['tanggal'];
$nis = $_POST['nis'];
$kehadiran = $_POST['kehadiran'];
$hadir = "";
$tidakhadir = "";
	if ($kehadiran == "hadir") {
		$hadir = "O";
		$tidakhadir = "X";
	}else{
		$tidakhadir = "O";
		$hadir = "X";
	}
$keterangan = $_POST['keterangan'];
$sql="INSERT INTO absensi (tanggal, nis, hadir, tidakhadir, keterangan) 
	 VALUES ('".$tanggal."','".$nis."','".$hadir."','".$tidakhadir."','".$keterangan."')";
$a=$koneksi->query($sql);
			if($a == true){
				header('location: absensi.php');
?>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>