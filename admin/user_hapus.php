<?php
//include'koneksi.php';
if($_GET) {
	if(empty($_GET['kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM user WHERE id_user='".$_GET['kode']."'";
		$qryDelete = mysqli_query($koneksi, $sqlDelete) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			echo "<meta http-equiv='refresh' content='0; url=?page=user&pesan=hapus'>";
		}
	}
}
?>