<?php
	session_start();
	ob_start();
	error_reporting(0);
	if(empty($_SESSION['user_name'])){
	  header( "Refresh: 0; login.php" );
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Intranet</title>


         <?php
            include_once 'inc_js.php';
            include_once 'database/db_tools.php';
            include_once 'connect.php';
            include_once 'form/main_form.php';
            include_once 'form/main_change.php';
            include_once 'form/gridview.php';
            include_once 'clearsession.php';
        ?>
         <!-- Bootstrap core CSS -->
         <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <!-- Custom styles for this template -->
		<link rel="stylesheet" href="CSS/datetime-boostrap4.css">
        <link rel="stylesheet" href="CSS/dashboard.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
<!--
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
-->
        <link rel="stylesheet" href="CSS/jquery.mapify.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/animate.css">
        <link rel="stylesheet" href="CSS/sb-admin.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
        </head>

<body onload="setDefault()">
        <?php include 'admin_menutop.php';?>
	<div id="wrapper">
                        <?php include 'admin_menu.php'; ?>
                        <div id="content-wrapper">
                        <div class="container-fluid mb-3">
		<?php include 'admin_content.php';?>
                        </div>
                        </div>
                </div>
    <script>
    feather.replace()
    $(function() { $('#popup').popover()});
    <?php include 'jquery/system/cs.js';?>
    </script>
</body>
</html>
