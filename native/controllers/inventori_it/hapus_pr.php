<?php
include '../../include/koneksi.php';
$id_pr		= $_POST[id];
$sql 	= $mysqli->query("SELECT * FROM printer WHERE id_pr= '$id_pr'");
$row	= mysqli_num_rows($sql);
if ($row){
	$del_pr =$mysqli->query("DELETE FROM printer WHERE id_pr= '$id_pr'");
	if($del_pr){
		echo "data berhasil terhapus";
	}
}
?>