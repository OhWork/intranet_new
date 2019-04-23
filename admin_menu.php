<?php if (!empty($_SESSION['user_name'])):
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 printdisplaynone" style="height: 100%;">
	<div class="row">
		<div class="list-group" style="height: 100%;">
			<nav class="d-none d-md-block bg-dark sidebar mnpb" style="height: 100%;padding-bottom:100%;">
			  <div class="sidebar-sticky">
				<ul class="nav flex-column">
				  <li class="nav-item">
					<a class="nav-link edittext mucl" href="admin_index.php">
					  <span data-feather="home"></span>หน้าหลัก <span class="sr-only">(current)</span>
					</a>
				  </li>
				  <?php if($_SESSION['systemallow_drive'] == 1){ ?>
				  <li class="nav-item">
					<a class="nav-link edittext mucl" href="admin_index.php?url=fm_dialog.php">
						<span data-feather="database"></span>
						ระบบฝากไฟล์
					</a>
				  </li>
				  <?php }
					  if($_SESSION['systemallow_news'] == 1){
						  include_once 'admin_news_menu.php';
						  }
					if($_SESSION['systemallow_confer'] == 1){
						include_once 'admin_cf_menu.php';
						 }
					if($_SESSION['systemallow_service'] == 1){
						include_once 'admin_cs_menu.php';
						}
					if($_SESSION['systemallow_touristreport'] == 1){
						include_once 'admin_trs_menu.php';
				        }
				    if($_SESSION['systemallow_hrs'] == 1){
// 						include_once 'admin_hrs_menu.php';
				        }
 				   if($_SESSION['systemallow_admin'] == 1){
						include_once 'admin_qtn_menu.php';
 				       }
 				   ?>
 				   <li class="nav-item">
					<a class="nav-link edittext mucl" href="#">
						<span data-feather="airplay"></span>
						ระบบbanner
					</a>
				  </li>
 				   <?php
					if($_SESSION['systemallow_km'] == 1){
// 						include_once 'admin_km_menu.php';
				        }
					if($_SESSION['systemallow_admin'] == 1){
						include_once 'admin_user_menu.php';
				        }
				   ?>
				</ul>
			  </div>
			</nav>
		</div>
	</div>
</div>
<?php endif; ?>
 <script>
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        // passes on every "a" tag
        $("ul a").each(function() {
	        var urlcheck = url.split('#');
            // checks if its the same on the address bar
            if (urlcheck == (this.href)) {
	            $(this).parents(0).addClass("show");
                $(this).addClass("bcmn");
				$(this).children(0).addClass('bcnm');
				$(this).parents(0).attr("aria-expanded", true);
				$('#noac').removeClass('bcmn');
            }
            else if(urlcheck != (this.href)) {
				if(this.href.match("user_add_user")){
				   	$('#user').addClass("show");
				   	$('#nav-22-animate-1').addClass("bcmn");
				   	$('#nav-22-animate-1').children().addClass('bcnm');
				   	$('#user').attr("aria-expanded", true);

				}
				else if(this.href.match("user_add_permission")){
					$('#user').addClass("show");
				   	$('#nav-22-animate-2').addClass("bcmn");
				   	$('#nav-22-animate-2').children().addClass('bcnm');
					$('#user').attr("aria-expanded", true);
				}
				else if(this.href.match("user_add_division")){
					$('#user').addClass("show");
				   	$('#nav-22-animate-3').addClass("bcmn");
				   	$('#nav-22-animate-3').children().addClass('bcnm');
					$('#user').attr("aria-expanded", true);
				}
				else if(this.href.match("user_add_zoo")){
					$('#user').addClass("show");
				   	$('#nav-22-animate-4').addClass("bcmn");
				   	$('#nav-22-animate-4').children().addClass('bcnm');
					$('#user').attr("aria-expanded", true);
				}
				else if(this.href.match("user_add_submenu")){
					$('#user').addClass("show");
				   	$('#nav-22-animate-5').addClass("bcmn");
				   	$('#nav-22-animate-5').children().addClass('bcnm');
					$('#user').attr("aria-expanded", true);
				}
				else if(this.href.match("user_add_mainmenu")){
					$('#user').addClass("show");
				   	$('#nav-22-animate-6').addClass("bcmn");
				   	$('#nav-22-animate-6').children().addClass('bcnm');
					$('#user').attr("aria-expanded", true);
				}
				else if(this.href.match("qtn_add_question")){
					$('#qtn').addClass("show");
				   	$('#nav-21-animate-1').addClass("bcmn");
				   	$('#nav-21-animate-1').children().addClass('bcnm');
					$('#qtn').attr("aria-expanded", true);
				}
            }

        });
    });
    var nav_status;
    $('.nav-link').on('click',function(e){
		var checkde = e.currentTarget;
		if (checkde.getAttribute('aria-expanded') != 'true') {
			var idmenushow = checkde.dataset.target;
			var cutidmenu = idmenushow.substring(1);
			var idmenu = document.getElementById(cutidmenu);
			$('.nav-link').attr( 'aria-expanded','false');
			if($('.sub-menu').hasClass("show")){
			 $('.sub-menu').addClass("animat-out");
				if($('.sub-menu').hasClass("animat-out")){
						setTimeout(function(){
							if(!idmenu.classList.contains('show')){
								$( ".sub-menu" ).not(idmenu).removeClass('show');
								idmenu.parentNode.classList.add("show");
						        idmenu.parentNode.classList.remove("animat-out");
						        idmenu.parentNode.parentNode.classList.remove("animat-out");
								idmenu.parentNode.parentNode.classList.add("show");
							}
				        }, 400)
				        idmenu.classList.remove("animat-out");
				        if(idmenu.getAttribute('aria-expanded') != 'true'){
							idmenu.classList.remove('animat-out');
					        idmenu.parentNode.classList.add("show");
					        idmenu.parentNode.classList.remove("animat-out");
					        idmenu.parentNode.parentNode.classList.remove("animat-out");
							idmenu.parentNode.parentNode.classList.add("show");
						}
				}
		    }
		    else{
			    idmenu.classList.remove('animat-out');
		    }
		    nav_status = 0 ;
		    $('.nav-link').removeClass("animat-test");

	        }
		});
    function navAnimate(id,sub){
		var menusum  = sub;
		var menuid = id;
		$('.nav-link-'+menuid).on('click',function(event){
			var checktarget = event.currentTarget;
			var targetmenu = checktarget.dataset.target;
			var cuttarrgetmenu = targetmenu.substring(1);
			var submenu = document.getElementById(cuttarrgetmenu);
			if(nav_status == 0){
				for(var i = 1;i <= menusum;i++){
					document.getElementById("nav-"+menuid+"-animate-"+i).style.visibility = "hidden";
				}

				var i = 1;
				function myLoop () {
					setTimeout(function () {
						if (i <= menusum) {
							if(i == menusum){
	      						nav_status = 1;
      						}
	  						document.getElementById("nav-"+menuid+"-animate-"+i).style.visibility = "visible";
	  						document.getElementById("nav-"+menuid+"-animate-"+i).classList.add("animat-test");
	  						myLoop();
	  						i++;
      					}
      				}, 300)
				}
				myLoop();
			}else if(nav_status == 1){
				for(var i = 1;i <= menusum;i++){
					document.getElementById("nav-"+menuid+"-animate-"+i).classList.remove("animat-test");
					document.getElementById("nav-"+menuid+"-animate-"+i).style.visibility = "hidden";
				}
				nav_status = 0;
			}
  		});
    }
    navAnimate(1,7);
	navAnimate(2,4);
	navAnimate(3,9);
	navAnimate(4,9);
	navAnimate(5,2);
	navAnimate(6,2);
	navAnimate(7,2);
	navAnimate(8,2);
	navAnimate(9,9);
	navAnimate(10,1);
	navAnimate(11,2);
	navAnimate(12,9);
	navAnimate(13,9);
	navAnimate(14,3);
	navAnimate(15,3);
	navAnimate(16,2);
	navAnimate(17,8);
	navAnimate(18,8);
	navAnimate(19,2);
	navAnimate(20,4);
	navAnimate(21,1);
	navAnimate(22,5);
	navAnimate(23,2);
	navAnimate(24,1);
	navAnimate(25,4);
	navAnimate(26,7);
	navAnimate(27,2);
	navAnimate(28,2);
	navAnimate(29,2);
	navAnimate(30,1);
	navAnimate(31,2);
	navAnimate(32,5);
  	</script>

