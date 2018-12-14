<?php
include '../../include/koneksi.php';
$id_ups		= $_POST[id];
$sql 	= $mysqli->query("SELECT * FROM ups WHERE id_ups= '$id_ups'");
$row	= mysqli_num_rows($sql);
if ($row){
	$del_ups =$mysqli->query("DELETE FROM ups WHERE id_ups= '$id_ups'");
	if($del_ups){
		echo "data berhasil terhapus";
	}
}
?>