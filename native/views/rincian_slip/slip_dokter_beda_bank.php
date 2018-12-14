
<p/><!-- Editable table -->
<div class="card">
  <h4 class="card-header text-center font-weight-bold text-uppercase">Rincian Slip Pembayaran Dokter Antar BANK Lain</h4>
  <div class="card-body">
    <div id="table" class="table-responsive">
			<h5>TANGGAL :</h5>
			<table id="tbl_rincian" class="table table-hover table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
          <th class="text-center">NO</th>
          <th class="text-center">NO Rekening</th>
          <th class="text-center">Nama Pemilik</th>
          <th class="text-center">Nama Penyetor</th>
          <th class="text-center">No Rekening</th>
          <th class="text-center">Bank Penerima</th>
          <th class="text-center">Nominal</th>
        </tr>
			</thead>
				<?php   $query=$mysqli->query("select * from dt_dokter where is_supplier =0 and norek_bca ='-' ");
		      $cek=$query->num_rows;
		      $no = 1;
					$nama_penyetor ='PT. FAMILY BAHAGIA SEJAHTERA';
					$norek_penyetor ='168.306.1020';
		      while($data = $query->fetch_array()){
						extract($data);
            if($norek_bri !='-'){
              $norek_penerima = $norek_bri;
              $bank = 'BRI';
            }else if($norek_cimb !='-'){
              $norek_penerima = $norek_cimb;
              $bank = 'CIMB NIAGA';
            }else{
              $norek_penerima = $norek_mandiri;
              $bank = 'MANDIRI';
            }
						echo"<tr>
			           	<td class='nomor'>$no</td>
					        <td align='left'>$norek_penerima</td>
					        <td>$nama_dokter</td>
					        <td>$nama_penyetor</td>
					        <td>$norek_penyetor</td>
					        <td>$bank</td>
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
