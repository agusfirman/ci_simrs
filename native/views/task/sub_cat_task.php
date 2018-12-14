  <h3 class="box-title">Datas List Sub Kategori </h3><div class="row">
	<div class="col-md-4">
		<form id="f_sub_task_cat" class="form-horizontal" action="#" method="post" >
      <div class="form-group" id="form-group-cat">
        <label class="control-label">Nama Kategori</label>
        <select class="form-control input-sm" name="fid_cat_task"  id="fid_cat_task">
          <option value="">== Silahkan Pilih ==</option>
        <?php
        	$query_cat = $mysqli->query("SELECT * FROM task_cat");
          while($data_cat   = $query_cat->fetch_array()){
            $id_cat =$data_cat[id_task_cat];
            $nama_task_cat = $data_cat[nama_task_cat];
            echo '<option value="'.$id_cat.'">'.$nama_task_cat.'</option>';
          }
          ?>
        </select>
      </div>
		  <div class="form-group">
				<label class="control-label">Nama Sub Kategori</label>
					<input type="hidden" class="form-control input-sm" name="fid_sub_cat_task"  id="fid_sub_cat_task" placeholder="Nama Kategori" value="0">
					<input type="text" class="form-control input-sm" name="fnama_sub_cat_task"  id="fnama_sub_cat_task" placeholder="Nama Kategori">
		  </div>
      <div class="form-group">
    	<label class="control-label">Deskripi</label>
    		  <textarea type="text" class="form-control input-sm" name="des_cat_task" id="des_cat_task" >
          </textarea>
      </div>
		  <div class="form-group">
			  <button type="button" class="btn btn-primary btn-sm btn-flat"  id="b_simpan_sub_cat_task">
						<span class="glyphicon glyphicon-saved" ></span>Simpan
        </button>
        </button>
 			  <button type="reset" class="btn btn-success btn-sm btn-flat t_sub_cat_task"><span class="glyphicon glyphicon-list" ></span>
 			  Baru
 			  </button>
		  </div>
		</form>
	</div>

<!-- Modal Cat Task-->
<div class="col-md-8">
  <table id="" class="table table-bordered table-striped datatable">
     <thead>
     <tr class="bg-orange">
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Sub Kategori</th>
        <th>Deskripsi</th>
        <th width="5%">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query=$mysqli->query("SELECT task_cat.nama_task_cat,sub_task_cat.* FROM sub_task_cat
                              INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
                              order by id_sub_cat desc ");
      $cek=mysqli_num_rows($query);
      $no = 1;
      while($data   = $query->fetch_array()){
        extract($data);
        echo"<tr>
          <td>$no</td>
          <td> $nama_task_cat</td>
          <td> $nama_sub_cat</td>
          <td> $deskripsi</td>
          <td>
            <a href='#' onclick='' class='e_sub_cat' data-id='$id_sub_cat' data-name='$nama_sub_cat' data-sub='$deskripsi'>
              <i class='fa fa-pencil-square-o'></i>
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
    var nama_sub_task_cat = $('#fnama_sub_cat_task');
    var fid_sub_cat_task      = $('#fid_sub_cat_task');
    var fid_cat_task      = $('#fid_cat_task');
    var des_cat_task      = $('#des_cat_task');

      $("#b_simpan_sub_cat_task").click(function(){

          var string            = $("#f_sub_task_cat").serialize();
          var url               = "models/task/simpan_sub_task_cat.php";
          if(nama_sub_task_cat.val().length==0){
             nama_sub_task_cat.focus();
             return false;
          }else if(des_cat_task.val().length==0){
             des_sub_task_cat.focus();
             return false;
          }
              $.ajax({
              type  : "POST",
              url   : url,
              data  : string,
              success : function(data){
                location.reload();
                 //alert(data);
              }
            });
          });

          $(".t_sub_cat_task").click(function(){
            //console.log('test');
            $('#form-group-cat').show();
          });

          $(".e_sub_cat").click(function(){
            $('#form-group-cat').hide();
            //alert('test');
             var id_cat_task = $(this).attr("data-id");
             var nama_sub_cat = $(this).attr("data-name");
             var des_sub_cat = $(this).attr("data-name");
              nama_sub_task_cat.val(nama_sub_cat);
              fid_sub_cat_task.val(id_cat_task);
         });
    });
          function judul_m_sub_cat_task(id){
            if(id!=0){
            $(".modal-title").text("Edit sub kategori task");
            }else{
            $(".modal-title").text("Tambah sub kategori task");
            }
          }


  </script>
