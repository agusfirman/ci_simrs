<?php
include '../../include/koneksi.php';
$id_ap		= $_POST[id];
$is_active	= $_POST[is_active];
$sql 	= $mysqli->query("SELECT * FROM access_point WHERE id_ap= '$id_ap'");
$row	= mysqli_num_rows($sql);
if ($row){
	$q = "update access_point set is_active ='$is_active' WHERE id_ap= '$id_ap'";
	$del_ap =$mysqli->query($q);
	if($del_ap){
		$data="data berhasil diubah";
	}
}
echo $q;
?>