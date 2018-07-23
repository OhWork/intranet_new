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
            include_once '../database/db_tools.php';
            include_once '../connect.php';
            include_once '../form/main_form.php';
            include_once '../form/gridview.php';
            include_once '../clearsession.php';
        ?>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../CSS/bootstrap.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../CSS/dashboard.css">
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/print.css" media="print">
        <link rel="stylesheet" href="../CSS/font-awesome.css">
		<script src="../jquery/feather-icon/feather.min.js"></script>
        </head>

  <body>
    <?php include 'admin_menutop.php';?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'admin_menu.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<!--             <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> -->
               <?php include '../admin_content.php';?>

<!--             </div> -->
        </main>
      </div>
    </div>
    <script>
    feather.replace();
    </script>

  </body>
</html>
<script>
	 $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".nav-link").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
	            console.log(1234);
                $(this).addClass("active");
                //for making parent of submenu active
               //$(this).closest("li").parent().parent().addClass("active");
//                $(this).attr("aria-expanded", true);
            }
        });
    });
</script>

