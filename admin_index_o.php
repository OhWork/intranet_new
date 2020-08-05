<?php
	session_start();
	ob_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
     <?php
            include_once 'inc_js.php';
            include_once 'database/db_tools.php';
            include_once 'connect.php';
            include_once 'form/main_form.php';
            include_once 'form/gridview.php';
            include_once 'clearsession.php';
        ?>
        <link rel="stylesheet" href="CSS/bootstrap.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
        <link rel="stylesheet" href="CSS/jquery.mapify.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
        <title>Intranet</title>
    </head>
    <body onLoad="setDefault()">
           <div class="wrapper">
           		<div class="container">
					<div class="row">
						<div class='col-md-12'>
							<?php
								include_once 'admin_content.php';?>
						</div>
					</div>
				</div>
			</div>
    </body>

</html>
<script>
$(function() {
    $( "#accordion" ).accordion();
  });
</script>
