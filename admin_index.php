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

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <?php 
        include 'inc_js.php';
    ?>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Intranet</a>
      <p class="navbar-nav px-3 text-white col">หัวข้อ</p>
<!--
            <li class="nav-item dropdown col float-right">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"><span data-feather="grid"></span></a>
                <div class="dropdown-menu be-connections">
                    <div class="list">
                        <div class="content ml-1 mr-1">
                                    <div class="row">
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/comservice.png'></a></div>
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/conference.png'></a></div>
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/trsreport.png'></a></div>
                                    </div>
                                    <div class="row mt-1">
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/knowledge.png'></a></div>
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/admincs.png'></a></div>
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/data.png'></a></div>
                                    </div>
									<div class="row mt-1">
                                      <div class="col"><a href="#" class="connection-item"><img src='images/icons/News.png'></a></div>
                                      <div class="col"></div>
                                      <div class="col"></div>
                                    </div>
                        </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                </div>
            </li>
-->

        <a class="nav-link" href="logout.php"><span data-feather="log-out"></span>ออกจากระบบ</a>

	 </nav>
    <div class="container-fluid">
      <div class="row">
        <?php include 'admin_menu.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>
        </main>
      </div>
    </div>
    <script>
    feather.replace()
    $(function() { $('#popup').popover()});
    </script>

  </body>
</html>

