<?php
$timeout = 60; // Set timeout menit
$logout_redirect_url = "http://192.168.3.142/gfinternal/index.php"; // Set logout URL

$timeout = $timeout * 60; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
  $elapsed_time = time() - $_SESSION['start_time'];
  if ($elapsed_time >= $timeout) {
      session_destroy();
      echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
  }
}
 ?>
