<h4 class="text-center text-red">TAMU UNDANGAN</h4>
<hr/>
<div class="row">
	<div class="col-md-4">
		<form id="form_bk_tamu" class="form-horizontal" action="" method="post" >
		  <div class="form-group">
				<label class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control input-sm" name="id_undangan"  id="id_undangan" placeholder="Nama" value="0">
					<input type="text" class="form-control input-sm" name="nama_undangan"  id="nama_undangan" placeholder="Nama">
				</div>
		  </div>
		  <div class="form-group">
				<label class="col-sm-4 control-label">Units</label>
				<div class="col-sm-8">
					<select name="departement"  id="departement" class="form-control">
						<option value="">Silahkan Pilih</option>
						<?php
							$query_unit= $mysqli->query("select nama_unit from m_units");
					      	while($data_unit = $query_unit->fetch_assoc()){
										extract($data_unit);
					        echo"<option value='$nama_unit'>$nama_unit</option>";
					    }
						 ?>
					</select>
				</div>
		  </div>
		  <div class="form-group">
				<label class="col-sm-4 control-label">Deskripsi</label>
				<div class="col-sm-8">
					<input type="text" class="form-control input-sm" name="deskripsi"  id="deskripsi" placeholder="Silahkan ketikan untuk unit lain">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
			  <button type="submit" class="btn btn-primary btn-sm btn-flat"  id="btn_simpan_bk_tamu"><span class="glyphicon glyphicon-saved" ></span>
			  Simpan
			  </button>
			  <button type="reset" class="btn btn-success btn-sm btn-flat"  id="btn_new_bk_tamu"><span class="glyphicon glyphicon-list" ></span>
			  Baru
			  </button>
			</div>
		  </div>
		</form>
	</div>
	<div class="col-md-8">
		<!-- table  -->
		<div class="box-body">
		<div class="table-responsive">
		  <table id="" class="table table-bordered table-striped datatable">
		    <thead>
		     <tr class="bg-orange">
		        <th width="20%">No Undian</th>
		        <th>Nama</th>
		        <th>Departement</th>
		        <th>Deskripsi</th>
		        <th width="10%">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		      $query= $mysqli->query("select * from tamu_undangan ");
		      $cek= $query->num_rows;
						$no = 0;
		      while($data = $query->fetch_array()){
						$no++;
					extract($data);
		        echo"<tr>
		          <td>$no</td>
		          <td>$nama</td>
		          <td>$departement</td>
		          <td>$deskripsi</td>
		          <td>
		            <a href='javascript:void(0)' onclick='' class='e_undian' data-id='$no_undian' data-name='$nama' data-des='$deskripsi' >
		              <i class='fa fa-pencil-square-o'></i>
		            </a>|
		            <a href='javascript:hapus_buktam(\"{$no_undian}\")' class='text-danger'>
		              <i class='fa fa-remove'></i>
		            </a>
		          </td>
		        </tr>";
		      }
		      ?>
		    </tbody>
		  </table>
		  </div>
		</div><!-- /.box-body -->
	</div>
</div>
<script type="text/javascript">
// cetak/print-out-bca.php
$(document).ready(function(){
	$("#btn_simpan_bk_tamu").click(function(){
 	var string = $("#form_bk_tamu").serialize();
		//alert(string);
	var url = "models/buku-tamu/simpan_tamu.php";
	var nama_undangan = $('#nama_undangan');
		if(nama_undangan.val().length==0){
			nama_undangan.focus();
			return false;
		}
			$.ajax({
	          type  : "POST",
	          url   : url,
	          data  : string,
	          success : function(data){
		        //data : "nama_undangan="+nama_undangan,
		        //jika data sukses diambil dari server kita tampilkan
		       alert(data);
		       // reload();
		    	}
			});
	});

$('#nama_undangan').keyup(function(){
    this.value = this.value.toUpperCase();
});
	//buat combo nama dokter ketika di pilih
	$(".e_undian").click(function(){
		var id_undian = $(this).attr('data-id');
		var nama = $(this).attr('data-name');
		var nama_undangan = $('#nama_undangan');
		var departement = $('#departement');
		var val_dept = $('#departement');
		var id_undangan = $('#id_undangan');
		var deskripsi = $('#deskripsi');
		var val_deskripsi = $(this).attr('data-des');

		id_undangan.val(id_undian);
		nama_undangan.val(nama);
		deskripsi.val(val_deskripsi);
		//alert(id_undian);
		//  $.ajax({
		// 	type : "POST",
	 //        url  : url,
	 //        dataType: "json",
	 //        data : "id_dokter="+id,
	 //        cache: false,
	 //        success: function(data){
	 //        //jika data sukses diambil dari server kita tampilkan
	 //        //alert(data);
	 //        $("#norek").val(data.norek);
	 //        $("#nama_penyetor").val(data.nama_penyetor);
	 //        $("#alm_penyetor").val(data.alamat);
	 //        $("#telp").val(data.telp);
	 //    	}
		// });
	});
});
//untuk hapus buku tamu
    function hapus_buktam(id_undian) {
      var id_undian   = id_undian;
       var pilih = confirm('id undian yang akan dihapus  = '+id_undian+ '?');
      if (pilih==true){
        $.ajax({
          type  : "POST",
          url   : "models/buku-tamu/hapus_buktam.php",
          data  : "id_undian="+id_undian,
          success : function(data){
            location.reload();
          }
        });
      }
    }

</script>
