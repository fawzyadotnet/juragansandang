<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Daftar User
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
                                                    <th>ID User</th>
                                                    <th>Username</th>
                                                     <th>Nama User</th>
                                                     <th>Level</th>
                                                     <th>Opsi</th>
                             
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd gradeX">
                                                  <?php
 include ("koneksi.php");

    $userSQL = "SELECT * from user";
    $userQRY = mysqli_query($koneksi, $userSQL)  or die ("Query barang salah : ".mysql_error());
     foreach($userQRY as $userRow) {
    $id_user = $userRow['id_user'];
    ?>
                                                    <td><?php echo $id_user; ?> </td>
                                                    <td><?php echo $userRow['username']; ?></td>
                                                    <td><?php echo $userRow['nama_user']; ?></td>
                                                    <td><?php echo $userRow['level']; ?></td>
                                                    <td><a class="btn btn-danger btn-sm fa  fa-trash " href="?page=user_hapus&kode=<?php echo $id_user; ?>"onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"> Hapus</a>  <a class="btn btn-warning fa  fa-edit " href="?page=user_edit&kode=<?php echo $id_user; ?>"onclick="return confirm('ANDA YAKIN AKAN MENGEDIT DATA PENTING INI ... ?')"> Edit</a> </td>
                                                    
                                         
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