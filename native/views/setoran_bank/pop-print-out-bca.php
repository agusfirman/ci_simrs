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
  <table border="0"  width="100%" style="font-size:11px;margin-top:100px;font-size:10px;font-family: Tahoma, Verdana, Segoe, sans-serif;">
    <tr>
      <td width=20%></td>
      <td width=30% style="font-weight:bold;font-size:12px;"><?php echo $norek; ?></td>
      <td width=30%></td>
      <td width=20%></td>
    </tr><tr>
      <td></td>
      <td style="font-size:12px;"><?php echo $nama; ?></td>
      <td></td>
      <td><div style="margin-left:20px;font-size:12px;"><?php echo number_format($nom); ?></div></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div style="margin-left:50px">TUNAI</div></td>
      <td>&nbsp;</td>
    </tr><tr>
      <td></td>
      <td><?php echo $nama_penyetor; ?></td>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td><?php echo $alm_penyetor; ?></td>
      <td></td>
      <td><div style="margin-left:20px;font-size:12px"><?php echo number_format($nom); ?></div></td>
    </tr><tr>
      <td></td>
      <td><div style="margin-left:100px;margin-top:-5px"><?php echo $telp; ?></div></td>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td><div style="margin-left:100px;margin-top:-5px"><?php echo $rek_family; ?></div></td>
      <td></td>
      <td></td>
    </tr>
</table>
<br/>
<br/>
<div style="position:relative;top:0px;margin-left:350px;font-size:11px;text-transform:uppercase;">
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
