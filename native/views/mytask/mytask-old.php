<div class="modal fade-scale" id="m_task" role="dialog" data-easein="bounceRightIn"  tabindex="-1" aria-labelledby="costumModalLabel" aria-hidden="true">
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
          <button type="submit" class="btn btn-success btn-sm btn-flat" id="b_task">Simpan</button>
          <button type="submit" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="m_detail" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title text-center">Ubah Status</h4>
        </div>
        <div class="modal-body" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-sm btn-flat" id="b_s_detail_task">Simpan</button>
          <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="msolv" role="dialog">
    <div class="modal-dialog modal-sm">
       Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title text-center">Pemecahan Masalah/ Solving</h4>
        </div>
        <div class="modal-body" >
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-sm btn-flat" id="b_s_solving">Simpan</button>
          <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
        </div>
      </div>
  </div>
</div>
<h3 class="box-title">Data List Task</h3>
<?php
$result_count = $mysqli->query("SELECT COUNT(*) as jumlah_task FROM `task` WHERE users_finished='' AND st_task !='close' ");
$data_count_task   = $result_count->fetch_array();
extract($data_count_task);
 ?>
<div class="row">
  <div class="col-md-6">
    <form class="form-inline" action="" method="post">
     <div class="form-group">
       <label class="control-label" >Periode Post</label>
       <input type="text" class="form-control datepicker input-small for_task" name="for_task" placeholder="From">
     </div>
     <div class="form-group">
       <input type="text" class="form-control datepicker to_task" name="to_task" placeholder="To">
       <input type="submit" class="btn btn-success btn-sm btn-flat b_priode" name="b_priode" value="Tampil" />
     </div>
   </form>
  </div>
  <div class="col-md-6">
  <div class="info-box bg-red">
   <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
   <div class="info-box-content">
     <span class="info-box-text">jika status sudah done task tidak diberlakukan fasilitas diedit</span>
     <span class="info-box-number"><?php echo $jumlah_task; ?> Task yang belum selesai</span>
     <!-- The progress section is optional -->
     <div class="progress">
       <div class="progress-bar" style="width: 70%"></div>
     </div>
     <span class="progress-description">
       70% Increase in 30 Days
     </span>
   </div><!-- /.info-box-content -->
 </div><!-- /.info-box -->
 </div>
</div>
<!-- form filter tanggal -->



<br/>
<div class="">
<div class="table-responsive">
  <table id="table_task" class="table table-bordered table-hover" width="100%" cellspacing="0">
     <thead class="bg-orange">
     <tr>
        <th width="1%">No</th>
        <!-- <th width="30%">Subject, Kategori , Spesifikasi</th> -->
        <th width="30%">Subject</th>
        <th width="30%">Kategori </th>
        <th width="30%">Spesifikasi</th>
        <th width="5%">Users Create</th>
        <th width="5%">Users Finished</th>
        <th width="5%">Users Claims</th>
        <th width="10%">Users Dept</th>
        <th width="10%">Problem / Case</th>
        <th width="20%">Solving</th>
        <th width="2%">Ext</th>
        <th width="5%">Tgl</th>
        <th width="5%">Status</th>
        <th width="5%">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if($_POST['b_priode']){
      $for = $_POST['for_task'];
      $to = $_POST['to_task'];
      $pecah_for = explode('/', $for);
      $for_tahun = $pecah_for[2];
      $for_bulan = $pecah_for[1];
      $for_tgl = $pecah_for[0];
      $for_task = $for_tahun.'-'.$for_bulan.'-'.$for_tgl;

      $pecah_to = explode('/', $to);
      $to_tahun = $pecah_to[2];
      $to_bulan = $pecah_to[1];
      $to_tgl = $pecah_to[0];
      $to_task = $to_tahun.'/'.$to_bulan.'-'.$to_tgl;

      $query="SELECT task.*,task_cat.nama_task_cat,sub_task_cat.nama_sub_cat FROM task
              INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat
              INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
              WHERE task.tgl_post BETWEEN '$for_task' AND '$to_task'
              order by task.id_task desc";

    }else{
      $query="SELECT task.*,task_cat.nama_task_cat,sub_task_cat.nama_sub_cat FROM task
              INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat
              INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
              order by task.id_task DESC ";
    }
      //echo $query;
      $result =$mysqli->query($query);
      $no = 1;
      while($data   = $result->fetch_array()){
      extract($data);
      if($st_task=='open'){
        $bg_st='text-primary';
      }else if($st_task=='procces'){
        $bg_st='text-orange';
      }else if($st_task=='done'){
        $bg_st='text-success';
      }else{
        $bg_st='text-default';
      }
      if($st_task=="done"){
          $edit = "<b>NONE</b>";
        }else{
          $edit ="<a href='#' onclick='' class='e_task' data-id='$data[id_task]'>
                    <i class='fa fa-pencil-square-o'></i>
                  </a>";
          }
      $pecah_format_date = explode('-', $data['tgl_post']);
      $tahun = $pecah_format_date[0];
      $bulan = $pecah_format_date[1];
      $tgl = $pecah_format_date[2];
      if($data[st_task]=='done'){
        $dis_st ='disabled';
      }else{
        $dis_st='';
      }

      // <td><b style='font-size:12px'>$subject</b><br/>, $nama_task_cat<br/>, $nama_sub_cat</td>
        echo"<tr>
              <td>$no</td>
              <td> $subject</td>
              <td> $nama_task_cat</td>
              <td> $nama_sub_cat</td>
              <td> $users_create</td>
              <td> $users_finished</td>
              <td> $users_claims</td>
              <td> $users_dept</td>
              <td> $_case</td>
              <td><a href='#' class='e_solv' name='solv' data-type='textarea' data-pk='$data[id_task]'>$solv</a></td>
              <td> $ext</td>
              <td> $tgl/$bulan/$tahun</td>
              <td>
                <div class='btn-group'>
                     <button type='button' class='btn btn-sm btn-info btn-flat dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                       ".strtoupper($st_task)." <span class='caret'></span>
                   </button>
                    <ul class='dropdown-menu' >
                     <li><a href='javascript:void(0)' value='done' data-id='$data[id_task]'>Done</a></li>
                     <li><a href='javascript:void(0)' value='process' data-id='$data[id_task]'>Process</a></li>
                     <li><a href='javascript:void(0)' value='open' data-id='$data[id_task]'>Open</a></li>
                     <li><a href='javascript:void(0)' value='close' data-id='$data[id_task]'>Close</a></li>
                   </ul>
                     </a>
                 </div>
              </td>
              <td>$edit</td>
            </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>
</div>
  <button class="btn btn-warning btn-sm btn-flat t_task" data-id="0" type="button" role="button" data-toggle="modal">Tambah Task</button>

<script type="text/javascript">
// $.fn.editable.defaults.mode = "popup";
//   $(".e_solv").editable();
  $(function()
     {
         $('.dropdown-menu li a').click(function(){
           var id_task =$(this).attr('data-id');
           var value = $(this).attr('value');
           // alert(id_task);
           $.ajax({
               type  : 'POST',
               url   : 'models/task/update_statustask.php',
               data  : 'id_task='+id_task+'&status='+value,
               success : function(data){
                 location.reload();
               }
             });
         });
     });

$('.e_solv').editable({
         url: 'views/mytask/post.php',
         type: 'text',
         pk: 1,
         name: 'solv',
         title: 'Masukan Solving Task'
  });
</script>
