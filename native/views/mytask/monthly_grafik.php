</script>
<h3 class="box-body">Monthly Grafik My Task IT</h3>
<form class="" action="" method="post">
  <div class="form-group">
		<label class="col-sm-1 control-label">Periode Tahun</label>
		<div class="col-sm-2">
			<select name="task_grapc" id="task_grapc" class="form-control input-sm" >
				<?php
        $tahun_now = date('Y');
        echo '<option value="'.$tahun_now.'">'.$tahun_now.'</option>';
        $q = "select id_task,DATE_FORMAT(tgl_finished, '%Y') as tahun from task group by tahun having tahun !=$tahun_now AND tahun!='0000'  ";
        $query_thn = $mysqli->query($q);
        while ($dat = $query_thn->fetch_array()) {
          extract($dat);
          $thn = ($tahun !="0000");
          echo '<option value="'.$tahun.'">'.$tahun.'</option>';
        }
				 ?>
			</select>
		</div>
  </div>
</form>
<?php

$monthNum = 03;
  //config.php adalah file koneksi database bagian ini dipakai
 //untuk mengambil data dari mysql
 // $query = $mysqli->query("SELECT task.users_finished, users.is_aktif from task INNER JOIN users on task.users_finished=users.username  WHERE users.is_aktif =1 AND task.users_finished !='' GROUP BY task.users_finished");
$query = $mysqli->query("SELECT count(*) as jumlah,DATE_FORMAT(tgl_finished, '%m') as bln, DATE_FORMAT(tgl_finished, '%Y') as tahun FROM task GROUP BY bln HAVING tahun !='2018' ");

  $bln = array();
  $jumlah = array();
    while ($ret = $query->fetch_object()){
        $jumlah[]  =intval($ret->jumlah);
        $bulan[]   =$ret->bln;
    }
   echo(json_encode($bulan));
   echo "<br/>";
   echo(json_encode($jumlah));
?>


<div id="monthly_graphic" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
  var chart1; // globally available
    $(document).ready(function() {
//
//  $('select').on('change', function() {
//   var tahun=this.value;
//   <?php //$tahunya = tahun ; ?>
// console.log(tahun);
//     $("#monthly_graphic").load();
//  })
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'monthly_graphic',
            type: 'column'
         },
         title: {
            text: 'Monthly Graphic'
         },
         xAxis: {
           categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
         },
         yAxis: {
            title: {
               text: 'Jumlah Task'
            }
         },  tooltip: {
               headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
               pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                   '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
               footerFormat: '</table>',
               shared: true,
               useHTML: true
           },
           plotOptions: {
               column: {
                   pointPadding: 0.2,
                   borderWidth: 0
               }
           },
        series:[{
                  name:'Tahun 2017',
                  data:<?php echo json_encode($jumlah); ?>
               }]
      });

   });

</script>

<div id="container" data-highcharts-chart="0">
</div>

<script type="text/javascript">

//Testing Format Baru
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});

</script>
