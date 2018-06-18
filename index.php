<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/dashboard.css" >
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/sticky-footer.css">
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-left:150px;">
					<div class="jumbotron">
						<h3>ข่าวสารภายในองค์การสวนสัตว์</h3>
						<div class="container marketing">

						<!-- Three columns of text below the carousel -->
						<div class="row">
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						</div><!-- /.row -->
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-left:350px;">
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
</html>
<?php
	$thispage = 'index.php';
	$presentpage = basename($_SERVER['PHP_SELF']);
	if($presentpage == $thispage){
		 if(!empty($_SESSION['user_name'])) {
			 session_destroy();
	}
}
