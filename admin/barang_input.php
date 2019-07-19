
       <script type="text/javascript">
           function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
       </script> 
<form method="POST">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">INPUT Barang</h1>
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
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang"  class="form-control">
                                                    <p class="help-block">Masukan Nama Barang</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Barang</label>
                                                    <input type="text" name="total"  onkeypress="return isNumberKey(event)" class="form-control">
                                                    <p class="help-block">Masukan Total Barang</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>harga satuan</label>
                                                    <input type="text" name="harga_satuan"  onkeypress="return isNumberKey(event)" class="form-control">
                                                    <p class="help-block">Masukan harga satuan</p>
                                                </div>
                                                <button onclick="return confirm('ANDA YAKIN AKAN Menambah DATA PENTING INI ... ?')" type="submit" value="submit" name="submit" class="btn btn-primary fa fa-cart-plus"> Tambahkan</button>
                                               
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
      $cek_id = $koneksi->query("SELECT * FROM owner ORDER BY id_barang DESC");
       $hasil = $cek_id->fetch_assoc();
        $id_barang = '00'.($hasil['id_barang'] + 1);
    
      //  $id_barang = $_POST['id_barang'];
      
        $nama_barang = $_POST['nama_barang'];
        $total = $_POST['total'];
        $harga_satuan = $_POST['harga_satuan'];

        $query_simpan = $koneksi->prepare("INSERT INTO owner (id_barang, nama_barang, total, harga_satuan) VALUES (?,?,?,?)");
        $query_simpan->bind_param('ssss', $id_barang, $nama_barang, $total, $harga_satuan);
        $query_simpan->execute();
        $query_simpan->close();
        print "<script>
        window.location = '?page=barang&pesan=input';
        </script>";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>