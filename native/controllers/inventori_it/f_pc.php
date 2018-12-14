<?php
$id = @$_POST[id];
include"../../include/koneksi.php";
if($id !='0'){
 	$query=$mysqli->query("SELECT * from p_computer where id_pc='$id' ");
	$data_edit  = $query->fetch_array();
	$cek  = $query->num_rows;
  extract($data_edit);
	if($cek >0){
		$id 			= $id;
		$id_pc 			= $id_pc;
		$ip_address 	= $ip_address;
		$hostname 		= $hostname;
		$lokasi 		= $lokasi;
		$lantai 		= $lantai;
		$merk 			= $merk;
		$type 			= $type;
		$os 			= $os;
		$ket 			= $ket;
	}
}
 ?>

<form id="f_pc" class="form-horizontal" action="" method="post">
  <div class="form-group">
	<input type="hidden" class="form-control input-sm" name="id"  value="<?php echo $id; ?>">
	<label class="col-sm-3 control-label">Ip Address</label>
		<div class="col-sm-4">
		  <input type="text" class="form-control input-sm" name="ip_address" value="<?php echo @$ip_address; ?>" placeholder='xxx.xxx.xxx.xxx'>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Hostname</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="hostname" value="<?php echo @$hostname; ?>">
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Lokasi</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="lokasi" value="<?php echo @$lokasi; ?>">
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
		  <input type="text" class="form-control input-sm" name="merk" value="<?php echo @$merk; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Type</label>
		<div class="col-sm-4">
			<select name="type" id="type" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$type.'">'.$type.'</option>';
			 ?>
				<option value="Dekstop">Dekstop</option>
				<option value="Laptop">Laptop</option>
			</select>
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Windows</label>
		<div class="col-sm-4">
			<select name="os" id="os" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$os.'">'.$os.'</option>';
			 ?>
				<option value="Windows 7">Windows 7</option>
				<option value="Windows 10">Windows 10</option>
			</select>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Keterangan</label>
		<div class="col-sm-8">
			<textarea name="ket" class="form-control input-sm" cols="30" rows="3">
			<?php echo @$ket; ?>
			</textarea>
		</div>
  </div>
</form>
