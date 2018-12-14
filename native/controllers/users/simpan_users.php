<?php
include"../../include/koneksi.php";
$role_name = trim($_POST[role_name]);
$id = $_POST[id];
if($id =="0"){
	$sqlcek 	= $mysqli->query("Select * from roles where id_role='$id' ");
	$cek 			= mysqli_num_rows($sqlcek);
	// //untuk cek data
	if(!$cek){
	  // //jika data tidak tersedia cuy
		$mysqli->query("insert into roles set role_name='$role_name'");
		echo"Data berhasil disimpan";
		}else{
			echo"Data gagal disimpan";
		}
	}else{
		$mysqli->query("update users setrole_name='$role_name' where
							id_role='$id' ");
		echo"Data berhasil diubah";
	}

?>
