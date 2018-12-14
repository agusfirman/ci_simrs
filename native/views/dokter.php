
<div class="box-header">
  <h3 class="box-title">Data Dokter</h3>
</div><!-- /.box-header -->
<div class="box-body">
  <table id="" class="table table-bordered table-striped datatable">
    <thead>
     <tr class="bg-orange">
        <th>No</th>
		<th>Nama Pemilik Rekening</th>
		<th>BCA</th>
		<th>CIMB</th>
		<th>Mandiri</th>
		<th>BRI</th>
		<th>Supplier</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query=$mysqli->query("select * from dt_dokter ");
      $cek=$query->num_rows;
      $no = 1;
      while($data = $query->fetch_array()){
				extract($data);
        if($is_supplier !=1){
          $v_supplier = "<input data-size='mini' type='checkbox' name='toggle_perek' id='toggle_$is_supplier' value='$id' data-toggle='toggle' data-off='No' data-on='Ya'>";
        }else{
          $v_supplier = "<input data-size='mini' type='checkbox' name='toggle_perek' id='toggle_$is_supplier' value='$id' data-toggle='toggle' data-off='No' data-on='Ya' checked >";
        }
        echo"<tr>
           <td>$no</td>
	        <td>$nama_dokter</td>
	        <td>$norek_bca</td>
	        <td>$norek_cimb</td>
	        <td>$norek_mandiri</td>
	        <td>$norek_bri</td>
	        <td>$v_supplier</td>
	        <td>
	           <a href='#' onclick='' class='e_dokter' data-id='$id'>
					<i class='fa fa-pencil-square-o'></i>
				</a>|
				<a href='javascript:hapus(\"{$id}\")' class='text-danger'>
					<i class='fa fa-remove'></i>
				</a>
	        </td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
		<button class='btn btn-warning btn-sm btn-dm t_dokter btn-flat' data-id="0">Tambah Rekening</button>
  <br/>
</div><!-- /.box-body -->
</div><!-- /.box -->



<div class="modal fade" id="m_dokter" role="dialog">
    <div class="modal-dialog modal-sg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title text-center"></h4>
        </div>
        <div class="modal-body" >
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-sm btn-flat" id="b_simpan_dok">Simpan</button>
          <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>


	<script>
	$(document).ready(function(){
		$(".t_dokter,.e_dokter").click(function(){
			var id = $(this).attr("data-id");
			$("#m_dokter").modal('show');
			$.ajax({
				type	: "POST",
				url		: "controllers/dokter/f_dokter.php",
				data	: "id_dokter="+id,
				success	: function(data){
          //alert(id);
					$(".modal-body").html(data);
					 judul(id);
				}
			});
		});

		//fungsi judul modal
		function judul(id){
			if(id!=0){
			$(".modal-title").text("Edit Rekening");
			}else{
			$(".modal-title").text("Tambah Rekening");
			}
		}

      $('input[name=toggle_perek]').change(function(){
        var mode  = $(this).prop('checked');
        var id_perek    = $( this ).val();
        //alert(mode);
        //alert(id_perek);
        $.ajax({
          type:'POST',
          dataType:'JSON',
          url:'controllers/dokter/do_switch_perek.php',
          data:{mode:mode,id_perek:id_perek},
          success:function(data){
          var data=eval(data);
          //console.log(data.success);
            //location.reload();
          }
        });
      });
	});
		function hapus(ID) {
		var id	= ID;
	   var pilih = confirm('Dokter yang akan dihapus  = '+id+ '?');
		if (pilih==true) {
			$.ajax({
				type	: "POST",
				url		: "controllers/dokter/hapus_dokter.php",
				data	: "id="+id,
				success	: function(data){
					location.reload();
				}
			});
		}
	}

	</script>
