<?php
include"../../include/koneksi.php";
$mode=$_POST['mode'];
$id=$_POST['id_perek'];
if ($mode=='true'){
 $str="update dt_dokter SET is_supplier=1 where id='$id' ";
 $mysqli->query($str);
    $message='Hey my button is enableed!!';
    $success='Enabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}else if ($mode=='false'){
 $str="update dt_dokter SET is_supplier=0 where id='$id' ";
 $mysqli->query($str);
    $message='Hey my button is disable!!';
    $success='Disabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}


?>
