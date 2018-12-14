.<h3 style="margin-top:80px" class="text-center text-red"> FORM BUKTI SETORAN || BANK BCA</h3>
<hr/>
<!--action="cetak/print-out-bca.php"  target="_blank"-->
<form id="form_bca" class="form-horizontal" method="post" >
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Pemilik Rekening</label>
		<div class="col-sm-3">
		  <select class="form-control input-sm nama" name="nama"  id="" autofocus>
		  	<option value="">Nama Pemilik Rekening</option>
		  	<?php
		  	$query = $mysqli->query("select id, nama_dokter from dt_dokter where norek_bca !='-' order by nama_dokter ASC ");
		  	while($data = mysqli_fetch_array($query)){
		  		echo '<option value="'.$data[id].'">'.$data[nama_dokter].'</option>';
		  	}
		  	 ?>
		  </select>
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">No. Rekening / Customer</label>
		<div class="col-sm-4">
			<input type="text" class="form-control input-sm norek" name="norek"  id="" placeholder="No Rekening" readonly>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Penyetor</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm nama_penyetor" name="nama_penyetor" id=""  placeholder="Nama Penyetor" readonly >
	</div>
  </div>
 <div class="form-group">
	<label  class="col-sm-3 control-label">Alamat Penyetor</label>
	<div class="col-sm-4">
	<input type="text" class="form-control input-sm alm_penyetor" name="alm_penyetor" id=""  placeholder="Alamat Penyetor" readonly >
	</div>
  </div>
  <div class="form-group">
	<label  class="col-sm-3 control-label">No. Telp</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm telp" name="telp" id="" placeholder="No. Handphone" readonly>
	</div>
  </div>
  <div class="form-group">
	<label  class="col-sm-3 control-label">Jumlah Nominal</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm nominal" name="nominal" id="" placeholder="Jumlah Nominal">
	</div>
  </div>
  <div class="form-group">
	<div class="col-sm-offset-3 col-sm-6">
	  <button type="submit" class="btn btn-primary btn-sm btn-flat"  id="btn_cetak_bca"><span class="glyphicon glyphicon-print" onclick=""  ></span>
	  Cetak
	  </button>
	  <button type="reset" class="btn btn-primary btn-sm btn-flat"><span class="glyphicon glyphicon-refresh"></span> Kosongkan</button>
	</div>
  </div>
</form>

<script type="text/javascript">
// cetak/print-out-bca.php
$(document).ready(function(){
	var nama = $('.nama');
	var norek = $('.norek');
	var nama_penyetor = $('.nama_penyetor');
	var alm_penyetor = $('.alm_penyetor');
	var telp = $('.telp');
	var nom = $('.nominal');

	$("#btn_cetak_bca").click(function(event) {
	var nama = $('.nama option:selected').text();
	var norek = $('.norek').val();
	var nama_penyetor = $('.nama_penyetor').val();
	var alm_penyetor = $('.alm_penyetor').val();
	var telp = $('.telp').val();
	var nom = $('.nominal').val();
	var nominal = $('.nominal');
		if(nom.length==0){
			nominal.focus();
			return false;
		}
    else{
        var url = 'views/setoran_bank/pop-print-out-bca.php?norek='+norek+'&nama='+nama+'&nama_penyetor='+nama_penyetor+'&alm_penyetor='+alm_penyetor+'&telp='+telp+'&nom='+nom;
        window.open(url, 'popupform', 'toolbar=no,statusbar=no,menubar=no,resizable=yes,scrollbars=yes,width=720,height=720');
      }
	});

	$(norek).on('keypress', function(e) {
		 var c = e.keyCode || e.charCode;
		 switch (c) {
		  case 8: case 9: case 27: case 13: return;
		  case 65:
		   if (e.ctrlKey === true) return;
		 }
		 if (c < 48 || c > 57) e.preventDefault();
		});
		$(telp).on('keypress', function(e) {
		 var c = e.keyCode || e.charCode;
		 switch (c) {
		  case 8: case 9: case 27: case 13: return;
		  case 65:
		   if (e.ctrlKey === true) return;
		 }
		 if (c < 48 || c > 57) e.preventDefault();
		});
		$(nom).on('keypress', function(e) {
		 var c = e.keyCode || e.charCode;
		 switch (c) {
		  case 8: case 9: case 27: case 13: return;
		  case 65:
		   if (e.ctrlKey === true) return;
		 }
		 if (c < 48 || c > 57) e.preventDefault();
		});

		//buat combo nama dokter ketika di pilih
		$(".nama").change(function(){
			var id = $(".nama").val();
			var url = "views/ambil_data.php"
			 $.ajax({
				type : "POST",
		        url  : url,
                dataType: "json",
		        data : "id_dokter="+id,
		        cache: false,
		        success: function(data){
	            //jika data sukses diambil dari server kita tampilkan
	            //alert(data);
	            $(".norek").val(data.norek);
	            $(".nama_penyetor").val(data.nama_penyetor);
	            $(".alm_penyetor").val(data.alamat);
	            $(".telp").val(data.telp);
	        	}
	    	});
		});
});
</script>
