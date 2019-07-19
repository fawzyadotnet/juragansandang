<?php
$kode_barang=$_GET['kode'];
                            $barangsql = "SELECT * from owner where id_barang='$kode_barang'";
                            $barangQry = mysqli_query($koneksi, $barangsql)  or die ("Query barang salah : ".mysql_error());
    
                            foreach($barangQry as $barangRow) {

                            $nm_brg = $barangRow['nama_barang'];
                            $stok = $barangRow['total'];
                            $harga_satuan = $barangRow['harga_satuan'];
                         ?>
        <form method="POST">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Jahitan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Input
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="POST">
                             
                                               <div class="form-group">
                                                  
                                                    <input type="hidden"name="id_user" value="<?php echo $_SESSION['id_user']; ?>"class="form-control">
                                                   
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input readonly="" class="form-control" type="text" name="nama_barang" value="<?php echo $nm_brg; ?>">
                                          
                                                </div>
                                                <div class="form-group">
                                                 
                                                <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>"class="form-control" >
                                                
                                                </div>
                                                 <div class="form-group">
                                                    <label>Total</label>
                                                      <input type="text"  name="total" value="1" class="form-control">
                       
                                                    <p class="help-block">Masukan Total yang akan dijahit (<B>STOK= <?php echo $stok ?></B> )</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                 <p>
                                                <select name = "status" class="form-control">
                                                  
                                                    <option values="Belum Jahit">Belum Jahit</option>
                                                 
                                                </select>
                                               
                                                </p>
                                                </div>
                                                
                                                <button type="submit" value="submit" name="submit" class="fa fa-cut btn btn-success"> Tambahkan</button>
                                                
                                            </form>
                                        </div>
                                       <?php } ?>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

     <?php
include 'koneksi.php';
 //var_dump($_POST);
if (isset($_POST['submit'])) {
    try{
                    $nama_barang = $_POST['nama_barang'];
                    $total= $_POST['total'];
                    $total3= $stok-$total;
                    mysqli_query($koneksi, "UPDATE owner SET total='$total3' WHERE id_barang='$kode_barang'");


      $cek_id = $koneksi->query("SELECT * FROM jahitan ORDER BY id_barang DESC");
       $hasil = $cek_id->fetch_assoc();
        $id_barang = '00'.($hasil['id_barang'] + 1);
    
      //  $id_barang = $_POST['id_barang'];
        $id_user = $_POST['id_user'];
        $tanggal = $_POST['tanggal'];    
        $status = $_POST['status'];

        $query_simpan = $koneksi->prepare("INSERT INTO jahitan (id_barang, id_user, nama_barang, tanggal, total, harga_satuan, status) VALUES (?,?,?,?,?,?,?)");
        $query_simpan->bind_param('sssssss', $id_barang, $id_user, $nama_barang, $tanggal, $total, $harga_satuan, $status);
        $query_simpan->execute();
        $query_simpan->close();
        print "<script>
        window.location = '?page=tabel&pesan=input';
        </script>";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>