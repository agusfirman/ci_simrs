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
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<!-- <link href="assets/css/datetimepicker.css" rel="stylesheet"> -->
	<!-- <link href="assets/editable/css/bootstrap-editable.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/custom.css" rel="stylesheet"> -->

</head>

<body>
	<div class="wrapper">
		<div class="d-flex">			
			<nav class="sidebar">
                <?php include "side_menu.php";?>
            </nav>

			<div class="main">
            <?php
            include "navbar.php";
            ?>
				<main class="content">