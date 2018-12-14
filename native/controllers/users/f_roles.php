<?php
$id = $_POST['id'];
if($id !="0"){
	include"../../include/koneksi.php";
 	$query=$mysqli->query("select * from roles where id_role='$id' ");
    $cek=mysqli_num_rows($query);
    $data = $query->fetch_array();
		extract($data);
}
 ?>

<form id="f_roles" class="form-horizontal" action="" method="post">
  <div class="form-group">
		<label class="col-sm-3 control-label">Name Roles </label>
		<div class="col-sm-8">
			<input type="hidden" class="form-control input-sm" name="id"  value="<?php echo $id; ?>">
			<input type="text" class="form-control input-sm" name="role_name"  value="<?php echo $role_name ?>" autofocus>
		</div>
  </div>
</form>

<script type="text/javascript">
// cetak/print-out-bca.php
$(document).ready(function(){

	var nik = $('input:text[name=nik]');
	var nama = $('input:text[name=nama]');
	var usersname = $('input:text[name=usersname]');
	var pass = $('input:password[name=pass]');
	var level = $('select[name=level]');


	$('#b_users').bind("click", function(event) {
		var url="controller/users/simpan_users.php";
		var string = $("#f_users").serialize();
		var main = 'controller/users/tampil_users.php';

		alert(val(nik));
		if(nik.val().==0){
		nik.focus();
		return false;
		}else if(nama.val().length==0){
			nama.focus();
		return false;
		}else if(usersname.val().length==0){
			usersname.focus();
		return false;
		}else if(pass.val().length==0){
		pass.focus();
		return false;
		}else if(level.val().length==0){
		level.focus();
		return false;
		}
			$.ajax({
			type	: "POST",
			url		: url,
			data	: string,
			success	: function(data){
				$("#m_users").modal('hide');
					location.reload();
			});
		});

	});

	$(nik).on('keypress', function(e) {
		 var c = e.keyCode || e.charCode;
		 switch (c) {
		  case 8: case 9: case 27: case 13: return;
		  case 65:
		   if (e.ctrlKey === true) return;
		 }
		 if (c < 48 || c > 57) e.preventDefault();
	});
});
</script>
