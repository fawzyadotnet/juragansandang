<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Jahitan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar Jahitan
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
                                                    <th>Nama Penjahit</th>
                                                    <th>Tanggal</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Status</th>
                                                    <th>Hapus</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd gradeX">
                                                  <?php
 include ("koneksi.php");

    $jahitanSql = "SELECT * from jahitan INNER JOIN user ON user.id_user=jahitan.id_user";
    $jahitanQry = mysqli_query($koneksi, $jahitanSql)  or die ("Query barang salah : ".mysql_error());
     foreach($jahitanQry as $jahitanRow) {
    $id_barang = $jahitanRow['id_barang'];
    ?>
                                                    <td><?php echo $id_barang; ?> </td>
                                                    <td><?php echo $jahitanRow['nama_user']; ?></td>
                                                    <td><?php echo $jahitanRow['tanggal']; ?></td>
                                                    <td><?php echo $jahitanRow['nama_barang']; ?></td>
                                                    <td><?php echo $jahitanRow['total']; ?></td>
                                                    <td><?php echo $jahitanRow['harga_satuan']; ?></td>
                                                    <td><b><?php 

                                                                if ($jahitanRow['status']=='Belum Jahit') {
                                                                    echo "<p style='text-align:center;color:red;'>Belum Dijahit</p>";
                                                                    } elseif ($jahitanRow['status']=='Proses Jahit') {
                                                                    echo "<p style='text-align:center;color:orange;'>Sedang Diproses</p>";
                                                                    } else {
                                                                    echo "<p style='text-align:center;color:green;'>Selesai</p>";
                                                                    }
                                                            ?>
                                                        </b></td>
                                                    <td><a onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')" class="btn btn-danger fa fa-trash" href="?page=jahitan_hapus&kode=<?php echo $id_barang; ?>"> Hapus</a> </td>
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