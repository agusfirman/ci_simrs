<?php
/**
 * Namafile : config.php
 * ----------------------------*/

$server = "localhost";
$username = "root";
$password = "";
$database = "db_its_gf";
$mysqli = new \mysqli($server, $username, null, $database);
if (\mysqli_connect_errno()) {
 echo"<script>koneksi gagal</script>";
}else{
// echo"<script>koneksi berhasil</script>";
}

date_default_timezone_set("Asia/Jakarta");
$base_url='192.168.3.142/gfinternal';
