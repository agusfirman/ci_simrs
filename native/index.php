<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>SIMRS - Responsive Admin Template</title>

	<link href="assets/css/app.css" rel="stylesheet">
	<!-- <link href="assets/css/datepicker3.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/datetimepicker.css" rel="stylesheet"> -->
	<!-- <link href="assets/editable/css/bootstrap-editable.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/custom.css" rel="stylesheet"> -->

</head>

<body>
	<div class="wrapper">
		<div class="d-flex">
			
			<nav class="sidebar">
			<?php
			include "side_menu.php";
			 ?>
		 </nav>

			<div class="main">
				<?php
				include "navbar.php";
				?>

				<main class="content">
						<?php
						include "content.php";
						 ?>
				</main>

				<footer class="footer">
					<?php
					include "footer.php";
					 ?>
				</footer>
			</div>
		</div>
	</div>
	<script src="assets/jQuery/jquery.min.js"></script>
	<script src="include/aplikasi.js"></script>
	<script src="assets/js/tables.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/app.js"></script>
	<!-- <script src="assets/js/app-1.js"></script> -->
	<script src="assets/js/forms.js"></script>
	<script src="assets/js/maps.js"></script>
	<script src="assets/js/charts.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!-- <script src="assets/js/bootstrap-datepicker.js"></script> -->
	<!--
	<script src="assets/js/bootstrap-datetimepicker.js"></script> -->
	<!-- <script src="assets/js/bootstrap-editable.min.js"></script> -->


	<!-- <script src="js/app.js"></script>

	<script src="js/charts.js"></script>
	<script src="js/forms.js"></script>
	<script src="js/maps.js"></script>
	<script src="js/tables.js"></script> -->
	<!--
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script> -->

</body>

</html>
