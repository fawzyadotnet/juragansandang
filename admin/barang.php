<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Barang</h1>
                        </div>

                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar Barang
                                </div>

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <?php 
                                           
                                            if(isset($_GET['pesan'])){
                                                if($_GET['pesan']=="input"){
                                                echo "<div class='alert alert-success'>Berhasil Menambah Data !</div>";
                                                }
                                                if($_GET['pesan']=="edit"){
                                                echo "<div class='alert alert-success'>Berhasil Mengedit Data !</div>";
                                                }
                                                if($_GET['pesan']=="hapus"){
                                                echo "<div class='alert alert-success'>Berhasil Menghapus Data !</div>";
                                                }
                                            }
                                        ?>
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                     <th>Stok</th>
                                                     <th>Harga Satuan</th>
                                                     <th>Opsi</th>
                             
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd gradeX">
                                                  <?php
 include ("koneksi.php");

    $barangSql = "SELECT * from owner";
    $barangQry = mysqli_query($koneksi, $barangSql)  or die ("Query barang salah : ".mysql_error());
     foreach($barangQry as $barangRow) {
    $id_barang = $barangRow['id_barang'];
    ?>
                                                    <td><?php echo $id_barang; ?> </td>
                                                    <td><?php echo $barangRow['nama_barang']; ?></td>
                                                    <td><?php echo $barangRow['total']; ?></td>
                                                    <td>Rp. <?php echo $barangRow['harga_satuan']; ?></td>
                                                    <td><a class="btn btn-danger btn-sm fa fa-trash" href="?page=barang_hapus&kode=<?php echo $id_barang; ?>"onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"> Hapus</a>
                                                    <a class="btn btn-warning fa  fa-edit " href="?page=barang_edit&kode=<?php echo $id_barang; ?>"onclick="return confirm('ANDA YAKIN AKAN MENGEDIT DATA PENTING INI ... ?')"> Edit</a> </td>
                                                    
                                         
                                                </tr>
 
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                  
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>