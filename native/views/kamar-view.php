<div class="box-body">
	<div class="col-md-12">
	<ul id="nav" class="nav nav-tabs nav-justified">
	<?php
  	$sql="select * from room";
		$result=$mysqli->query($sql);
		while ($data2 =$result->fetch_assoc()) {
			extract($data2);
		    	 echo '
				 		 <li role="presentation"  >
				 		 	<a href="index.php?page='. base64_encode('kamar-view').'&cat='.base64_encode($id_room).'">'.ucwords($nama_room).'</a>
				 		 </li>
					 ';


		    }
	 ?>

	</ul>

			<?php
			//  if($_GET['page']=base64_encode('kamar-view')&& ['cat'] !=""){
			// 		$d_cat = base64_decode($_GET['cat']);
			// 		$sql2 = "select * from room where id_room=$d_cat ";
			// 		$result =$mysqli->query($sql2);
			// 		$row = $result->fetch_assoc();
			// 		printf ("%s (%s)\n", $row["foto"]);
			// 		//echo "<script>alert($foto)</script>";
			// }

			//echo $foto1;
      ?>

			<div class="flipster">
        <ul class="flip-items">
            <li id="1">
                <img src="assets/images/foto/eks-1.JPG">
            </li>
            <li id="2">
                <img src="assets/images/foto/eks-2.JPG">
             </li>
            <li id="3">
                <img src="assets/images/foto/eks-3.JPG">
            </li>
            <li id="4">
                <img src="assets/images/foto/eks-4.JPG">
            </li>
            <li id="5">
                <img src="assets/images/foto/eks-5.JPG">
            </li>
<!--
            <li id="6">
                <img src="http://brokensquare.com/Code/jquery-flipster/demo/img/text6.gif">
            </li>
            <li id="7">
                <img src="http://brokensquare.com/Code/jquery-flipster/demo/img/text7.gif">
            </li>-->
        </ul>
    </div>

    <!-- untuk deskripsi room -->
      <h4 class="text-red">Fasilitas <?php echo ucwords($nama_room); ?></h4>
      <hr/>
      <ul class="fa-ul">
          <?php
          $no=1;
          $fasilitas = $fasilitas;
          $pecah = explode(",",$fasilitas);
          foreach ($pecah as $value) {
          echo'<li style="font-size:14px">'.$no.'. '.ucwords($value).' </li>';
          $no++;
          }
          ?>
      </ul>
    <!-- end deskripsi room -->

  </div>
</div>
