Pilih Barang : 
<select name="Barang">
    <option>--- Pilih Barang ---</option>
    <?php
    include ("koneksi.php");

    $jahitanSql = "SELECT * FROM owner ORDER BY barang_nama";
    $jahitanQry = mysqli_query($koneksi, $jahitanSql)  or die ("Query barang salah : ".mysql_error());{
        while($row = mysql_fetch_array($koneksi)){
            echo '<option>'.$row['barang_nama'].'</option>';
        }
    }
    ?>
</select>
</p>

