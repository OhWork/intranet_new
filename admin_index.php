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
        <link rel="stylesheet" href="CSS/dashboard.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
        <link rel="stylesheet" href="CSS/jquery.mapify.css">
        <link rel="stylesheet" href="CSS/jquery.datetimepicker.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
        </head>

<body>
    <?php include 'admin_menutop.php';?>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="row">
        <?php include 'admin_menu.php'; ?>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
			<div class="row">
			<?php include 'admin_content.php';?>
			</div>
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
   <script>
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

/*
        console.log(url);
        console.log('----------------------');
*/


        // passes on every "a" tag
        $("a").each(function() {
// 	       	console.log(this.href);
            // checks if its the same on the address bar
            if (url == (this.href)) {
	            console.log(1234);
                $(this).parents(0).addClass("show");
                $(this).addClass("active");
                //for making parent of submenu active
               //$(this).closest("li").parent().parent().addClass("active");
               $(this).parents(0).attr("aria-expanded", true);
               console.log($(this).parents());
            }
        });
    });
</script>
