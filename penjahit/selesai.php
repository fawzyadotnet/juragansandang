<?php  
include 'koneksi.php';
$id_barang=$_GET['kode'];
mysqli_query($koneksi, "UPDATE jahitan SET status='Sudah Jahit' WHERE id_barang='$id_barang'");
 

	$id_penjahit= $_SESSION['id_user'];
    $jahitanSql = "SELECT * from jahitan where id_barang='$id_barang'";
    $jahitanQry = mysqli_query($koneksi, $jahitanSql)  or die ("Query barang salah : ".mysql_error());
     foreach($jahitanQry as $jahitanRow) {
    $tanggal 		= $jahitanRow['tanggal'];
    $id_user 		= $jahitanRow['id_user'];
    $nama_barang 	= $jahitanRow['nama_barang'];
    $total 			= $jahitanRow['total'];
    $harga_satuan 	= $jahitanRow['harga_satuan'];
}
    $total_harga 	= $total*$harga_satuan;
    
    $sql = "INSERT INTO gaji_penjahit (tanggal, id_user, nama_barang, total, harga_satuan, total_harga) VALUES ('$tanggal', '$id_user', '$nama_barang', '$total', '$harga_satuan', '$total_harga')";
		mysqli_query($koneksi, $sql);

echo "<meta http-equiv='refresh' content='0; url=?page=tabel'>";

?>