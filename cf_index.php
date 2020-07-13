<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!doctype HTML>
<html>
	<head>
		<title>ระบบจองห้องประชุมออนไลน์</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="CSS/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="CSS/fullcalendar.min.css">
        <link rel="stylesheet" href="CSS/jquery.fancybox.css">
	<link rel="stylesheet" href="CSS/select2.min.css">
	<link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/fullcalendar.print.min.css" media="print">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
		<?php include_once 'inc_js.php';
    		  include_once 'database/db_tools.php';
              include_once 'connect.php';
              include_once 'form/main_form.php';
              include_once 'form/gridview.php';
             ?>
	</head>
	<script type="text/javascript">
 $("#myCarousel").carousel({
     interval: 2000
 });

</script>
<body>
	<div class="warpper">
        <div class="container">
			<div class='row'>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php include_once 'cf_menu.php';?>
				</div> <!--END-MENU-->
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php include_once 'cf_content.php';?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
