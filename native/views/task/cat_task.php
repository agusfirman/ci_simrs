<h3 class="box-title">Data List Kategori </h3>
<div class="row">
	<div class="col-md-4">
		<form id="f_task_cat" class="form-horizontal" action="#" method="post" >
		  <div class="form-group">
				<label class="col-sm-4 control-label">Nama Kategori</label>
				<div class="col-sm-12">
					<input type="hidden" class="form-control input-sm" name="id_cat_task"  id="fid_cat_task" placeholder="Nama Kategori" value="0">
					<input type="text" class="form-control input-sm" name="nama_cat_task"  id="fnama_cat_task" placeholder="Nama Kategori">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-8">
			  <button type="submit" class="btn btn-primary btn-sm btn-flat"  id="b_simpan_cat_task">
						<span class="glyphicon glyphicon-saved" ></span>Simpan
        </button>
        </button>
 			  <button type="reset" class="btn btn-success btn-sm btn-flat"  id="t_cat_task"><span class="glyphicon glyphicon-list" ></span>
 			  Baru
 			  </button>
			</div>
		  </div>
		</form>
	</div>

  <div class="col-md-8">
    <table id="" class="table table-bordered table-striped datatable">
       <thead>
       <tr class="bg-orange">
          <th>No</th>
          <th>Nama Kategori</th>
          <th width="5%">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $query=$mysqli->query("select * from task_cat ");
        $cek=mysqli_num_rows($query);
        $no = 1;
        while($data   = $query->fetch_array()){
          extract($data);
          echo"<tr>
            <td>$no</td>
            <td>$nama_task_cat</td>
            <td>
              <a href='javascript:void(0)' onclick='' class='e_cat_task' data-id='$data[id_task_cat]' data-name='$nama_task_cat'>
                <i class='fa fa-pencil-square-o'></i>
              </a>
              </a>
            </td>
          </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>


  <script>
$(document).ready(function(){
  $("#b_simpan_cat_task").click(function(){
        var string = $("#f_task_cat").serialize();
        var nama_task_cat = $('#fnama_cat_task')
        var url = "models/task/simpan_task_cat.php";
        if(nama_task_cat.val().length==0){
         nama_task_cat.focus();
         return false;
       }

          $.ajax({
          type  : "POST",
          url   : url,
          data  : string,
          success : function(data){
             location.reload();
          }
        });
      });

   $(".e_cat_task").click(function(){
      var id_cat_task = $(this).attr("data-id");
      var nama_cat_task = $(this).attr("data-name");
      $('#fnama_cat_task').val(nama_cat_task);
      $('#fid_cat_task').val(id_cat_task);
  });

});
   function simpan_cat(url,string){

      }


  function judul_m_cat_task(id_cat_task){
    if(id_cat_task!=0){
    $(".modal-title").text("Edit kategori task");
    }else{
    $(".modal-title").text("Tambah kategori task");
    }
  }

  //untuk hapus mytask
    function hapus_taskcat(id_task_cat) {
      var id_task_cat   = id_task_cat;
       var pilih = confirm('id_task_cat yang akan dihapus  = '+id_task_cat+ '?');
      if (pilih==true){
        $.ajax({
          type  : "POST",
          url   : "models/task/hapus_task_cat.php",
          data  : "id_task_cat="+id_task_cat,
          success : function(data){
            location.reload();
          }
        });
      }
    }

</script>
