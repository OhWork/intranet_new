<?php
ob_start();
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		
			<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<title>องค์การสวนสัตว์</title>
	        <?php include 'inc_js.php';
              include 'form/main_form.php';
              include 'form/gridview.php';
              include 'database/db_tools.php';
              include 'connect.php';
			?>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/dashboard.css" >
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/datetime-boostrap4.css">
        <link rel="stylesheet" href="CSS/sticky-footer.css">
<!--         <link rel="stylesheet" href="CSS/dataTables.bootstrap4.css"> -->
		<link rel="stylesheet" href="CSS/fullcalendar.min.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
<!--         <link rel="stylesheet" href="CSS/jquery.fancybox.css"> -->
		<link rel="stylesheet" href="CSS/select2.min.css">
        <link rel="stylesheet" href="CSS/fullcalendar.print.min.css" media="print">
        <link rel="stylesheet" href="CSS/animate.css">
        <link rel="stylesheet" href="CSS/main.css">
		<link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/font-awesome.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark printdisplaynone">
				<a class="navbar-brand brandedit" href="#"><h4>องค์การสวนสัตว์ ในพระบรมราชูปถัมภ์</h4></a>
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
					<div class="form-inline">
						<a class="btn lgn" style="border:none;padding-top:10px;padding-bottom:10px;padding-right:0;border-right:1px solid #1DE9B6;border-radius:0px;" href="http://www.zoothailand.org/ewt_news.php?nid=246">
						<div style="padding-right:15px;">เกี่ยวกับเรา</div></a>
					</div>
					<div class="form-inline">
						<a class="btn lgn" href="login.php" title="เข้าสู่ระบบ" style="border:none;">
							<div class="ml-1" style="float:left;">เข้าสู่ระบบ</div>
						</a>
					</div>
				</div>
			</nav>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showindex" >
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 printdisplaynone">
						<div class="row">
							<?php include 'menu_main.php'; ?>
						</div>
					</div>
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 showindex">
                                            <?php include 'content.php'; ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 printdisplaynone">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="indexft"><a href="http://www.zoothailand.org" target="_blank"><img src="images/Logo/zoo-0.png"/></a></div>
                                                            <div class="indexft"><a href="http://www.dusit.zoothailand.org" target="_blank"><img src="images/Logo/zoo-1.jpg"></a></div>
                                                            <div class="indexft"><a href="http://www.khaokheow.zoothailand.org"><img src="images/Logo/zoo-2.png"></a></div>
                                                            <div class="indexft"><a href="http://www.chiangmai.zoothailand.org" target="_blank"><img src="images/Logo/zoo-3.jpg"></a></div>
                                                            <div class="indexft"><a href="http://www.korat.zoothailand.org" target="_blank"><img src="images/Logo/zoo-4.png"></a></div>
                                                            <div class="indexft"><a href="http://www.songkhla.zoothailand.org" target="_blank"><img src="images/Logo/zoo-5.png"></a></div>
                                                            <div class="indexft"><a href="http://www.ubon.zoothailand.org" target="_blank"><img src="images/Logo/zoo-6.png"></a></div>
                                                            <div class="indexft"><a href="http://www.khonkaen.zoothailand.org" target="_blank"><img src="images/Logo/zoo-7.jpg"></a></div>
                                                            <div class="indexft"><a href="http://www.surin.zoothailand.org" target="_blank"><img src="images/Logo/zoo-8.jpg"></a></div>
                                                        </div>
                                                    </div>
					</div>
				</div>
			</div>
			
</body>

		<script type="text/javascript">
    //Modal
//Modal
$('#Modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "cs_getdetail.php",
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
    $('#Modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "cs_getregister.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct2').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
    feather.replace()
   $(function(){
     var obj_check=$(".css-require");
     $("#myform").on("submit",function(){
         obj_check.each(function(i,k){
             var status_check=0;
             if(obj_check.eq(i).find(":radio").length>0 || obj_check.eq(i).find(":checkbox").length>0){
                 status_check=(obj_check.eq(i).find(":checked").length==0)?0:1;
             }else{
                 status_check=($.trim(obj_check.eq(i).val())=="")?0:1;
             }
             formCheckStatus($(this),status_check);
         });
         if($(this).find(".has-error").length>0){
              return false;
         }
     });

     obj_check.on("change",function(){
         var status_check=0;
         if($(this).find(":radio").length>0 || $(this).find(":checkbox").length>0){
             status_check=($(this).find(":checked").length==0)?0:1;
         }else{
             status_check=($.trim($(this).val())=="")?0:1;
         }
         formCheckStatus($(this),status_check);
     });

     var formCheckStatus = function(obj,status){
         if(status==1){
             obj.parent(".form-group").removeClass("has-error").addClass("has-success");
             obj.next(".glyphicon").removeClass("glyphicon-warning-sign").addClass("glyphicon-ok");
         }else{
             obj.parent(".form-group").removeClass("has-success").addClass("has-error");
             obj.next(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-warning-sign");
         }
     }

 });
    function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";
  }
function checkAll(id)
{
	elm=document.getElementsByTagName('input');
	for(i=0; i<elm.length ;i++){
		 if(elm[i].id==id){
				elm[i].checked = true ;
		  }
	   }

}
function uncheckAll(id)
{
	elm=document.getElementsByTagName('input');
	for(i=0; i<elm.length ;i++){
		 if(elm[i].id==id){
				elm[i].checked = false ;
		  }
	   }
}
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $("ul a").each(function() {
// 	       	console.log(this.href);
            // checks if its the same on the address bar
            if (url == (this.href)) {
// 	            console.log(1234);
                $(this).parents(0).addClass("show");
                $(this).addClass("bcmn");
				$(this).children().addClass('bcnm');
				$('#noac').removeClass('bcmn');
                //for making parent of submenu active
               //$(this).closest("li").parent().parent().addClass("active");
               $(this).parents(0).attr("aria-expanded", true);
//                console.log($(this).parents());
            }
        });
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
?>
