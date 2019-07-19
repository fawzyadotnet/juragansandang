<?php
if($_GET){
	switch ($_GET['page']) {

		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'barang':
			if(!file_exists("admin/barang.php")) die ("Sorry Empty Page!");
			include "admin/barang.php";
			break;	
		case 'barang_edit':
			if(!file_exists("admin/barang_edit.php")) die ("Sorry Empty Page!");
			include "admin/barang_edit.php";
			break;
		case 'barang_input':
			if(!file_exists("admin/barang_input.php")) die ("Sorry Empty Page!");
			include "admin/barang_input.php";
			break;
		case 'barang_hapus':
			if(!file_exists("admin/barang_hapus.php")) die ("Sorry Empty Page!");
			include "admin/barang_hapus.php";
			break;	
		case 'jahitan':
			if(!file_exists("admin/jahitan.php")) die ("Sorry Empty Page!");
			include "admin/jahitan.php";
			break;	
		case 'jahitan_hapus':
			if(!file_exists("admin/jahitan_hapus.php")) die ("Sorry Empty Page!");
			include "admin/jahitan_hapus.php";
			break;	
		case 'user':
			if(!file_exists("admin/user.php")) die ("Sorry Empty Page!");
			include "admin/user.php";
			break;
		case 'user_input':
			if(!file_exists("admin/user_input.php")) die ("Sorry Empty Page!");
			include "admin/user_input.php";
			break;
		case 'user_hapus':
			if(!file_exists("admin/user_hapus.php")) die ("Sorry Empty Page!");
			include "admin/user_hapus.php";
			break;
		case 'user_edit':
			if(!file_exists("admin/user_edit.php")) die ("Sorry Empty Page!");
			include "admin/user_edit.php";
			break;
		case 'gaji_penjahit':
			if(!file_exists("admin/gaji_penjahit.php")) die ("Sorry Empty Page!");
			include "admin/gaji_penjahit.php";
			break;
		case 'logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;		
			
		default:
			if(!file_exists("/admin/tabel.php")) die ("Empty Page!");
			include "/admin/tabel.php";
			break;
	}
}
?>