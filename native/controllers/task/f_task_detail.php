<?php
session_start();
include_once "../../include/koneksi.php";

$username = $_SESSION['username'];
$id_task = $_POST[id_task];
$query= $mysqli->query("SELECT * FROM task where id_task='$id_task' ");
$cek  = mysqli_num_rows($query);
$data_task = $query->fetch_array();
 ?>
  <form id="f_taskdetail" class="form-horizontal" action="" method="post">
  <div class="id_task" data-id="<?php echo $id_task; ?>">
    <div class="btn-group btn-group-sm" data-toggle="buttons" style="margin-left:25px">
        <label class="btn btn-default <?php if($data_task[st_task]=='open'){echo 'active';}  ?>">
            <input name="status" value="open" type="radio" >Open
        </label>
        <label class="btn btn-default <?php if($data_task[st_task]=='process'){echo 'active';}  ?>">
            <input name="status" value="process" type="radio">Process
        </label>
        <label class="btn btn-default <?php if($data_task[st_task]=='done'){echo 'active';}  ?>">
            <input name="status" value="done"  type="radio">Done
        </label>
        <label class="btn btn-default <?php if($data_task[st_task]=='close'){echo 'active';}  ?>">
            <input name="status" value="close"  type="radio">Close
        </label>
    </div>
  </div>
  </form>
