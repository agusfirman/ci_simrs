<div class="box-header">
  <h3 class="box-title">Data PC Install AV FC</h3>
</div><!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">
<table id="table_pc_av" class="table table-bordered table-striped datatable">
    <thead>
     <tr class="bg-orange">
        <th>No</th>
        <th>Ip Address</th>
        <th>Hostname</th>
        <th>Lokasi</th>
        <th>Lantai</th>
        <th>Dekripsi</th>
        <th>Done Install</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql=$mysqli->query("select * from p_computer order by lantai ");
      $cek=mysqli_num_rows($sql);
      $no = 1;
      while($data = $sql->fetch_array()){
        extract($data);
        if($is_av !=1){
          $v_is_av = "<input data-size='mini' type='checkbox' name='toggle_av' id='toggle_$is_av' value='$id_pc' data-toggle='toggle' data-off='No' data-on='Yes'>";
        }else{
          $v_is_av = "<input data-size='mini' type='checkbox' name='toggle_av' id='toggle_$is_av' value='$id_pc' data-toggle='toggle' data-off='No' data-on='Yes' checked >";
        }
        echo"<tr>
          <td>$no</td>
          <td> $data[ip_address]</td>
          <td> $data[hostname]</td>
          <td> $data[lokasi]</td>
          <td> $data[os]</td>
          <td>$data[ket]</td>
          <td> $v_is_av</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
  </div>
</div><!-- /.box-body -->


<script type="text/javascript">
  $(document).ready(function(){
    $('input[name=toggle_av]').change(function(){
      var mode  = $(this).prop('checked');
      var id_pc    = $( this ).val();
     //alert(mode);
      $.ajax({
        type:'POST',
        dataType:'JSON',
        url:'controllers/ams/do_update_av.php',
        data:{mode:mode,id_pc:id_pc},
        success:function(data){
        var data=eval(data);
        //console.log(data);
          location.reload();
        }
      });
    });
    });

</script>
