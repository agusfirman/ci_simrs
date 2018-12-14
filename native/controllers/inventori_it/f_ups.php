<?php 
$id = $_POST[id];
include"../../include/koneksi.php";
if($id !='0'){
 	$query=$mysqli->query("SELECT * from ups where id_ups='$id' ");
	$data_edit  = $query->fetch_array();   
	$cek  = mysqli_num_rows($query);  
	if($cek){
		$id 			= $id;
		$id_ups 		= $data_edit[id_ups];
		$jumlah 		= $data_edit[jumlah];
		$lokasi 		= $data_edit[lokasi];
		$lantai 		= $data_edit[lantai]; 
		$merk 			= $data_edit[merk]; 
		$type 			= $data_edit[type];   
		$ket 			= $data_edit[ket];    
	}
}
 ?>

<form id="f_ups" class="form-horizontal" action="" method="post">
  <div class="form-group">
	<input type="hidden" class="form-control input-sm" name="id"  value="<?php echo $id; ?>">
	<label class="col-sm-3 control-label">Lokasi</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="lokasi" value="<?php echo $lokasi; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Lantai</label>
		<div class="col-sm-4">
			<select name="lantai" id="lantai" class="form-control input-sm" >
			<?php 
				echo '
				<option value="'.$lantai.'">'.$lantai.'</option>';
			 ?> 
				<option value="Basement">Basement</option>
				<option value="Dasar">Dasar</option>
				<option value="Lantai 1">Lantai 1</option>
				<option value="Lantai 2">Lantai 2</option>
				<option value="Lantai 3">Lantai 3</option>
				<option value="Lantai 5">Lantai 5</option>
			</select>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Merk</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control input-sm" name="merk" value="<?php echo $merk; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Type</label>
		<div class="col-sm-4">
		  <input type="text" class="form-control input-sm" name="type" value="<?php echo $type; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Jumlah</label>
		<div class="col-sm-4">
		  <input type="text" class="form-control input-sm" name="jumlah" value="<?php echo $jumlah; ?>">
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Keterangan</label>
		<div class="col-sm-8">
			<textarea name="ket" class="form-control input-sm" cols="30" rows="3">
			<?php echo $ket; ?>
			</textarea>
		</div>
  </div>
</form>