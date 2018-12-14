<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/font-awesome.css">
  <title>Slip BCA NEW</title>
  <link rel="stylesheet" href="../../assets/css/AdminLTE.css">
  <link href='https://fonts.googleapis.com/css?family=Antic' rel='stylesheet'>
  <title>Slip BCA</title>
</head>
  <body>
  <div class="well well-sm" id="divButtons">
    <button type="button" onclick="printPage();" class="btn btn-primary btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span>Print</button>
    <button type="button" onclick="window.close();" class="btn btn-primary btn-sm btn-flat"><span class="glyphicon glyphicon-circle-arrow-left"></span>Close</button>
  </div>
<?php
include "../../include/terbilang-class.php";
$norek=$_GET['norek'];
$nama = $_GET['nama'];
$nama_penyetor= $_GET['nama_penyetor'];
$alm_penyetor= $_GET['alm_penyetor'];
$telp = $_GET['telp'];
$nom =$_GET['nom'];
$rek_family = '168 306 1020';
$terbilang = terbilang(intval($nom));
?>
<div class="container">
  <table border="0"  width="100%" style="font-size:11px;margin-top:175px;font-size:10px;font-family: Tahoma, Verdana, Segoe, sans-serif;">
    <tr>
      <td width=17%></td>
      <td width=33%></td>
      <td width=30%></td>
      <td width=20%>
        <div style="margin-left:-90px">
          <?php echo $nama_penyetor; ?>
        </div>
      </td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>
        <div style="font-size:12px;margin-top:-15px">
        <?php echo $nama; ?>
        </div>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td></td>
      <td>
        <div style="font-size:12px;margin-top:-5px">
          <?php echo $norek; ?>
        </div>
      </td>
      <td></td>
      <td></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>
        <div style="font-size:12px;margin-top:0px;position:absolute">
          MANDIRI
        </div>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td style="font-weight:bold;font-size:12px">Rp. <?php echo number_format($nom); ?></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td></td>
      <td></td>
      <td></td>
      <td style="font-weight:bold;"><div style="margin-left:-50px;margin-top:-5px;font-size:12px">
        Rp. <?php echo number_format($nom); ?>
      </div></td>
    </tr>
</table>
<div style="position:relative;top:5px;margin-left:340px;font-size:10px;text-transform:uppercase;">
  <?php echo $terbilang; ?> RUPIAH</div>
</div>
  </body>

  <script type="text/javascript">

  function printPage()
  {
  document.getElementById('divButtons').style.display='none';
  window.print();
    document.getElementById('divButtons').style.display='';
  return false;
  }

  function hideMe(id) {
    document.getElementById(id).style.display = 'none';
  }

  </script>

</html>
