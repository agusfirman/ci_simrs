<?php
session_start();
include_once "../../include/koneksi.php";

$username = $_SESSION['username'];
$id_task = $_POST['id_task'];
$query= $mysqli->query("SELECT solv FROM task where id_task='$id_task' ");
$cek  = mysqli_num_rows($query);
$data_solv = $query->fetch_array();
extract($data_solv);
 ?>

<div class="container">
    <div class="row">
    <form id="f_solv" class="form-horizontal" action="" method="post">
    <input type="hidden" name="id_task" value="<?php echo $id_task; ?>">
        <div class="form-group">
            <div class="col-sm-3">
                <textarea name="solv" class="form-control"  rows="5" values=-"<?php echo $solv; ?>">test</textarea>
            </div>
        </div>
    </form>
    </div>
</div>
