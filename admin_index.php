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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <?php 
        include 'inc_js.php';
    ?>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Intranet</a>
      <p class="navbar-nav px-3">หัวข้อ</p>
<!--       <button type="button" id="popup" class="btn btn-lg btn-secondary" data-toggle="popover" title="ระบบ" data-placement="bottom" data-content="And here's some amazing content. It's very engaging. Right?"> <span data-feather="archive"></span></button> -->
    <li class="nav-item dropdown show"><a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="nav-link dropdown-toggle"><span data-feather="archive"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                             <div class="collapse" id="collapseMenu">
                                <?php if($_SESSION['systemallow_drive'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href='filemanager/dialog.php'>
                    						<img src='images/icons/data.png'>
                    					</a>
                    				</div>
                    			<?php }
                    				  if($_SESSION['systemallow_news'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href="admin_index.php?url=admin_news_index.php&user_id=<?php echo $_SESSION['user_id']; ?>">
                    						<img src='images/icons/News.png'>
                    					</a>
                    				</div>
                    			<?php }
                    				if($_SESSION['systemallow_confer'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href="admin_index.php?url=admin_cf_index.php">
                    						<img src='images/icons/conference.png'>
                    					</a>
                    				</div>
                    			<?php }
                    				if($_SESSION['systemallow_service'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href='admin_index.php?url=admin_cs_index.php'>
                    						<img src='images/icons/comservice.png'>
                    					</a>
                    				</div>
                    			<?php }
                    				if($_SESSION['systemallow_touristreport'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href='admin_index.php?url=admin_trs_index.php'>
                    							<img src='images/icons/trsreport.png'>
                    					</a>
                    				</div>
                    			<?php }
                        			if($_SESSION['systemallow_km'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href='admin_index.php?url=admin_km_index.php'>
                    						<img src='images/icons/knowledge.png'>
                    					</a>
                    				</div>
                    			<?php }
                    				if($_SESSION['systemallow_admin'] == 1){ ?>
                    				<div class='menubox'>
                    					<a href='admin_index.php?url=admin_user_index.php'>
                    						<img src='images/icons/admincs.png'>
                    					</a>
                    				</div>
                    			<?php } ?>
                             </div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/noimage.png" class="rounded-circle" width="30" height="30">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	 </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  หน้าหลัก <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="log-in"></span>
                  ระบบฝากไฟล์
                </a>
              </li>
              <li data-toggle="collapse" data-target="#confer" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="database"></span>
                  ระบบจองห้องประชุม
                </a>
              <!-- sub menu -->
              <ul class="sub-menu collapse" id="confer">
	                <a class="nav-link" href="#">
	                  ระบบจองห้องประชุม sub
	                </a>
	                <a class="nav-link" href="#">
	                  ระบบจองห้องประชุม sub
	                </a>
              </ul>
              <!-- end sub menu -->
              </li>
              <li data-toggle="collapse" data-target="#cs" class="collapsed">
                <a class="nav-link" href="#">
                    <span data-feather="mail"></span>
                 ระบบแจ้งซ่อมคอมพิวเตอร์
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse" id="cs">
	                <a class="nav-link" href="#">
	                   ระบบแจ้งซ่อมคอมพิวเตอร์ sub
	                </a>
	                <a class="nav-link" href="#">
	                   ระบบแจ้งซ่อมคอมพิวเตอร์ sub
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
              <li data-toggle="collapse" data-target="#trs" class="collapsed">
                <a class="nav-link"href="#">
                    <span data-feather="cpu"></span>
                  ระบบรายงานจำนวนผู้เข้าชม
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse" id="trs">
	                <a class="nav-link" href="#">
	                   ระบบรายงานจำนวนผู้เข้าชม sub
	                </a>
	                <a class="nav-link" href="#">
	                   ระบบรายงานจำนวนผู้เข้าชม sub
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
              <li data-toggle="collapse" data-target="#know" class="collapsed">
                <a class="nav-link" href="#">
                     <span data-feather="calendar"></span>
                  ระบบฐานความรู้
                </a>
                  <!-- sub menu -->
                <ul class="sub-menu collapse" id="know">
	                <a class="nav-link dropknow ml-4" href="#">
	                   ระบบฐานความรู้ sub
	                </a>
	                <a class="nav-link dropknow ml-4" href="#">
	                   ระบบฐานความรู้ sub
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
             <li data-toggle="collapse" data-target="#user" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart"></span>
                  ระบบผู้ใข้
                </a>
                   <!-- sub menu -->
                <ul class="sub-menu collapse" id="user">
	                <a class="nav-link dropuser ml-4" href="#">
	                   ระบบผู้ใข้ sub
	                </a>
	                <a class="nav-link dropuser ml-4" href="#">
	                   ระบบผู้ใข้ sub
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>

          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script> -->

    <!-- Icons -->
    <script>
    feather.replace()
    $(function() { $('#popup').popover()});
    </script>

  </body>
</html>

