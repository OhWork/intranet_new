<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="height: 100%;">
<div class="row">
<div class="list-group" style="height: 100%;">
	<nav class="d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link" href="index.php"><span data-feather="home"></span>หน้าหลัก <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://172.16.0.1:4100/logon.shtml?redirect=http://192.168.0.1/"><span data-feather="chrome"></span>เข้าระบบอินเตอร์เน็ต</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://mail.zoothailand.org"><span data-feather="mail"></span>อีเมล์</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?url=fm_dialog.php">
                    <span data-feather="database"></span>
					ระบบฝากไฟล์
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="confer" href="index.php?url=cf_listcfr.php"><span data-feather="calendar"></span>ระบบจองห้องประชุม</a>
				</li>
				<li class="nav-item">
					<a class="nav-link collapsed nav-link-1" href="#cs" data-toggle="collapse" data-target="#cs"><span data-feather="cpu"></span>ระบบแจ้งซ่อมคอมพิวเตอร์</a>
					<ul class="sub-menu collapse on-sub mmpd" id="cs">
	                <!-- sub menu -->
						<a class="nav-link" id="nav-1-animate-1" href="index.php?url=cs_add_problem.php">แบบฟอร์มแจ้งซ่อม</a>
						<a class="nav-link" id="nav-1-animate-2" href="index.php?url=cs_register.php">แบบฟอร์มขอใช้ Internet</a>
						<a class="nav-link" id="nav-1-animate-3" href="index.php?url=cs_add_upweb.php">แบบฟอร์มขอให้อัพไฟล์ (กรณีไม่สามารถทำไดั)</a>
						<a class="nav-link" id="nav-1-animate-4" href="index.php?url=cs_show_problem.php&subpage=1">รายการแจ้งซ่อม</a>
					</ul>
				</li>
				<li class="nav-item">
				<a class="nav-link collapsed nav-link-2" href="#trs" data-toggle="collapse" data-target="#trs"><span data-feather="bar-chart"></span>ระบบรายงานจำนวนผู้เข้าชม</a>
                <!-- sub menu -->
	                <ul class="sub-menu collapse mmpd" id="trs">
						<a class="nav-link" id="nav-2-animate-1" href="index.php?url=trs_showallzoo.php">รายงานจำนวนผู้เข้าชมของสวนสัตว์</a>
						<a class="nav-link" id="nav-2-animate-2" href="index.php?url=trs_showallzoo_old.php">รายงานจำนวนผู้เข้าชมของสวนสัตว์แบบเก่า</a>
						<a class="nav-link" id="nav-2-animate-3" href="index.php?url=trs_showallvehicle.php">รายงานจำนวนยานพาหนะ</a>
	                </ul>
				</li>
				<li class="nav-item">
				<a class="nav-link collapsed nav-link-3" href="#hrs" data-toggle="collapse" data-target="#hrs"><span data-feather="file"></span>ระบบขอหนังสือรับรอง</a>
                <!-- sub menu -->
	                <ul class="sub-menu collapse mmpd" id="hrs">
						<a class="nav-link" id="nav-3-animate-1" href="index.php?url=hrs_add_certificate.php">ขอทำหนังสือรับรอง</a>
						<a class="nav-link" id="nav-3-animate-2" href="index.php?url=hrs_show_certificate.php">รายการหนังสือรับรอง</a>
	                </ul>
				</li>
				<!-- end sub menu -->
				<li class="nav-item">
				<a class="nav-link collapsed" href="index.php?url=qtn_show_qtnmain.php"><span data-feather="check-square"></span>แบบสอบถาม</a>
				</li>
            </ul>
        </div>
    </nav>
</div>
</div>
</div>
<script>
	function navAnimate(id,sub){
	    var nav_status = 0;
		var menusum  = sub;
		var menuid = id;

		$('.nav-link-'+menuid).on('click',function(event){
			var targetmenu = event.target.dataset.target;
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
		  						console.log('.nav-link-'+menuid+' : เปิดแล้ว');
      						}
	  						document.getElementById("nav-"+menuid+"-animate-"+i).style.visibility = "visible";
	  						document.getElementById("nav-"+menuid+"-animate-"+i).classList.add("animat-test");
	  						myLoop();
	  						i++;
      					}
      				}, 200)
				}
				myLoop();
			}else if(nav_status == 1){
				for(var i = 1;i <= menusum;i++){
					document.getElementById("nav-"+menuid+"-animate-"+i).style.visibility = "hidden";
					document.getElementById("nav-"+menuid+"-animate-"+i).classList.remove("animat-test");
				}

				nav_status = 0;
				console.log('.nav-link-'+menuid+' : ปิดแล้ว');
			}
  		});
    }
    navAnimate(1,4);
	navAnimate(2,3);
	navAnimate(3,2);

</script>
