<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Opsi</th>       
    </tr>
    <?php 
    include "koneksi.php";
    $query_mysql = mysql_query("SELECT * FROM jahitan")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama_barang']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td>
        <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>               
        </td>
    </tr>
    <?php } ?>
</table>