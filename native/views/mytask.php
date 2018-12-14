<div class="box-body">
    <div class="col-md-12">
        <div class="tab">
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <?php
               echo "
                 <li class='nav-item'>
                  <a class='nav-link' href='index.php?page=". base64_encode('mytask')."&ID=".base64_encode('mytask')."'>My Task</a>
                 </li>
                 <li class='nav-item'>
                  <a class='nav-link' href='index.php?page=". base64_encode('mytask')."&ID=".base64_encode('grafik')."'>Grafik Task</a>
                 </li>
                 <li class='nav-item'>
                  <a class='nav-link' href='index.php?page=". base64_encode('mytask')."&ID=".base64_encode('monthly_grafik')."'>Monthly Grafik Task </a>
                 </li>
               ";
        ?>
      </ul>
  <div class="tab-content">
  <?php
  if (!isset($_SESSION)) {
  session_start();
  }
  $username =$_SESSION['username'];
  if(isset($username)){
    include"include/koneksi.php";
    $pages_dir = 'views/mytask';
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
