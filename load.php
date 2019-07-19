<?php
if($_GET){
	switch ($_GET['page']) {
		case '':
			if(!file_exists("main.php")) die ("Empty Main Page!");
			include "Main.php";
			break;
		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'tabel':
			if(!file_exists("tabel.php")) die ("Sorry Empty Page!");
			include "tabel.php";
			break;	
		case 'logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;		
			
		default:
			if(!file_exists("tabel.php")) die ("Empty Page!");
			include "tabel.php";
			break;
	}
}
?>