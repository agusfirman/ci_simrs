<?php
include"../../include/koneksi.php";
$mode=$_POST['mode'];
$id_ap=$_POST['id_ap'];
if ($mode=='true'){
 $str="update access_point SET is_active=1 where id_ap='$id_ap' ";
 $mysqli->query($str);
    $message='Hey my button is enableed!!';
    $success='Enabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}else if ($mode=='false'){
 $str="update access_point SET is_active=0 where id_ap='$id_ap' ";
 $mysqli->query($str);
    $message='Hey my button is disable!!';
    $success='Disabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}


?>
