<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
        <link rel="stylesheet" href="CSS/dashboard.css" >
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/sticky-footer.css">
        <link rel="stylesheet" href="CSS/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="CSS/fullcalendar.min.css">
        <link rel="stylesheet" href="CSS/jquery.fancybox.css">
		<link rel="stylesheet" href="CSS/select2.min.css">
		<link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/fullcalendar.print.min.css" media="print">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
        <link rel="stylesheet" href="CSS/main.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <?php include 'inc_js.php';
              include 'form/main_form.php';
              include 'form/gridview.php';
              include 'database/db_tools.php';
              include 'connect.php';
      ?>    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">องค์การสวนสัตว์</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
<!--           <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
				</ul>
				<div class="form-inline mt-2 mt-md-0">
					<a class="btn btn-outline-success my-2 my-sm-0" href="login.php">เข้าสู่ระบบ</a>
				</div>
			</div>
		</nav>
		<main role="main" class="container">
			<div class="row">
				<?php include('menu_main.php'); ?>
				<?php include('content.php'); ?>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blocklogo">
					<center>
						<div class="indexft"><a href="http://www.zoothailand.org" target="_blank"><img src="images/Logo/ZPO.png"/></a></div>
						<div class="indexft"><a href="http://www.dusitzoo.org" target="_blank"><img src="images/Logo/Dusitzoo.png"></a></div>
						<div class="indexft"><a href="http://kkopenzoo.com/newversion_index.php"><img src="images/Logo/KKOzoo.png"></a></div>
						<div class="indexft"><a href="http://www.chiangmaizoo.com" target="_blank"><img src="images/Logo/chiangmai.png"></a></div>
						<div class="indexft"><a href="http://www.koratzoo.org" target="_blank"><img src="images/Logo/Nakhonrachsimazoo.png"></a></div>
						<div class="indexft"><a href="http://www.songkhlazoo.com" target="_blank"><img src="images/Logo/Songkhlazoo.png"></a></div>
						<div class="indexft"><a href="http://www.ubon-zoo.com" target="_blank"><img src="images/Logo/Ubonzoo.png"></a></div>
						<div class="indexft"><a href="http://www.khonkaenzoo.com" target="_blank"><img src="images/Logo/KKzoo.png"></a></div>
						<div class="indexft"><a href="#" target="_blank"><img src="images/Logo/surin.png"></a></div>
					</center>
				</div>
			</div>
		</main>
        
		<!--<footer class="footer">
			<div class="container">
				<span class="text-muted">
				นโยบาย
				</span>
			</div>
		</footer>-->
    </body>

		<script type="text/javascript">
    //Modal
$('#Modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;
            $.ajax({
                type: "GET",
                url: "news_getnewsdetail.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
    feather.replace()
</script>
</html>
<?php
	$thispage = 'index.php';
	$presentpage = basename($_SERVER['PHP_SELF']);
	if($presentpage == $thispage){
		 if(!empty($_SESSION['user_name'])) {
			 session_destroy();
	}
}
