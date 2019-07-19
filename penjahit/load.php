<?php
if($_GET){
	switch ($_GET['page']) {

		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'tabel':
			if(!file_exists("penjahit/tabel.php")) die ("Sorry Empty Page!");
			include "penjahit/tabel.php";
			break;	
		case 'user_edit':
			if(!file_exists("penjahit/user_edit.php")) die ("Sorry Empty Page!");
			include "penjahit/user_edit.php";
			break;	
		case 'input':
			if(!file_exists("penjahit/input.php")) die ("Sorry Empty Page!");
			include "penjahit/input.php";
			break;	
		case 'barang':
			if(!file_exists("penjahit/barang.php")) die ("Sorry Empty Page!");
			include "penjahit/barang.php";
			break;	
		case 'proses':
			if(!file_exists("penjahit/proses.php")) die ("Sorry Empty Page!");
			include "penjahit/proses.php";
			break;	
		case 'selesai':
			if(!file_exists("penjahit/selesai.php")) die ("Sorry Empty Page!");
			include "penjahit/selesai.php";
			break;
		case 'gaji':
			if(!file_exists("penjahit/gaji.php")) die ("Sorry Empty Page!");
			include "penjahit/gaji.php";
			break;
		case 'logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;		
			
		default:
			if(!file_exists("/penjahit/tabel.php")) die ("Empty Page!");
			include "/penjahit/tabel.php";
			break;
	}
}
?>