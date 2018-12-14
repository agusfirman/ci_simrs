<!-- <script type="text/javascript">
	alert('test');
</script> -->
<?php
include("../../include/koneksi.php");
if(isset($_POST)){
	$sql = "UPDATE task set ".$_POST['name']."='".$_POST['value']."' WHERE id_task=".$_POST['pk'];
	$mysqli->query($sql);
	echo 'Update Data Berhasil.';
}
//
// $query = '';
//
// if($_POST['name']=='solv'){
//     $id = $_POST['pk'];
//     $solv = $_POST['value'];
//     $result = $mysqli->query("SELECT * FROM task WHERE id_task=$id");
//
// 	if ($result->num_rows < 0) {
//        $query = "UPDATE task SET solv='".$solv."' WHERE id_task=$id";
//     }
//
//
//
// }
//
//
// if ( !empty($query) && query($mysqli, $query)) {
// 	$status = [
// 		 "success" => true,
// 		"message" => "Record updated successfully"
// 	];
// } else {
//
// 	$status = [
// 		 "success" => false,
// 		"message" => "Error updating record: " . mysqli_error($con)
// 	];
//
// }
// 	$status = [
// 		"message" => "Error updating record: "
// 	];
// echo json_encode($status);
// console.log($status);
// exit;
//


?>
