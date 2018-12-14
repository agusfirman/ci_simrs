<br/>
<div class="box-header">
	<div class="box-title">
		<h2 class="text-center"> Form Penambahan Users Authorized</h2>
	</div>
</div>
<div class="box-body">
<hr/>
 <form class="form-horizontal" action="cetak/print-out-auth.php" method="post" target="_blank" onSubmit="confirm();">
	  <div class="form-group">
		<label class="col-sm-2 control-label">Nip</label>
		<div class="col-sm-2">
		  <input type="text" class="form-control input-sm" name="nip" id="nip" placeholder="NIP Pemohon" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Nama Pemohon</label>
		<div class="col-sm-3">
		  <input type="text" class="form-control input-sm" name="nm_pemohon" id="nm_pemohon" placeholder="Nama Pemohon" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Bagian</label>
		<div class="col-sm-3">
		  <input type="text" class="form-control input-sm" name="bagian" id="bagian" placeholder="Bagian" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Jabatan</label>
		<div class="col-sm-3">
		  <input type="text" class="form-control input-sm" name="jabatan" id="jabatan" placeholder="Jabatan" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">NIP Users Auth</label>
		<div class="col-sm-2">
		  <input type="text" class="form-control input-sm" name="nip_2" placeholder="NIP Users Authorized" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Nama Users</label>
		<div class="col-sm-3">
		  <input type="text" class="form-control input-sm" name="nm_users" id="nm_soft" placeholder="Nama Users" autofocus>
		</div>
	  </div>
	  <div class="form-group">
		<label  class="col-sm-2 control-label">Keterangan</label>
		<div class="col-sm-6"><textarea name="keterangan" class="form-control input-sm" rows="3" placeholder="Keterangan"></textarea>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
		  <button type="submit" id="btn-printistr" class="btn btn-warning btn-sm btn-flat" >
		  <span class="glyphicon glyphicon-print"></span> Cetak</button>
		  <button type="reset" class="btn btn-warning btn-sm btn-flat btn-reset"><span class="glyphicon glyphicon-refresh"></span> Kosongkan</button>
		</div>
	  </div>
	</form>

</div>
<script>
$(document).on("click", "#btn-printsmsblast", function() {
	if (confirm('Apakah anda yakin ?')) {
	 	$('. btn-reset').click();
	}else{
        return false;
    }
});
</script>
