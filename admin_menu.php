<?php if (!empty($_SESSION['user_name'])):
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
<nav class="bg-dark printdisplaynone" id="sidebar" style="min-height: calc(100vh - 56px);">
        <ul class="nav flex-column">
	<li class="nav-item active">
                        <a class="nav-link edittext mucl" href="admin_index.php">
                            <i class="fas fa-home mr-3"></i><span>หน้าหลัก</span> <span class="sr-only">(current)</span>
                        </a>
	</li>
<?php if($_SESSION['systemallow_drive'] == 1){ ?>
	<li class="nav-item">
                        <a class="nav-link edittext mucl" href="admin_index.php?url=fm_dialog.php">
		<i class="fas fa-database mr-3"></i><span>ระบบฝากไฟล์</span>
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
	if($_SESSION['systemallow_ar'] == 1){
		include_once 'admin_ar_menu.php';
}
	if($_SESSION['systemallow_hrs'] == 1){
//                      include_once 'admin_hrs_menu.php';
	}
 	if($_SESSION['systemallow_qtn'] == 1){
                        include_once 'admin_qtn_menu.php';
 	}
                if($_SESSION['user_id'] == 1){
                        include_once 'admin_bn_menu.php';
	 }
	if($_SESSION['systemallow_vdo'] == 1){
                      include_once 'admin_vdo_menu.php';
	 }
        if($_SESSION['systemallow_zlfot'] == 1){
                      include_once 'admin_zlfot_menu.php';
	 }
         if($_SESSION['systemallow_ts'] == 1){
                      include_once 'admin_ts_menu.php';
	 }
	if($_SESSION['systemallow_admin'] == 1){
                        include_once 'admin_user_menu.php';
	 }
?>
        </ul>
</nav>
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
		    else{
			    idmenu.classList.remove('animat-out');
		    }
		    nav_status = 0 ;
		    $('.nav-link').removeClass("animat-test");

	        }
		});
  	</script>

