<?php
include"../../include/koneksi.php";
$mode=$_POST['mode'];
$username=$_POST['username'];
if ($mode=='true') //mode is true when button is enabled
{
 //$str="update users SET is_aktif=1 where username='$username' ";
 $str=$mysqli->query("update users SET is_aktif=1 where username='$username' ");
    $message='Hey my button is enableed!!';
    $success='Enabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'$success'=>$success));
}
else if ($mode=='false')
{
 //$str="update users SET is_aktif=0 where username='$username' ";
 $str=$mysqli->query("update users SET is_aktif=0 where username='$username' ");
    $message='Hey my button is disable!!';
    $success='Disabled';
    echo json_encode(array('str'=>$str,'message'=>$message,'success'=>$success));
}


?>
