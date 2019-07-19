<?php
//include'koneksi.php';
if($_GET) {
	if(empty($_GET['kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM jahitan WHERE id_barang='".$_GET['kode']."'";
		$qryDelete = mysqli_query($koneksi, $sqlDelete) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			echo "<meta http-equiv='refresh' content='0; url=?page=jahitan&pesan=hapus'>";
		}
	}
}
?>