<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.css">
    <title>Slip BCA NEW</title>
    <link rel="stylesheet" href="../../assets/css/AdminLTE.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'> -->
    <title>Slip BCA</title>
  </head>
  <body>
  <div class="well well-sm" id="divButtons">
    <button type="button" onclick="printPage();" class="btn btn-primary btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span>Print</button>
    <button type="button" onclick="window.close();" class="btn btn-primary btn-sm btn-flat"><span class="glyphicon glyphicon-circle-arrow-left"></span>Close</button>
  </div>
<?php
include "../../include/terbilang-class.php";
//include "../../include/test.php";
$norek=$_GET['norek'];
$nama = $_GET['nama'];
$nama_penyetor= $_GET['nama_penyetor'];
$alm_penyetor= $_GET['alm_penyetor'];
$telp = $_GET['telp'];
$nom =$_GET['nom'];
$nama_bank =$_GET['nama_bank'];
$nama_kota =$_GET['nama_kota'];
$biaya_admin = 5000;
$total_biaya = $nom+$biaya_admin;
$terbilang = terbilang(intval($total_biaya));
?>

<div class="container">
  <table border="0" width="100%" style="font-size:10px;font-family: Tahoma, Verdana, Segoe, sans-serif;">
    <tr>
      <td width="20%">&nbsp;</td>
      <td width="30%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
      <td width="30%">&nbsp;</td>
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
      <td width="" style="position:relative;top:5px;font-size:11.5px;font-weight:bold;" class="ordinal"><?php echo $norek; ?></td>
      <td>&nbsp;</td>
      <td width="" style="position:relative;top:5px;"><?php echo $nama_bank; ?></td>
    </tr><tr>
      <td>&nbsp;</td>
      <td width="" style="position:relative;top:5px;font-size:11px;"><?php echo $nama; ?></td>
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
      <td width="" style="position:relative;top:5px;"><?php echo $nama_kota; ?></td>
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
      <td width=""><?php echo $nama_penyetor; ?></td>
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
      <td width=""><?php echo $alm_penyetor ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td width="">NING</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>081314704505 <div style="position:relative;top:-15px;left:140px;"><?php echo $telp; ?></div></td>
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
      <td>168 306 1020</td>
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
      <td><div style="position:relative;top:-15px;left:180px;font-size:11px;"><?php echo number_format($nom); ?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td><div style="position:relative;top:-15px;left:180px;font-size:11px;"><?php echo number_format($biaya_admin); ?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td>&nbsp;</td>
      <td><div style="position:relative;top:-15px;left:180px;font-size:11px;"><?php echo number_format($total_biaya); ?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr><tr>
      <td colspan="2"><div style="width:380px;position:relative;top:-20px;left:30px;border:0px solid black;font-size:11px"><?php echo $terbilang; ?> rupiah</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
</table>
</td>
<tr>
</table>
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
