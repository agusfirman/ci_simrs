
<br/>
<div class="box-header">
  <h3 class="box-title">Data Roles roles</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table id="" class="table table-bordered table-hover table-striped datatable">
    <thead>
     <tr class="bg-orange">
        <th width="5%" >No</th>
        <th>Roles Name</th>
        <th width="5%" ></th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql=$mysqli->query("select * from roles ");
      $cek=$sql->num_rows;
      $no = 1;
      while($data = $sql->fetch_assoc()){
        extract($data);

        echo"<tr>
          <td>$no</td>
          <td>$role_name</td>
          <td>
            <a href='#' onclick='' class='e_roles' data-id='$id_role'>
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
  <button class='btn btn-warning btn-sm btn-flat t_roles' data-id='0'>Tambah roles</button>
  <br/>
</div><!-- /.box-body -->

<div class="modal fade" id="m_roles" role="dialog">
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
       <button type="submit" class="btn btn-success btn-sm btn-flat" id="b_roles">Simpan</button>
       <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
     </div>
   </div>
 </div>
</div>
