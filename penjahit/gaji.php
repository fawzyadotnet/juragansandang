<?php
 ?>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Gaji</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Laporan Gaji
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
                                                    <th>Tanggal</th>
                                                    <th>Nama Penjahit</th>
                                                    <th>Nama Barang</th>                                           
                                                    <th>Qty</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total Harga</th>
                                           
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd gradeX">
                                                  <?php
 include ("koneksi.php");
    $id_saya=$_SESSION['id_user'];
    $GajiSql = "SELECT * from gaji_penjahit WHERE id_user='$id_saya' INNER JOIN user ON user.id_user=gaji_penjahit.id_user ";
    $GajiQry = mysqli_query($koneksi, $GajiSql)  or die ("Query barang salah : ".mysql_error());
     foreach($GajiQry as $JahitanQry) {
    $total[]=$JahitanQry['total_harga'];
    $jumlahnya = array_sum($total);
    ?>
                                                  
                                                    <td><?php echo $JahitanQry['tanggal']; ?></td>
                                                    <td><?php echo $JahitanQry['nama_user']; ?></td>
                                                    <td><?php echo $JahitanQry['nama_barang']; ?></td>
                                                    <td><?php echo $JahitanQry['total']; ?></td>
                                                    <td><?php echo $JahitanQry['harga_satuan']; ?></td>
                                                    <td><?php echo $JahitanQry['total_harga']; ?></td>
                                                

                                                </tr>
    <?php } ?>
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                         <?php

echo "<strong>Total Gaji = Rp. $jumlahnya</strong>";
    ?>                                               
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