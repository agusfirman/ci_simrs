<h3 style="margin-top:80px" class="text-center text-red"> FORM BUKTI SETORAN || BANK BCA </h3>
<hr/>
<form id="form_bca_new" class="form-horizontal" action="" method="get">
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Pemilik Rekening</label>
		<div class="col-sm-3">
		  <select class="form-control input-sm nama" name="nama"  autofocus>
		  	<option value="">Nama Pemilik Rekening</option>
		  	<?php
		  	$query = $mysqli->query("select * from dt_dokter where norek_bri !='-' OR norek_cimb !='-' OR norek_bca !='-' ORDER BY nama_dokter ASC ");
		  	while($data = $query->fetch_array()){
          extract($data);
		  		echo '<option value="'.$id.'">'.$nama_dokter.'</option>';
		  	}
		  	 ?>
		  </select>
		</div>
  </div>
  <div class="form-group">
		<label class="col-sm-3 control-label">No. Rekening / Customer</label>
		<div class="col-sm-4">
			<input type="text" class="form-control input-sm norek" name="norek"  placeholder="No Rekening" readonly>
		</div>
  </div>
  <div class="form-group">
	<label class="col-sm-3 control-label">Nama Penyetor</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm nama_penyetor" name="nama_penyetor" placeholder="Nama Penyetor" readonly >
	</div>
  </div>
 <div class="form-group">
	<label  class="col-sm-3 control-label">Alamat Penyetor</label>
	<div class="col-sm-4">
	<input type="text" class="form-control input-sm alm_penyetor" name="alm_penyetor" placeholder="Alamat Penyetor" readonly >
	</div>
  </div>
  <div class="form-group">
	<label  class="col-sm-3 control-label">No. Telp</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm telp" name="telp" placeholder="No. Handphone" readonly>
	</div>
  </div>
  <div class="form-group">
  <label class="col-sm-3 control-label">Nama Bank</label>
    <div class="col-sm-3">
      <select class="form-control input-sm nama_bank" name="nama_bank"  autofocus>
        <option value="">Silahkan Pilih Nama Bank</option>
        <option value="BANK BNI">BANK BNI</option>
        <option value="BANK BNI">BANK BRI</option>
        <option value="BANK PANIN">BANK PANIN</option>
        <option value="BANK SINARMAS">BANK SINARMAS</option>
        <option value="BANK SINARMAS">BANK BIJI</option>
        <option value="CIMB BIAGA">CIMB NIAGA</option>
        <option value="MAYBIAGA">MAYBANK</option>
      </select>
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-3 control-label">Nama Kota</label>
    <div class="col-sm-3">
  	  <input type="text" class="form-control input-sm nama_kota" name="nama_kota" placeholder="Nama Kota">
    </div>
  </div>
  <div class="form-group">
	<label  class="col-sm-3 control-label">Jumlah Nominal</label>
	<div class="col-sm-4">
	  <input type="text" class="form-control input-sm nominal" name="nominal" placeholder="Jumlah Nominal">
	</div>
  </div>
  <div class="form-group">
	<div class="col-sm-offset-3 col-sm-6">
	  <button type="button" class="btn btn-primary btn-sm btn-flat"  id="btn_cetak_bca_new"><span class="glyphicon glyphicon-print" onclick=""  ></span>
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
  var nom = $('.nama_bank');
  var nom = $('.nominal');
  $("#btn_cetak_bca_new").click(function(e) {
      var nama_dokter = $('.nama');
    	var nama = $('.nama option:selected').text();
    	var norek = $('.norek').val();
    	var nama_penyetor = $('.nama_penyetor').val();
    	var alm_penyetor = $('.alm_penyetor').val();
    	var telp = $('.telp').val();
    	var nom = $('.nominal').val();
      var nominal = $('.nominal');
      var nama_bank = $('.nama_bank');
      var nama_kota = $('.nama_kota').val();
      var nama_bank_text = $('.nama_bank option:selected').text();
      if(nama_dokter.val().length==0){
    		nama_dokter.focus();
    		return false;
    	}else if(nama_bank.val().length==0){
    		nama_bank.focus();
    		return false;
    	}else if(nominal.val().length==0){
    		nominal.focus();
    		return false;
    	}else{
        var url = 'views/setoran_bank/pop-print-out-bca-new.php?norek='+norek+'&nama='+nama+'&nama_penyetor='+nama_penyetor+'&alm_penyetor='+alm_penyetor+'&telp='+telp+'&nama_kota='+nama_kota+'&nama_bank='+nama_bank_text+'&nom='+nom;
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
	            $(".nama_penyetor").val('PT. Family Bahagia Sejahtera');
	            $(".alm_penyetor").val(data.alamat);
	            $(".telp").val(data.telp);
	        	}
	    	});
		});
});
</script>
