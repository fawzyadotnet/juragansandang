<form method="POST">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambahkan User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Pendaftaran
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="POST">
                             
                                    
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username"  class="form-control">
                                                    <p class="help-block">Masukan Username</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password"  class="form-control">
                                                    <p class="help-block">Masukan Password</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama User</label>
                                                    <input type="text" name="nama_user"  class="form-control">
                                                    <p class="help-block">Masukan Nama User</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Level</label>
                                                 
                                                    <select name="level" class="form-control">
                                                        <option>penjahit</option>
                                                        <option>admin</option>
                                                    </select>
                                                    <p class="help-block">Masukan Level</p>
                                                </div>
                                                
                                                <button onclick="return confirm('ANDA YAKIN AKAN Menambah DATA PENTING INI ... ?')" type="submit" value="submit" name="submit" class="btn btn-primary fa fa-user-plus"> Daftarkan</button>
                                            
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
      $cek_id = $koneksi->query("SELECT * FROM user ORDER BY id_user DESC");
       $hasil = $cek_id->fetch_assoc();
        $id_user = '00'.($hasil['id_user'] + 1);
    
      //  $id_barang = $_POST['id_barang'];
      
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_user = $_POST['nama_user'];
        $level = $_POST['level'];

        $query_simpan = $koneksi->prepare("INSERT INTO user (id_user, username, password, nama_user, level) VALUES (?,?,?,?,?)");
        $query_simpan->bind_param('sssss', $id_user, $username, $password, $nama_user, $level);
        $query_simpan->execute();
        $query_simpan->close();
        print "<script>
        window.location = '?page=user&pesan=tambah&pesan=input';
        </script>";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
?>