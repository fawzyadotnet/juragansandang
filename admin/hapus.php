<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "js";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 


    //perintah untuk melakukan hapus
    //melakukan penghapusan data berdasarkan ID
   $barangSql = "SELECT * from owner WHERE nama_barang=$nama_barang";

    if ($koneksi->query($barangSql) === TRUE) {
        //jika  berhasil langsung diarahkan kembali ke file bootstrap.php
        header('location:bootstrap.php');
    } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan penghapusan data: " . $koneksi->error;
    }

    $koneksi->close();
?>