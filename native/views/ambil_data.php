<?php
include("../include/koneksi.php");
$id = $_POST['id_dokter'];
$sql ="SELECT * FROM dt_dokter WHERE id='$id'";
$result = $mysqli->query($sql);
$data = $result->fetch_array();
$bca = $data[norek_bca];
$cimb = $data[norek_cimb];
$mandiri = $data[norek_mandiri];
$bri = $data[norek_bri];
if($id !=""){
	if($bca !="-"){
		$pecah = substr($bca,0,3);
		$pecah2 = substr($bca,3,2);
		$pecah3 = substr($bca,5,4);
		$pecah4 = substr($bca,9);
		$nama_dokter=$data['nama_dokter'];
		$nama_penyetor = "PT. FAMILY BAHAGIA SEJAHTERA";
		$norek = $pecah."-".$pecah2."-".$pecah3."-".$pecah4;
		$alamat	= "PIK";
		$nama_bank	= "BCA";
		$telp = "29673737";
	}else if($cimb !="-"){
		$pecah = substr($cimb,0,3);
		$pecah2 = substr($cimb,3,2);
		$pecah3 = substr($cimb,5,5);
		$pecah4 = substr($cimb,10,2);
		$pecah5 = substr($cimb,12);
		$nama_dokter=$data['nama_dokter'];
		$nama_penyetor = "-";
		$norek = $pecah."-".$pecah2."-".$pecah3."-".$pecah4."-".$pecah5;
		$alamat	= "PIK";
		$nama_bank	= "CIMB NIAGA";
		$telp = "29673737";
	}else if($mandiri !="-"){
		$pecah = substr($mandiri,0,3);
		$pecah2 = substr($mandiri,3,2);
		$pecah3 = substr($mandiri,5,7);
		$pecah4 = substr($mandiri,12);
		$nama_dokter=$data['nama_dokter'];
		$nama_penyetor = "RSIA GRAND FAMILY";
		$norek = $pecah."-".$pecah2."-".$pecah3."-".$pecah4;
		$alamat	= "PIK";
		$nama_bank	= "MANDIRI";
		$telp = "29673737";
	}else if($bri !="-"){
		$pecah = substr($bri,0,3);
		$pecah2 = substr($bri,3,2);
		$pecah3 = substr($bri,5,5);
		$pecah4 = substr($bri,10,2);
		$pecah5 = substr($bri,12);
		$nama_dokter=$data['nama_dokter'];
		$nama_penyetor = "-";
		$norek = $pecah."-".$pecah2."-".$pecah3."-".$pecah4."-".$pecah5;
		$alamat	= "PIK";
		$nama_bank	= "BRI";
		$telp = "29673737";
	}else{
		$nama_penyetor = "";
		$norek = "";
		$alamat	= "";
		$telp = "";
		$nama_bank	= "";
		$nama_dokter="";
		$telp = "";
	}
}

$data = array();
$data['norek'] 					= $norek;
$data['nama_penyetor'] 			= $nama_penyetor;
$data['alamat'] 				= $alamat;
$data['telp'] 					= $telp;
$data['nama_dokter'] 			= $nama_dokter;
$data['nama_bank'] 			= $nama_bank;
$data['telp'] 			= $telp;


echo json_encode($data);
?>
