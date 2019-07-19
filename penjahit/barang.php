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
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                     <th>Stok</th>
                                                     <th>Harga Satuan</th>
                                                     <th>Jahit</th>
                             
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
                                                    <td><?php echo $barangRow['harga_satuan']; ?></td>
                                                    <td><a class="fa fa-cut btn btn-primary" href="?page=input&kode=<?php echo $id_barang; ?>"> Jahit</a> </td>
                                         
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