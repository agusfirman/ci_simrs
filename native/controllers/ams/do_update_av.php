<?php
include"../../include/koneksi.php";
$mode=$_POST['mode'];
$id_pc=$_POST['id_pc'];
if ($mode=='true'){
 $str="update p_computer SET is_av=1 where id_pc='$id_pc' ";
 $mysqli->query($str);
    $message='Hey my button is enableed!!';
    $success='Enabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}else if ($mode=='false'){
 $str="update p_computer SET is_av=0 where id_pc='$id_pc' ";
 $mysqli->query($str);
    $message='Hey my button is disable!!';
    $success='Disabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}
