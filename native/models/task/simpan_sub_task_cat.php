<?php
session_start();
require '../../include/koneksi.php';
$username = $_SESSION['username'];
$sub_cat_id 	= $_POST[fid_sub_cat_task];
$id_cat_task 	= $_POST[fid_cat_task];
$nama_sub_cat 	= $_POST[fnama_sub_cat_task];
$deskripsi 	= $_POST[des_cat_task];
$query = "SELECT * FROM sub_task_cat where 	id_sub_cat='$sub_cat_id' ";
$hasil = $mysqli->query($query);
	$cek  =$hasil->num_rows;
	if(!$cek){
$mysqli->query("insert into sub_task_cat set id_task_cat = '$id_cat_task',
																nama_sub_cat = '$nama_sub_cat',
																deskripsi = '$deskripsi' ");
																$data =  "Data berhasil disimpan";
//$data =  $sub_cat_id.'-'.$id_cat_task.'-'.$nama_sub_cat.'-'.$deskripsi;
	}else{
		$mysqli->query("update sub_task_cat set nama_sub_cat = '$nama_sub_cat',
																			deskripsi = '$deskripsi'
																			where id_sub_cat='$sub_cat_id' ");
	$data = "Data berhasil diubah";
	}
echo $data;
?>
