<?php
include("include/koneksi.php");
$query = "select * from set_fonts";
$sql =$mysqli->query($query);
?>
<!-- Bootstrap -->
<!-- <link href="assets/editable/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/datetimepicker.css" rel="stylesheet" media="screen"> -->

			<h1 class="text" >Edit Fonts Setoran</h1>
					<table class="table table-hover table-bordered">
						<tr>
							<th>NO</th>
							<th>Font Family</th>
							<th>NO Rekening</th>
							<th>Pemilik Rekening</th>
							<th>Alamat Rekening</th>
							<th>NO Telp</th>
							<th>Metode</th>
							<th>Nominal</th>
							<th>Total</th>
							<th>Terbilang</th>
						<tr>
							<?php
							$no =1;
							while ($result = mysqli_fetch_assoc($sql)) {
                extract($result);
								echo "</tr>
												<td>$no</td>
												<td>
                            <a href='#' id='font_family' data-pk='1' data-url='controllsers/setoran_bank/post.php' data-type='select' data-original-title=''>$font_family</a>
												</td>
												<td>
                            <a href='#' id='no_rekening' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$no_rekening</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$pemilik_rekening</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$alamat</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$telp</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$metode</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$nominal</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$total</a>
												</td>
												<td>
                            <a href='#' id='' data-type='text' data-pk='1' data-url='post.php' data-title='Enter username'>$terbilang</a>
												</td>
											<tr>";
											$no++;
							}
							 ?>
					</table>

					<script type="text/javascript">
						$.fn.editable.defaults.mode = "popup";
						$('#no_rekening').editable();
            $(function() {
							$('#font_family').editable({
								source: [{
									value: '',
									text: 'Silahkan Pilih'
								}, {
									value: 'India',
									text: 'India'
								}, {
									value: 'USA',
									text: 'USA'
								}, {
									value: 'Singapore',
									text: 'Singapore'
								}]
							});
						});
					</script>
