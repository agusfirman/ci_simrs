<?php
$id_cat_task = $_POST[id_cat_task];
	include"../../include/koneksi.php";
if($id_cat_task !='0'){
	$query = "SELECT * FROM task_cat where id_task_cat='$id_cat_task' ";
	$hasil = $mysqli->query($query);
	$data  = $hasil->fetch_array();
	$cek  = mysqli_num_rows($hasil);
	if($cek){
		$id_task_cat = $id_cat_task;
		$nama_task_cat = $data[nama_task_cat];
	}
}else{
	$id_task_cat = "0";
}
 ?>

<form id="f_task_cat" class="form-horizontal" action="" method="post">
  <div class="form-group">
	<label class="col-sm-3 control-label">ID Cat </label>
		<div class="col-sm-2">
		  <input type="text" class="form-control input-sm" name="cat_id" readonly value="<?php echo $id_task_cat; ?>">
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Kategori</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="nama_task_cat" value="<?php echo $nama_task_cat; ?>">
		</div>
  </div>
</form>
