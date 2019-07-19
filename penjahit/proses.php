<?php  
include 'koneksi.php';
$id_barang=$_GET['kode'];
 
mysqli_query($koneksi, "UPDATE jahitan SET status='Proses Jahit' WHERE id_barang='$id_barang'");
 
	echo "<meta http-equiv='refresh' content='0; url=?page=tabel'>";

?>