    <div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:80%; height:475px;">
    <font color="orange" size="3">Hasil Tampil Data</font>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FF6600">
        <th width="5">No</td> 
        <th width="80" height="42">NIM</td> 
        <th width="160">Nama Mahasiswa</td> 
        <th width="70">Jurusan</td>       
        <th width="60">Alamat</td> 
        <th width="60">Telepon</td>     
    </tr>
    <?php
        include ("koneksi1.php");
        $Cari="SELECT * FROM jahitan ORDER BY id_barang";
        $Tampil = mysql_query($Cari);
        if ($Tampil === FALSE) {
     die(mysql_error());
}
        
        while (    $hasil = mysql_fetch_array ($Tampil)) {
                $id_barang    = stripslashes ($hasil['id_barang']);
                $id_user             = stripslashes ($hasil['id_user']);
                $tanggal         = stripslashes ($hasil['tanggal']);
                $nama_barang         = stripslashes ($hasil['nama_barang']);
                $status         = stripslashes ($hasil['status']);
            {
        
    ?>
        <tr align="center" bgcolor="#DFE6EF">
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr align="center">
            <td height="32"><?=$nomer?></td>
            <td><?=$id_barang?></td>
            <td><?=$id_user?></td>
            <td><?=$tanggal?></td>
            <td><?=$nama_barang?></td>
            <td><?=$status?></td>
        </tr>
        <tr align="center" bgcolor="#DFE6EF">
            <td> </td>
            <td> </td>
            <td> </td> 
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    <?php  
            }
        }
        
    ?>
    </table>
    </div>
