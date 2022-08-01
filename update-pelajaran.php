<?php 
include 'koneksi.php';

$id_pelajaran = $_POST['id_pelajaran'];
$nama = $_POST['nama'];
$idguru = $_POST['idguru'];

$sql = "UPDATE pelajaran SET nama ='$nama', idguru='$idguru' WHERE id_pelajaran = '$id_pelajaran'";
$a = $koneksi->query($sql);
	if ($a == true) {
?>
<script language="javascript">
	alert('Berhasil diedit!');
	document.location = 'data-pelajaran.php';
</script>
<?php }else{
	mysqli_error($koneksi);
} 
?>