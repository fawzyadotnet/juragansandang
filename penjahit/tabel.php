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
                                                 
                                                    <th>Tanggal</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd gradeX">
                                                  <?php
 include ("koneksi.php");
$id_penjahit=$_SESSION['id_user'];
    $jahitanSql = "SELECT * from jahitan where id_user='$id_penjahit'";
    $jahitanQry = mysqli_query($koneksi, $jahitanSql)  or die ("Query barang salah : ".mysql_error());
     foreach($jahitanQry as $jahitanRow) {
    $id_barang = $jahitanRow['id_barang'];
    ?>
                                                    <td><?php echo $id_barang; ?>  </td>
                                                    
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
                                                        </b>
                                                    </td>
                                                    <td>
                                                    	<?php 

                                                                if ($jahitanRow['status']=='Belum Jahit') {
                                                                    echo "<a href='?page=proses&kode=".$id_barang."' class='fa fa-hand-o-left btn btn-warning'> Proses</a> ";
                                                                    } elseif ($jahitanRow['status']=='Proses Jahit') {
                                                                    echo "<a href='?page=selesai&kode=".$id_barang."' class='fa fa-check-square-o btn btn-success'> Selesai</a>";
                                                                    } else {
                                                                    echo "";
                                                                    }
                                                            ?>



                                                   
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