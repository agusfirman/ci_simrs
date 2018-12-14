
<p/><!-- Editable table -->
<div class="card">
  <h4 class="card-header text-center font-weight-bold text-uppercase">Rincian Slip Pembayaran Supplier Antar Bank bca</h4>
  <div class="card-body">
    <div id="table" class="table-responsive">
			<table id="tbl_rincian" class="table table-hover table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
          <th class="text-center">NO</th>
          <th class="text-center">NO Rekening</th>
          <th class="text-center">Nama Pemilik</th>
          <th class="text-center">Nama Penyetor</th>
          <th class="text-center">No Rekening Penyetor</th>
          <th class="text-center">Nominal</th>
        </tr>
			</thead>
				<?php   $query=$mysqli->query("select * from dt_dokter where is_supplier =1 and norek_bca !='-' ");
		      $cek=$query->num_rows;
		      $no = 1;
					$nama_penyetor ='PT. FAMILY BAHAGIA SEJAHTERA';
					$norek_penyetor ='168.306.1020';
		      while($data = $query->fetch_array()){
						extract($data);
						echo"<tr>
			           	<td class='nomor'>$no</td>
					        <td align='left'>$norek_bca</td>
					        <td>$nama_dokter</td>
					        <td>$nama_penyetor</td>
					        <td>$norek_penyetor</td>
					        <td></td>

	        		</tr>";
		        $no++;
					}
						 ?>
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
