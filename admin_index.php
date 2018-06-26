<?php
	session_start();
	ob_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
            include_once 'form/gridview.php';
            include_once 'clearsession.php';
        ?>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/dashboard.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
        <link rel="stylesheet" href="CSS/jquery.mapify.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Intranet</a>
      <p class="navbar-nav px-3 text-white col">หัวข้อ</p>

        <a class="nav-link" href="logout.php"><span data-feather="log-out"></span>ออกจากระบบ</a>

	 </nav>
    <div class="container-fluid">
      <div class="row">
        <?php include 'admin_menu.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <?php include 'admin_content.php';?> 
                
            </div>
        </main>
      </div>
    </div>
    <script>
    feather.replace()
    $(function() { $('#popup').popover()});
    <?php include 'jquery/system/cs.js';?>
    </script>

  </body>
</html>

