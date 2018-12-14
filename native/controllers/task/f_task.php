<?php
session_start();
$id = $_POST[id];
include"../../include/koneksi.php";
if($id !='0'){
 	$query=$mysqli->query("SELECT task.*,task_cat.nama_task_cat, sub_task_cat.nama_sub_cat FROM task INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat INNER JOIN task_cat ON task_cat.id_task_cat = sub_task_cat.id_task_cat
                      where id_task='$id' ");
	$data_edit  = $query->fetch_array();
	$cek  = mysqli_num_rows($query);
	if($cek){
		$id 			     = $id;
		$subject 		     = $data_edit[subject];
		$id_cat 		    = $data_edit[task_cat];
		$nama_task_cat 	= $data_edit[nama_task_cat];
		$id_sub_cat 	= $data_edit[id_sub_cat];
		$nama_sub_cat 	= $data_edit[nama_sub_cat];
		$_case 			= trim($data_edit[_case]);
		$nm_pel 		= $data_edit[users_claims];
		$bagian 		= $data_edit[users_dept];
		$ext 			= $data_edit[ext];
	}
}
	$query_cat = $mysqli->query("SELECT * FROM task_cat");
 ?>

<form id="f_task" class="form-horizontal" action="" method="post">
  <div class="form-group">
	<input type="hidden" class="form-control input-sm" name="id"  value="<?php echo $id; ?>">
	<label class="col-sm-3 control-label">Subject</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control input-sm" name="subject" value="<?php echo $subject; ?>">
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">Kategori</label>
		<div class="col-sm-8">
			<select name="task_cat" id="task_cat" class="form-control input-sm" >
			<?php
				echo '
				<option value="'.$id_cat.'">'.$nama_task_cat.'</option>';
			 ?>
				<option value="">Silahkan Pilih</option>
				<?php
				while($data_cat   = $query_cat->fetch_array()){
					$id_cat =$data_cat[id_task_cat];
					$nama_task_cat = $data_cat[nama_task_cat];
					echo '<option value="'.$id_cat.'">'.$nama_task_cat.'</option>';
				}
				 ?>

			</select>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Spesifikasi</label>
		<div class="col-sm-8" id="spek" >
		<?php
			if($id !='0'){
			echo'<select name="spek" class="form-control input-sm spek" >
			<option value="'.$id_sub_cat.'">'.$nama_sub_cat.'</option>
			</select>';
			}else{
				?>
		  <input type="text" class="form-control input-sm">
			<?php
			}
			?>

		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Problem/ Case</label>
		<div class="col-sm-8">
			<textarea name="_case" class="form-control input-sm" cols="30" rows="3">
			<?php echo $_case; ?>
			</textarea>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Pelapor</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control input-sm" name="nm_pel" value="<?php echo $nm_pel; ?>">
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Bagian</label>
		<div class="col-sm-8">
					<select name="bagian"  id="bagian" class="form-control">
						<option value="">Silahkan Pilih</option>
						<?php
							$query_unit= $mysqli->query("select nama_unit from m_units");
					      	while($data_unit = $query_unit->fetch_array()){
					        echo"<option value='$data_unit[nama_unit]'>$data_unit[nama_unit]</option>";
					    }
						 ?>
					</select>
				</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Indikator Mutu</label>
		<div class="col-sm-8">
					<select name="in_mutu"  id="in_mutu" class="form-control">
						<option value="">Silahkan Pilih</option>
            <?php
							$query_indikator= $mysqli->query("select id,header_indikator from in_mutu");
					      	while($data_indikator = $query_indikator->fetch_array()){
					        echo"<option value='$data_indikator[id]'>$data_indikator[header_indikator]</option>";
					    }
						 ?>
					</select>
				</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Ext</label>
		<div class="col-sm-4" >
		  <input type="text" class="form-control input-sm" name="ext" value="<?php echo $ext; ?>">
		</div>
  </div>

</form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#task_cat').change(function(event) {
    	  var url='controllers/task/ambil_kat.php';
    	  var id_task = $("#task_cat").val();
    	  var main = 'mod/task/ambil_kat.php';
        //alert('test');
    	  $.ajax({
    	    type  : "POST",
    	    url   : url,
    	    data  : "id_task="+id_task,
    	    success : function(data){
    	      //alert(data);
    	      $("#spek").html(data);
    	    }
    	  });
    	});
      var subject = $('input:text[name=subject]');
      var _case = $('textarea[name=_case]');
      var nm_pel = $('input:text[name=nm_pel]');
          $(subject).keyup(function(){
              var txt = $(this).val();
                 $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
            });

            $(_case).keyup(function(){
              var txt = $(this).val();
                 $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
            });

            $(nm_pel).keyup(function(){
              var txt = $(this).val();
                 $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
            });

  });
</script>
