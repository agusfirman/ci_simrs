<h3 class="box-body">Grafik Task IT</h3>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div id='grafik_users_finish'></div>
    </div>
    <div class="col-md-5">
      <div id='grafik_users_create' ></div>
    </div>
  </div>
</div>
<div id='container' width='50%'></div>

<script type="text/javascript">
//start grafik users finish
Highcharts.chart('grafik_users_finish', {
  chart: {
      type: 'pie',
      options3d: {
          enabled: true,
          alpha: 45,
          beta: 0
      }
  },
  title: {
      text: 'Users Finish Graphic'
  },
  tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 35,
          dataLabels: {
              enabled: true,
              format: '{point.name}'
          }
      }
  },
  series: [{
      type: 'pie',
      name: 'Precentase',
      data: [
        <?php
        $sql = "SELECT task.users_finished, COUNT(*) as jumlah from task INNER JOIN users on task.users_finished=users.username  WHERE users.is_aktif =1 AND task.users_finished !='' GROUP BY task.users_finished";
         $query = $mysqli->query($sql);

          while ($result_f = $query->fetch_array()) {
            extract($result_f);
              ?>
              [
                  '<?php echo $users_finished ?>', <?php echo $jumlah; ?>
              ],
              <?php
          }
          ?>
      ]
  }]
});
//End grafik grafik users finish


Highcharts.chart('grafik_users_create', {
  chart: {
      type: 'pie',
      options3d: {
          enabled: true,
          alpha: 45,
          beta: 0
      }
  },
  title: {
      text: 'Users Creates Graphic'
  },
  tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 35,
          dataLabels: {
              enabled: true,
              format: '{point.name}'
          }
      }
  },
  series: [{
      type: 'pie',
      name: 'Precentase',
      data: [
        <?php
        $sql_c = "SELECT task.users_finished, COUNT(*) as jumlah from task INNER JOIN users on task.users_finished=users.username  WHERE users.is_aktif =1 AND task.users_finished !='' GROUP BY task.users_finished";
         $query_c = $mysqli->query($sql_c);

          while ($result_f = $query_c->fetch_array()) {
            extract($result_f);
              ?>
              [
                  '<?php echo $users_finished ?>', <?php echo $jumlah; ?>
              ],
              <?php
          }
          ?>
      ]
  }]
});
    //End grafik grafik users create
</script>
