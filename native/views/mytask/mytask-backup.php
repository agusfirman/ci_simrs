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

<h3 class="box-title">Data List Task</h3>
<?php
$result_count = $mysqli->query("SELECT COUNT(*) as jumlah_task FROM `task` WHERE st_task =1 OR st_task =2  ");
$data_count_task   = $result_count->fetch_array();
extract($data_count_task);

function status($st_task){
  if($st_task==1){
    $st_text='open';
    $bg_st='text-primary';
  }else if($st_task==2){
    $st_text='procces';
    $bg_st='text-orange';
  }else if($st_task==3){
    $st_text='done';
    $bg_st='text-success';
  }else{
    $st_text='close';
    $bg_st='text-default';
  }
  return array($st_text,$bg_st);
}
 ?>
<div class="row">
  <div class="col-md-6">
   <form class="form-horizontal" action="" name="form-periode" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Periode:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control datepicker" name="from_task" placeholder="From">
      </div>
      <div class="col-sm-5">
        <input type="text" class="form-control datepicker" name="to_task" placeholder="To">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Status:</label>
      <div class="col-sm-4">
        <select class="form-control" name="sel_st">
          <option value="" class="form-control">Please Select</option> -->
            <?php
            $q_status =$mysqli->query("SELECT st_task FROM `task` GROUP by st_task");
            while($data_st   = $q_status->fetch_array()){
              echo '<option value="'.$data_st[st_task].'" class="form-control">'.ucwords(status($data_st[st_task])[0]).'</option>';
            }
            ?>
      </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <form  name="form-export" class="" action="" method="post">
          <input type="submit" class="btn btn-sm btn-flat btn-primary b_priode" name="b_priode" value="Search" />
          <button class="btn btn-primary btn-sm btn-flat t_task" data-id="0" type="button" role="button" data-toggle="modal"> <span class='glyphicon glyphicon-plus'></span> Create</button>
        </form>
      </div>

    </div>
  </form>
  </div>


  <!-- <div class="col-md-6">
    <div class="alert alert-warning" role="alert">jika status sudah done task tidak dilakukan diedit
      <span class="info-box-number"><?php //echo $jumlah_task; ?> Task yang belum selesai ....</span>
    </div>
 </div> -->
</div>
<!-- form filter tanggal -->

<br/>
<div class="box-body">
<div class="table-responsive">
  <table id="table_task" class="table table-striped table-hover datatables" >
     <thead class="thead-warning">
     <tr>
        <th>No</th>
        <th>Subject</th>
        <th>Kategori</th>
        <th>Spesifikasi</th>
        <th>Indikator Mutu</th>
        <!-- <th width="30%">Subject |Kategori|Spesifikasi</th> -->
        <th>Users Create</th>
        <th>Users Finished</th>
        <th>Users Claims</th>
        <th>Users Dept</th>
        <th>Problem / Case</th>
        <th>Solving</th>
        <th>Ext</th>
        <th>Tgl</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php

    if($_POST['b_priode']){
      $for = $_POST['from_task'];
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
      $sel_st =$_POST['sel_st'];
      if($sel_st){
        $filter ="AND task.st_task='$sel_st' ";
      }else {
        $filter ="";
      }
      if($for & $to){
        $priode= "WHERE task.tgl_post BETWEEN '$for_task' AND '$to_task' ";
      }else{
          $priode= "";
      }

      $query="SELECT task.*,task_cat.nama_task_cat,sub_task_cat.nama_sub_cat,in_mutu.header_indikator FROM task
              INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat
              INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
              INNER JOIN in_mutu ON task.indikator = in_mutu.id
              $priode $filter ORDER BY st_task asc";

    }else{
      $query="SELECT task.*,task_cat.nama_task_cat,sub_task_cat.nama_sub_cat,in_mutu.header_indikator FROM task
              INNER JOIN sub_task_cat ON task.id_sub_cat = sub_task_cat.id_sub_cat
              INNER JOIN task_cat ON sub_task_cat.id_task_cat = task_cat.id_task_cat
              INNER JOIN in_mutu ON task.indikator = in_mutu.id
              ORDER BY task.tgl_post desc ";
    }

      $no=1;
      $result =$mysqli->query($query);
      while($data   = $result->fetch_array()){
      extract($data);

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
      if($data[st_task]=='3'){
        $dis_st ='disabled';
      }else{
        $dis_st='';
      }

      // <td> $subject |$nama_task_cat | $nama_sub_cat</td>
        echo"<tr>
              <td>$no</td>
              <td> $subject</td>
              <td> $nama_task_cat</td>
              <td> $nama_sub_cat</td>
              <td> $header_indikator</td>
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
                       ".ucwords(status($st_task)[0])." <span class='caret'></span>
                   </button>
                    <ul class='dropdown-menu' >
                    <li><a href='javascript:void(0)' value='1' data-id='$data[id_task]'>Open</a></li>
                     <li><a href='javascript:void(0)' value='2' data-id='$data[id_task]'>Process</a></li>
                      <li><a href='javascript:void(0)' value='3' data-id='$data[id_task]'>Done</a></li>
                     <li><a href='javascript:void(0)' value='4' data-id='$data[id_task]'>Close</a></li>
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

<script type="text/javascript">
// $.fn.editable.defaults.mode = "popup";
  // $(".e_solv").editable();
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
  $(document).ready(function() {
    // $("#cari").keyup(function(){
    //   $("#fbody").find("tr").hide();
    //     var data = this.value.split("");
    //     var jo = $("#fbody").find("tr");
    //     $.each(data, function(i, v){
    //       jo = jo.filter("*:contains('"+v+"')");
    //     });
    //    jo.fadeIn();
    //  });
     //validasi jika form search filter data kosong
         $('.b_priode').click(function(){
           if($('.from_task').val().length==''){
               $('.from_task').focus();
               return false;
           }else if($('.to_task').val().length==''){
              $('.to_task').focus();
              return false;
           }else{
             return true;
           }
         });
});
</script>
