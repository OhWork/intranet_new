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
      <button type="button" id="popup" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-placement="bottom" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">ออกจากระบบ</a>
        </li>
      </ul>
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
              <li class="nav-item">
                <a class="nav-link" id="confer" href="#">
                  <span data-feather="database"></span>
                  ระบบจองห้องประชุม
                </a>
              <!-- sub menu -->
                <a class="nav-link dropcon ml-4" href="#">
                  ระบบจองห้องประชุม sub
                </a>
                <a class="nav-link dropcon ml-4" href="#">
                  ระบบจองห้องประชุม sub
                </a>
              <!-- end sub menu -->
              </li>
              <li class="nav-item">
                <a class="nav-link" id="cs" href="#">
                    <span data-feather="mail"></span>
                 ระบบแจ้งซ่อมคอมพิวเตอร์
                </a>
                <!-- sub menu -->
                <a class="nav-link dropcs ml-4" href="#">
                   ระบบแจ้งซ่อมคอมพิวเตอร์ sub
                </a>
                <a class="nav-link dropcs ml-4" href="#">
                   ระบบแจ้งซ่อมคอมพิวเตอร์ sub
                </a>
              <!-- end sub menu -->
              </li>
              <li class="nav-item">
                <a class="nav-link" id="trs" href="#">
                    <span data-feather="cpu"></span>
                  ระบบรายงานจำนวนผู้เข้าชม
                </a>
                <!-- sub menu -->
                <a class="nav-link droptrs ml-4" href="#">
                   ระบบรายงานจำนวนผู้เข้าชม sub
                </a>
                <a class="nav-link droptrs ml-4" href="#">
                   ระบบรายงานจำนวนผู้เข้าชม sub
                </a>
              <!-- end sub menu -->
              </li>
              <li class="nav-item">
                <a class="nav-link" id ="know" href="#">
                     <span data-feather="calendar"></span>
                  ระบบฐานความรู้
                </a>
                  <!-- sub menu -->
                <a class="nav-link dropknow ml-4" href="#">
                   ระบบฐานความรู้ sub
                </a>
                <a class="nav-link dropknow ml-4" href="#">
                   ระบบฐานความรู้ sub
                </a>
              <!-- end sub menu -->
              </li>
              <li class="nav-item">
                <a class="nav-link" id="user" href="#">
                  <span data-feather="bar-chart"></span>
                  ระบบผู้ใข้
                </a>
                   <!-- sub menu -->
                <a class="nav-link dropuser ml-4" href="#">
                   ระบบผู้ใข้ sub
                </a>
                <a class="nav-link dropuser ml-4" href="#">
                   ระบบผู้ใข้ sub
                </a>
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
    $('.dropcon').hide();
	$('.dropcs').hide();
	$('.droptrs').hide();
	$('.dropknow').hide();
	$('.dropuser').hide();
    var count = 0;
    var count2 = 0;
    var count3 = 0;
    var count4 = 0;
	var count5 = 0;
    $('#confer').on('click' ,function(){
	    count++;
	    $('.dropcs').hide();
		$('.droptrs').hide();
		$('.dropknow').hide();
		$('.dropuser').hide();
	    if(count % 2 != 0){
			$('.dropcon').show('slow');
		}
		else{
			$('.dropcon').hide('slow');
		}
    });
    // แจ้งซ่อม
    $('#cs').on('click' ,function(){
	    count2++;
	    $('.dropcon').hide();
		$('.droptrs').hide();
		$('.dropknow').hide();
		$('.dropuser').hide();
	    if(count2 % 2 != 0){
			$('.dropcs').show('slow');
		}
		else{
			$('.dropcs').hide('slow');
		}
    });
    // รายงานผู้เข้าชม
	$('#trs').on('click' ,function(){
	    count3++;
	    $('.dropcon').hide();
		$('.dropcs').hide();
		$('.dropknow').hide();
		$('.dropuser').hide();
	    if(count3 % 2 != 0){
			$('.droptrs').show('slow');
		}
		else{
			$('.droptrs').hide('slow');
		}
    });
    // ฐานความรู้
	$('#know').on('click' ,function(){
	    count4++;
	    $('.dropcon').hide();
		$('.dropcs').hide();
		$('.droptrs').hide();
		$('.dropuser').hide();
	    if(count4 % 2 != 0){
			$('.dropknow').show('slow');
		}
		else{
			$('.dropknow').hide('slow');
		}
    });
    //  ผู้ใช้
	$('#user').on('click' ,function(){
	    count5++;
	    $('.dropcon').hide();
		$('.dropcs').hide();
		$('.droptrs').hide();
		$('.dropknow').hide();

	    if(count5 % 2 != 0){
			$('.dropuser').show('slow');
		}
		else{
			$('.dropuser').hide('slow');
		}
    });

    </script>

  </body>
</html>

