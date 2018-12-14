<div class="clearfix">
	<form class="form-inline float-right mt--1 d-none d-md-flex">
		<button class="btn btn-primary"><i class="align-middle" data-feather="plus"></i> New project</button>
	</form>
	<h1 class="h3 mb-3">Dashboard Task</h1>
</div>

<!-- row pertama -->
<div class="row">

	<div class="col-6 col-md-2 col-xl d-flex">
		<div class="card flex-fill">
			<div class="card-body">
                        <h4><?= $all_task ?></h4>
						<p class="mb-0">TASK Total</p>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-6 col-xl d-flex">
		<div class="card flex-fill">
			<div class="card-body py-2">
				<div class="row">
					<div class="col-6 col-md-6 align-self-center text-center text-md-left">
                        <h4><?= $task_done; ?></h4>
						<p class="mb-0">TASK DONE</p>
					</div>
					<div class="col-6 col-md-6 align-self-center text-center text-md-right">
						<div data-label="<?= $persen_done ?>%" class="doughnut mt-2 doughnut-primary doughnut-<?= ceil($persen_done) ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-6 col-xl d-flex">
		<div class="card flex-fill">
			<div class="card-body py-2">
				<div class="row">
					<div class="col-6 col-md-6 align-self-center text-center text-md-left">
						<h4><?= $task_proccess?></h4>
						<p class="mb-0">TASK PROCCESS</p>
					</div>
					<div class="col-6 col-md-6 align-self-center text-center text-md-right">
						<div data-label="<?= $persen_proccess; ?>%" class="doughnut mt-2 doughnut-warning doughnut-<?= ceil($persen_proccess); ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-6 col-xl d-flex">
		<div class="card flex-fill">
			<div class="card-body py-2">
				<div class="row">
					<div class="col-6 col-md-6 align-self-center text-center text-md-left">
						<h4><?= $task_open ?></h4>
						<p class="mb-0">TASK OPEN</p>
					</div>
					<div class="col-6 col-md-6 align-self-center text-center text-md-right">
						<div data-label="<?= $persen_open;?>%" class="doughnut mt-2 doughnut-danger doughnut-<?= ceil($persen_open);?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-6 col-xl d-flex">
		<div class="card flex-fill">
			<div class="card-body py-2">
				<div class="row">
					<div class="col-6 col-md-6 align-self-center text-center text-md-left">
						<h4><?= $task_close; ?></h4>
						<p class="mb-0">TASK CLOSE</p>
					</div>
					<div class="col-6 col-md-6 align-self-center text-center text-md-right">
						<div data-label="<?= $persen_close;?>%" class="doughnut mt-2 doughnut-danger doughnut-<?= ceil($persen_close);?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!--end row pertama -->

<div class="row">

	<!-- view grafik task -->
	<div class="col-12 col-lg-8 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Task on YEARS</h5>
			</div>
			<div class="card-body">
				<div class="chart">
					<canvas id="chartjs-dashboard-line"></canvas>
				</div>
					<?php
					// $query_2017 = "SELECT * FROM task WHERE tgl_post=DATE(NOW())";
					// $query_2017 = "SELECT YEAR(task.tgl_post) AS tahun,MONTH(task.tgl_post) AS bulan, COUNT(*) AS jumlah_bulanan FROM task WHERE YEAR(task.tgl_post)='2017' GROUP BY YEAR(task.tgl_post),MONTH(task.tgl_post)";
					// $query_2018 = "SELECT YEAR(task.tgl_post) AS tahun,MONTH(task.tgl_post) AS bulan, COUNT(*) AS jumlah_bulanan FROM task WHERE YEAR(task.tgl_post)='2018' GROUP BY YEAR(task.tgl_post),MONTH(task.tgl_post)";
					// $jumlah_bln_2017 = array();
					// $jumlah_bln_2018 = array();
					// $result =$mysqli->query($query_2017);
					// $result2 =$mysqli->query($query_2018);
					// while($data   = $result->fetch_object()){
					// 	$jumlah_bln_2017[] = $data->jumlah_bulanan;
					// }
					// $jumlah_bln_2018 = array();
					// while($data2   = $result2->fetch_object()){
					// 	$jumlah_bln_2018[] = $data2->jumlah_bulanan;
					// }
					$before_year;
					$current_year;
					// print_r(json_encode($jumlah_bln_2018));
					 ?>
			</div>
		</div>
	</div>
	<!-- end view grafik task -->

	<!-- View Calendar -->
	<div class="col-12 col-lg-4 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h5 class="card-title mb-0">Calendar</h5>
			</div>
			<div class="card-body d-flex">
				<div class="align-self-center w-100">
					<div class="chart">
						<div id="datetimepicker-dashboard"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End View Calendar -->

</div>

	<!-- Row Ketiga -->
<div class="row">

	<!-- View Latest TASK -->
	<div class="col-12 col-lg-8 col-xxl-9 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h5 class="card-title mb-0">Latest TASK</h5>
			</div>
			<table id="datatables-dashboard" class="table table-striped my-0">
				<thead>
					<tr>
						<th>Name</th>
						<th class="d-none d-xl-table-cell">Start Date</th>
						<th class="d-none d-xl-table-cell">End Date</th>
						<th>Status</th>
						<th class="d-none d-md-table-cell">Assignee</th>
					</tr>
				</thead>
				<tbody>
						<?php
						// $query = "SELECT * FROM task WHERE tgl_post=DATE(NOW()) OR tgl_finished=DATE(NOW())";
						// $result3 =$mysqli->query($query);
						// while($data3   = $result3->fetch_array()){
						// 	extract($data3);
						// 	if($st_task==1){
						// 		$st_text='open';
						// 		$badge='badge-primary';
						// 	}else if($st_task==2){
						// 		$st_text='proccess';
						// 		$badge='badge-warning';
						// 	}else if($st_task==3){
						// 		$st_text='done';
						// 		$badge='badge-success';
						// 	}else{
						// 		$st_text='close';
						// 		$badge='badge-default';
						// 	}
						// 	echo
						// 	"<tr>
						// 			<td class='d-none d-xl-table-cell'>$subject</td>
						// 			<td class='d-none d-xl-table-cell'>$tgl_post</td>
						// 			<td class='d-none d-xl-table-cell'>$tgl_finished</td>
						// 			<td><span class='badge $badge'>$st_text</span></td>
						// 			<td class='d-none d-xl-table-cell'>$users_create</td>
						// 	</tr>";
						// }
					 ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- End View Latest TASK -->

	<!-- view Category -->
	<div class="col-12 col-md-6 col-xl-4 d-flex order-2 order-xl-1">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Task ON Category Percentage</h5>
			</div>
			<div class="card-body d-flex">
				<div class="align-self-center w-100">
					<div class="py-3">
						<div class="chart chart-sm">
							<canvas id="chartjs-dashboard-pie"></canvas>
						</div>
					</div>
					<table class="table mb-0">
						<tbody>
							<?php
							// $query4 = "SELECT COUNT(task_cat.nama_task_cat) as jumlah,task_cat.nama_task_cat FROM task
							// 						INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat
							// 						INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
							// 						GROUP BY nama_task_cat asc";
							// $result4 =$mysqli->query($query4);
							// while($data4   = $result4->fetch_array()){
							// 	extract($data4);
							// 	if($nama_task_cat=='Hardware'){
							// 		$text='text-primary';
							// 	}else if($nama_task_cat=='Software'){
							// 		$text='text-warning';
							// 	}else if($nama_task_cat=='Network'){
							// 		$text='text-danger';
							// 	}else if($nama_task_cat=='Teramedik'){
							// 		$text='text-secondary';
							// 	}else if($nama_task_cat=='Pengembangan Aplikasi'){
							// 		$text='text-dark';
							// 	}else if($nama_task_cat=='Project'){
							// 		$text='text-info';
							// 	}else if($nama_task_cat=='Lainya'){
							// 		$text='text-muted';
							// 	}
							// 	echo
							// 	"<tr>
							// 		<td><i class='fas fa-square-full $text '></i>$nama_task_cat </td>
							// 		<td class='text-right'>$jumlah</td>
							// 	</tr>";
							// }
							// $jumlah2 = array();
							// $nama_task_cat2 = array();
							// $result5 =$mysqli->query($query4);
							// while($data5   = $result5->fetch_object()){
							// 	$jumlah2[] = $data5->jumlah;
							// 	$nama_task_cat2[] = $data5->nama_task_cat;
							// }
							// print_r(json_encode($nama_task_cat2));
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- End view Category -->

</div>


<div class="row">
	<div class="col-md-12 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h5 class="card-title mb-0">Indikator Mutu Currently Month</h5>
			</div>
			<div class="card-body">
			<form method="post" action="">
			<div class="form-row">
				<div class="form-group col-md-2">
					<select name="bulan" class="form-control input-sm">
						<option selected>Pilih Bulan </option>
						<?php
						// for ($i=1; $i <= 12; $i++) {
						// 	echo '<option value='.$i.'>'.$i.'</option>' ;
						// 	}
						 ?>
					</select>
				</div>
				<div class="form-group col-md-2 input-sm">
					<select name="tahun"  class="form-control ">
						<option value="">Pilih Tahun...</option>
						<?php
						// $tahun = date('Y');
						// $r_tahun = $tahun - 3;
						// for ($i=$r_tahun; $i < $tahun+1; $i++) {
						// 	echo '<option value='.$i.'>'.$i.'</option>' ;
						// 	}
						 ?>
					</select>
				</div>
				<div class="form-group col-md-2">
					<input type="submit" class="btn btn-flat btn-primary b_priode" name="filter" value="Search" />
				</div>
			</div>
			</form>
			<?php
  		// if($_POST['filter']){
			// 	$bulan = $_POST['bulan'];
			// 	$tahun = $_POST['tahun'];
			// 	$tanggal = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
			// 	$data_indikator =  "
			// 				<div class='col-md-2 alert alert-danger alert-dismissible' role='alert'>
			// 					<div class='alert-message'>
			// 						<strong>Data :$bulan-$tahun</strong>
			// 					</div>
			// 				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            //     <span aria-hidden='true'>&times;</span>
            //   </button>
			// 			</div>";
			// }else{
			// 	$tahun = date('Y'); //Mengambil tahun saat ini
			// 	$bulan = date('m'); //Mengambil bulan saat ini
			// 	$tanggal = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
			// 	$data_indikator =  "
			// 				<div class='col-md-2 alert alert-danger alert-dismissible' role='alert'>
			// 					<div class='alert-message'>
			// 						<strong>Data :$bulan-$tahun</strong>
			// 					</div>
			// 				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            //     <span aria-hidden='true'>&times;</span>
            //   </button>
			// 			</div>";
		//  }

			?>
			<div class="table-responsive">
				<?php //echo $data_indikator; ?>
			<table id="datatables-buttons" class="table table-striped my-0"  style="width:100%">
				<thead>
					<tr>
						<th>Name Indicators</th>
						<?php
						// for ($i=1; $i < $tanggal+1; $i++) {
						// 	// echo '<th class="d-none d-xl-table-cell">'.$i .'-'.date("Y-m-$i").'</th>';
						// 	echo '<th class="d-none d-xl-table-cell">'.$i .'</th>';
						//   }

						// echo $tanggal;
						?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class='d-none d-xl-table-cell'>Hardware</td>
						<?php
						// for ($i=1; $i < $tanggal+1; $i++) {
						// 	$queryHard = "SELECT task.tgl_post as tgl_hard,COUNT(*) AS jml_hard,indikator, in_mutu.header_indikator FROM task JOIN in_mutu ON task.indikator=in_mutu.id WHERE in_mutu.id=1 AND task.tgl_post='".("$tahun-$bulan-$i")."'";
						// 		// echo $queryHard.'<br/>';
						// 		$resultHard =$mysqli->query($queryHard);
						// 		$dataHard   = $resultHard->fetch_array();
						// 		extract($dataHard);
						// 		echo"<td>$jml_hard</td>";
						// 	}

						?>
					</tr>
					<tr>
						<td class='d-none d-xl-table-cell'>Software</td>
						<?php
						// for ($i=1; $i < $tanggal+1; $i++) {
						// 		$querySoft = "SELECT task.tgl_post as tgl_soft,COUNT(*) AS jml_soft,indikator, in_mutu.header_indikator FROM task JOIN in_mutu ON task.indikator=in_mutu.id WHERE in_mutu.id=2 AND task.tgl_post='".("$tahun-$bulan-$i")."'";
						// 		// echo $queryHard.'<br/>';
						// 		$resultSoft =$mysqli->query($querySoft);
						// 		$dataSoft  = $resultSoft->fetch_array();
						// 		extract($dataSoft);
						// 		echo"<td>$jml_soft</td>";
						// }
					 ?>
					 </tr>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
</div>

<script>
			document.addEventListener("DOMContentLoaded", function(event) {
				// Line chart
				new Chart(document.getElementById("chartjs-dashboard-line"), {
					type: 'line',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "2018",
							fill: true,
							backgroundColor: "transparent",
							borderColor: "#0cc2aa",
							data: <?php //echo json_encode($jumlah_bln_2018); ?>
						}]
					},
					options: {
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						tooltips: {
							intersect: false
						},
						hover: {
							intersect: true
						},
						plugins: {
							filler: {
								propagate: false
							}
						},
						scales: {
							xAxes: [{
								reverse: true,
								gridLines: {
									color: "rgba(0,0,0,0.05)"
								}
							}],
							yAxes: [{
								ticks: {
									stepSize: 10
								},
								display: true,
								borderDash: [5, 5],
								gridLines: {
									color: "rgba(0,0,0,0)",
									fontColor: "#fff"
								}
							}]
						}
					}
				});
			});

			document.addEventListener("DOMContentLoaded", function(event) {
				$('#datetimepicker-dashboard').datetimepicker({
					inline: true,
					sideBySide: false,
					format: 'L'

				});
			});

			document.addEventListener("DOMContentLoaded", function(event) {
				$('#datatables-dashboard').DataTable({
					pageLength: 10,
					lengthChange: false,
					bFilter: false,
					autoWidth: false
				});
			});

			// Datatables with Buttons
				var datatablesButtons = $('#datatables-buttons').DataTable({
					lengthChange: !1,
					buttons: ["copy", "print"],
					responsive: true
				});
				datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")

			document.addEventListener("DOMContentLoaded", function(event) {
				// Pie chart
				new Chart(document.getElementById("chartjs-dashboard-pie"), {
					type: 'pie',
					data: {
						labels: <?php echo json_encode($nama_task_cat2) ?>,
						datasets: [{
							data: <?php //echo json_encode($jumlah2) ?>,
							backgroundColor: ["#0cc2aa", "#6c757d", "#f44455", "#2e3e4e","#5b7dff","#fcc100", "#a180da"],
							borderColor: "transparent"
						}]
					},
					options: {
						responsive: !window.MSInputMethodContext,
						maintainAspectRatio: false,
						legend: {
							display: false
						}
					}
				});
			});
		</script>
