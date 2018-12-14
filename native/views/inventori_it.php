<div class="box-body">
    <div class="col-md-12">
        <div class="tab">
          <ul class="nav nav-tabs nav-justified">
          <?php
             echo "
               <li class='nav-item'>
                <a class='nav-link' role='tab' href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('barang_it')."' >Barang IT</a>
               </li>
               <li class='nav-item'>
                <a class='nav-link' role='tab' href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('pc')."' >Daftar PC</a>
               </li>
               <li class='nav-item'>
                <a class='nav-link'role='tab'  href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('ups')."'>Data UPS</a>
               </li>
               <li class='nav-item'>
                <a class='nav-link' role='tab' href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('printer')."'>Daftar Printer</a>
               </li>
               <li class='nav-item'>
                <a class='nav-link' role='tab' href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('access_point')."'> Acces Point</a>
               </li>
             ";
             //
             //
             // role='tab' data-toggle='tab' aria-selected='true'  href='#tab-barang_it'
          ?>
          </ul>
  <div class="tab-content">
<?php
if (!isset($_SESSION)) {
session_start();
}
$username =$_SESSION['username'];
//echo $username;
if(isset($username)){
  include"include/koneksi.php";
  $pages_dir = 'views/inventori_it';
        if(!empty($_GET['ID'])){
          $pages = scandir($pages_dir, 0);
          unset($pages[0], $pages[1]);

          $p = base64_decode($_GET['ID']);
          // $pecah = explode($key,$p);
          // $p2 = $pecah[0];
          if(in_array($p.'.php', $pages)){
            include($pages_dir.'/'.$p.'.php');
          } else {
            echo "Not Found";
          }
        } else {
          include($pages_dir.'/404.php');
        }

}else{
  echo"<script>alert('anda belum login');</script>";
}
?>
  </div>
</div>
