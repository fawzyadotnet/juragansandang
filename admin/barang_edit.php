<form method="POST">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Data Barang</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Barang
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php 
    include "koneksi.php";
    $id_barang = $_GET['kode'];
    $query_mysqli = $koneksi->query("SELECT * FROM owner WHERE id_barang='$id_barang'")or die(mysqli_error());
    while($data = mysqli_fetch_array($query_mysqli)){
    ?>

                                              <form role="form" method="POST">
                             
                                    
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Nama Barang</p>
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label>Stok</label>
                                                    <input type="text" name="total" value="<?php echo $data['total'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Total</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Harga Satuan</label>
                                                    <input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Harga satuan</p>
                                                </div>
                                                
                                                <?php } ?>
                                                <button onclick="return confirm('ANDA YAKIN AKAN MENGEDIT DATA PENTING INI ... ?')" type="submit" value="submit" name="submit" class="btn btn-primary fa  fa-check-square-o ">Simpan</button>
                                             
                                            </form>
                                        </div>
                                       
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

        
    
      //  $id_barang = $_POST['id_barang'];
      
        $nama_barang = $_POST['nama_barang'];
        $total = $_POST['total'];
        $harga_satuan = $_POST['harga_satuan'];
  

        mysqli_query($koneksi, "UPDATE owner SET nama_barang='$nama_barang', total='$total', harga_satuan='$harga_satuan' WHERE id_barang='$id_barang'");

        print "<script>
        window.location = '?page=barang&pesan=edit&pesan=edit';
       </script>";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>