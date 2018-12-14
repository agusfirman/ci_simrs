<?php
include '../../include/koneksi.php';
$id_pc		= $_POST[id];
$sql 	= $mysqli->query("SELECT * FROM p_computer WHERE id_pc= '$id_pc'");
$row	= mysqli_num_rows($sql);
if ($row){
	$del_pc =$mysqli->query("DELETE FROM p_computer WHERE id_pc= '$id_pc'");
	if($del_pc){
		echo "data berhasil terhapus";
	}
}
?>