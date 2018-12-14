<br/>
<div class="box-header">
  <h3 class="box-title">Data Acces Point</h3>
</div><!-- /.box-header -->

<?php
$kategori = ($kategori=$_POST['kategori'])?$kategori : $_GET['kategori'];
$cari = ($cari = $_POST['input_cari'])? $cari: $_GET['input_cari'];
$result_count = $mysqli->query("SELECT COUNT(*) as jumlah_ap FROM access_point WHERE is_active !='0'  ORDER BY lantai ");
$data_count_task   = $result_count->fetch_array();
extract($data_count_task);
?>
<div class="box-body">
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped datatables">
    <thead>
     <tr class="bg-orange">
        <th>No</th>
        <th>SSID</th>
        <th>IP Address</th>
        <th>Lantai</th>
        <th>Lokasi</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Dekripsi</th>
        <th>Aktif</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="fbody_ap">
      <!-- // 	<label class='switch'>
      //    <input type='checkbox' name='switch_aktif' class='switch_aktif' data-id='$data[id_ap]' $is_active_check />
      //     <div class='slider round'></div>
      //  </label> -->
   <?php
   // Cek apakah terdapat data page pada URL
   $page = (isset($_GET['view']))? $_GET['view'] : 1;
   $limit = 10;
   // Jumlah data per halamannya
   // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
   $limit_start = ($page - 1) * $limit;
   // Buat query untuk menampilkan data angota sesuai limit yang ditentukan
   // Eksekusi querynya
    $no = $limit_start + 1; // Untuk penomoran tabel
    $sql=$mysqli->query("select * from access_point ORDER by lantai limit $limit_start,$limit");
    $cek=mysqli_num_rows($sql);
      while($data = $sql->fetch_array()){
        extract($data);
        if($is_active !=1){
          $v_is_active = "<input data-size='mini' type='checkbox' name='toggle_ap' id='toggle_$is_active' value='$id_ap' data-toggle='toggle' data-off='Non Aktif' data-on='Aktif'>";
        }else{
          $v_is_active = "<input data-size='mini' type='checkbox' name='toggle_ap' id='toggle_$is_active' value='$id_ap' data-toggle='toggle' data-off='Non Aktif' data-on='Aktif' checked >";
        }
        echo"<tr>
          <td>$no</td>
          <td>$data[ssid]</td>
          <td> $data[ip_address]</td>
          <td> $data[lantai]</td>
          <td> $data[lokasi]</td>
          <td> $data[merk]</td>
          <td> $data[type]</td>
          <td>$data[ket]</td></td>
          <td> $v_is_active</td>
  </div>
		</td>
          <td>
            <a href='#' onclick='' class='e_ap' data-id='$data[id_ap]'>
              <i class='fa fa-pencil-square-o'></i>
            </a>|
            <a href='javascript:hapus(\"$data[id_ap]\")' class='text-danger d_ap'>
              <i class='fa fa-remove'></i>
            </a>
          </td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
  <ul class="pagination pagination-sm">        <!-- LINK FIRST AND PREV -->
    <?php
    if($page == 1){
    // Jika page adalah page ke 1, maka disable link PREV
    ?>
      <li class="disabled"><a href="#">First</a></li>
      <li class="disabled"><a href="#">&laquo;</a></li>
    <?php
    }else{ // Jika page bukan page ke 1
      $link_prev = ($page > 1)? $page - 1 : 1;
    ?>
      <li><a href="index.php?page=aW52ZW50b3JpX2l0&ID=YWNjZXNzX3BvaW50&view=1">First</a></li>
      <li><a href="index.php?page=aW52ZW50b3JpX2l0&ID=YWNjZXNzX3BvaW50&view=<?php echo $link_prev; ?>">&laquo;</a>
      </li>
    <?php
  }
  // Buat query untuk menghitung semua jumlah data
  $sql2 = $mysqli->query("SELECT COUNT(*) AS jumlah FROM access_point");
  // Eksekusi querynya
  $get_jumlah = $sql2->fetch_array();
  $jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
  // Hitung jumlah halamannya
  $jumlah_number = 5;
  // Tentukan jumlah link number sebelum dan sesudah page yang aktif
  $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
  // Untuk awal link number
  $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
  // Untuk akhir link number
    for($i = $start_number; $i <= $end_number; $i++){
      $link_active = ($page == $i)? ' class="active"' : '';        ?>
      <li<?php echo $link_active; ?>>
        <a href="index.php?page=aW52ZW50b3JpX2l0&ID=YWNjZXNzX3BvaW50&view=<?php echo $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php
  }

  // Jika page sama dengan jumlah page, maka disable link NEXT nya        // Artinya page tersebut adalah page terakhir
  if($page == $jumlah_page){
    // Jika page terakhir
  ?>
    <li class="disabled"><a href="#">&raquo;</a></li>
    <li class="disabled"><a href="#">Last</a></li>
  <?php
  }else{
    // Jika Bukan page terakhir
    $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;        ?>
    <li><a href="index.php?page=aW52ZW50b3JpX2l0&ID=YWNjZXNzX3BvaW50&view=<?php echo $link_next;?>">&raquo;</a></li>
    <li><a href="index.php?page=aW52ZW50b3JpX2l0&ID=YWNjZXNzX3BvaW50&view=<?php echo $jumlah_page;?>">Last</a></li>
  <?php
    }
    ?>
  </ul>

  </div>
</div><!-- /.box-body -->

<div class="modal fade" id="m_ap" role="dialog">
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
          <button type="submit" class="btn btn-success btn-sm btn-flat" id="b_ap">Simpan</button>
          <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('input[name=toggle_ap]').change(function(){
      var mode  = $(this).prop('checked');
      var id_ap    = $( this ).val();
    //  alert(mode);
      $.ajax({
        type:'POST',
        dataType:'JSON',
        url:'controllers/inventori_it/do_switch_ap.php',
        data:{mode:mode,id_ap:id_ap},
        success:function(data){
        var data=eval(data);
        //console.log(data);
          location.reload();
        }
      });
    });


     $('#b_ap').click(function(event){
        var ssid = $('input:text[name=ssid]');
        var ip_address = $('input:text[name=ip_address]');
        var lantai = $('select[name=lantai]');
        var lokasi = $('input:text[name=lokasi]');
        var ket = $('textarea[name=ket]');
        var url="models/inventori_it/simpan_ap.php";
        var string  = $("#f_ap").serialize();
        if(ssid.val().length==0){
        ssid.focus();
        return false;
        }
        if(ip_address.val().length==0){
        ip_address.focus();
        return false;
        }
        if(lantai.val().length==0){
        lantai.focus();
        return false;
        }
        if(lokasi.val().length==0){
        lokasi.focus();
        return false;
        }
     //alert(string);
      $.ajax({
          type  : "POST",
          url   : url,
          data  : string,
          success : function(data){

             $("#m_ap").modal('hide');
             //alert(data);
             location.reload();
          }
        });

      });


  $(".t_ap,.e_ap").click(function(){
    var id = $(this).attr("data-id");
    $("#m_ap").modal('show');
    $.ajax({
      type  : "POST",
      url   : "controllers/inventori_it/f_ap.php",
      data  : "id="+id,
      success : function(data){
        $(".modal-body").html(data);
         judul(id);
      }
    });
  });

  //fungsi judul modal
  function judul(id){
    if(id!=0){
    $(".modal-title").text("Edit Access Point");
    }else{
    $(".modal-title").text("Tambah Access Point");
    }
  }



});

function hapus(id_ap) {
  var id  = id_ap;
   var pilih = confirm('Users yang akan dihapus  = '+id+ '?');
  if (pilih==true) {
    $.ajax({
      type  : "POST",
      url   : "controllers/inventori_it/hapus_ap.php",
      data  : "id="+id,
      success : function(data){
        //alert(data);
        location.reload();
      }
    });
  }
}
</script>
<style type="text/css">
	/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 14px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 0px;
  bottom: -1px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(16px);
  -ms-transform: translateX(16px);
  transform: translateX(16px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 24px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
