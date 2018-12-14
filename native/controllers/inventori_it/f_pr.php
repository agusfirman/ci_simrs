<?php
$id = $_POST[id];
include"../../include/koneksi.php";
if($id !='0'){
 	$query=$mysqli->query("select printer.*, barang_it.nama_barang from printer left join barang_it ON printer.id_barang = barang_it.id_barang_it where id_pr='$id' ");
	$data_edit  = $query->fetch_array();
	$cek  = mysqli_num_rows($query);
	if($cek){
		$id 			= $id;
		$id_pr 			= $data_edit[id_pr];
		$lokasi 		= $data_edit[lokasi];
		$lantai 		= $data_edit[lantai];
		$merk 			= $data_edit[merk];
		$seri 			= $data_edit[seri];
		$type 			= $data_edit[type];
		$jumlah_pr		= $data_edit[jumlah_pr];
		$nama_barang 	= $data_edit[nama_barang];
		$id_barang 		= $data_edit[id_barang];
		$ket 			= $data_edit[ket];
	}
}
	$query_brg= $mysqli->query("SELECT id_barang_it,nama_barang FROM `barang_it` WHERE nama_barang LIKE '%printer%' AND id_barang_it !='$id_barang' ");

 ?>

<form id="f_pr" class="form-horizontal" action="" method="post">
  <div class="form-group">
	<input type="hidden" class="form-control input-sm" name="id"  value="<?php echo $id; ?>">
	<label class="col-sm-3 control-label">Lokasi</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="lokasi" value="<?php echo $lokasi; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Lantai</label>
		<div class="col-sm-8">
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
		<label class="col-sm-3 control-label">Type</label>
		<div class="col-sm-8">
			<select name="type" id="type" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$type.'">'.$type.'</option>';
			 ?>
				<option value="Deskjet">Deskjet</option>
				<option value="Laser">Laser</option>
				<option value="Ribbon Dot Metrik">Ribbon Dot Metrik</option>
				<option value="Ribbon Infrared">Ribbon Infrared</option>
			</select>
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Master Barang</label>
		<div class="col-sm-8">
			<select name="nama_barang" id="nama_barang" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$id_barang.'">'.$nama_barang.'</option>';
				while($data_brg  = $query_brg->fetch_array()){
				$id_barang_it =$data_brg[id_barang_it];
				$nama_barang = $data_brg[nama_barang];
				echo '<option value="'.$id_barang_it.'">'.$nama_barang.'</option>';
			}
			 ?>
			</select>
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Jumlah</label>
		<div class="col-sm-2">
			<select name="jumlah_pr" id="jumlah_pr" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$jumlah_pr.'">'.$jumlah_pr.'</option>';
			 ?>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
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
