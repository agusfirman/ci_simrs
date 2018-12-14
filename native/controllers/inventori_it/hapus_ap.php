<?php
include '../../include/koneksi.php';
$id_ap		= $_POST[id];
$sql 	= $mysqli->query("SELECT * FROM access_point WHERE id_ap= '$id_ap'");
$row	= mysqli_num_rows($sql);
if ($row){
	$del_ap =$mysqli->query("DELETE FROM access_point WHERE id_ap= '$id_ap'");
	if($del_ap){
		echo "data berhasil terhapus";
	}
}
?>