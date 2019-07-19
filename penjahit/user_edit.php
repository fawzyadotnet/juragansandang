<form method="POST">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Profile</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Edit
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php 
    include "koneksi.php";
    $id_user = $_GET['kode'];
    $query_mysqli = $koneksi->query("SELECT * FROM user WHERE id_user='$id_user'")or die(mysqli_error());
    while($data = mysqli_fetch_array($query_mysqli)){
    ?>

                                              <form role="form" method="POST">
                             
                                    
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Username</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Password</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama User</label>
                                                    <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" class="form-control">
                                                    <p class="help-block">Masukan Nama User</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Level</label>
                                                 
                                                    <select name="level" class="form-control">
                                                        <option>penjahit</option>
                                                   
                                                    </select>
                                                    <p class="help-block">Masukan Level</p>
                                                </div>
                                                <?php } ?>
                                                <button onclick="return confirm('ANDA YAKIN AKAN MENGEDIT DATA PENTING INI ... ?')" type="submit" value="submit" name="submit" class="btn btn-primary fa fa-save"> Simpan</button>
                                              
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
      
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_user = $_POST['nama_user'];
        $level = $_POST['level'];

        mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama_user='$nama_user', level='$level' WHERE id_user='$id_user'");

        print "<script>alert('Berhasil Mengedit User')
        window.location = '?page=tabel';
        </script>";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>