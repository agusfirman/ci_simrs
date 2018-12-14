<?php
if
(!isset($_SESSION)) {
		session_start();
	}
$username = $_SESSION['username'];
if($username){
include"../../include/koneksi.php";
$username = $_SESSION['username'];
$subject 	= $_POST[subject];
$spek 		= $_POST[spek];
$_case 		= trim($_POST[_case]);
$nm_pel 	= $_POST[nm_pel];
$bagian 	= $_POST[bagian];
$in_mutu 	= $_POST[in_mutu];
$ext 			= $_POST[ext];
$tgl_post = date('Y-m-d');

$id = $_POST[id];
if($id =="0"){
		$mysqli->query("insert into task set 	id_sub_cat   ='$spek',
																subject   	='$subject',
																indikator   	='$in_mutu',
																users_create  ='$username',
																users_claims='$nm_pel',
																users_dept='$bagian',
																ext='$ext',
																_case    		='$_case',
																tgl_post 	='$tgl_post' ");
	$data =  "Data berhasil disimpan";
}else{
	$mysqli->query("update task set 	id_sub_cat   ='$spek',
													subject   	='$subject',
													indikator   	='$in_mutu',
													users_claims='$nm_pel',
													users_dept='$bagian',
													ext='$ext',
													_case ='$_case'
													where id_task 	='$id'  ");
	$data = "Data berhasil diubah";
}
echo $data;
}
?>
