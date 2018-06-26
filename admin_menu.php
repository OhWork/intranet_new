<?php if (!empty($_SESSION['user_name'])): 
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
<!--
<div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-dark info">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav col-md-12">
            <li class="nav-item active col-3">
                <a class="nav-link col-12" href="#">E-Service System</a>
            </li>
			<div class="col-4"></div>
            <li class="nav-item addmenu col-5">
				<div class="col-12">
					<div class="row">
						<a class="col-10" style="text-align:right;" href="admin_index.php?url=admin_edit_user.php&id=<?php echo $_SESSION['user_id'];?>"><?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];?></a>
						<a class="col-2" href="logout.php" style="padding-left:0px;padding-right:0px;">ออกจากระบบ</a>
					</div>
				</div>
			</li>
        </ul>
    </div>
    </nav>
    </div>
<div class="col-md-12 printdisplaynone">
    <a class="btn menutop" role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" style="width: 100%; margin-top: 10px;background-color: #009ACD;color:#fff;">
        คลิกเพื่อเลือกโปรแกรมที่ต้องการ
    </a>
    <div class="collapse" id="collapseMenu">
		<div class='col-md-12' style="padding-left:25%;padding-right:25%;">
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
-->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  หน้าหลัก <span class="sr-only">(current)</span>
                </a>
              </li>
              <?php if($_SESSION['systemallow_drive'] == 1){ ?>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="log-in"></span>
                  ระบบฝากไฟล์
                </a>
              </li>
              <?php }
				  if($_SESSION['systemallow_news'] == 1){ ?>
            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="database"></span>
                  ระบบข่าว
                </a>
              <!-- sub menu -->
              <ul class="sub-menu collapse" id="new">
	                <a class="nav-link" href="#">
	                  ระบบข่าว sub
	                </a>
	                <a class="nav-link" href="#">
	                  ระบบข่าว sub
	                </a>
              </ul>
              <!-- end sub menu -->
              </li>
              <?php } ?>
              <li data-toggle="collapse" data-target="#confer" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="database"></span>
                  ระบบจองห้องประชุม
                </a>
              <!-- sub menu -->
              <ul class="sub-menu collapse" id="confer">
	                <a class="nav-link" href="#">
	                  จัดการห้องประชุม
	                </a>
	                <a class="nav-link" href="#">
	                  จัดการห้องประชุมทางไกล
	                </a>
              </ul>
              <!-- end sub menu -->
              </li>
              <li data-toggle="collapse" data-target="#cs" class="collapsed">
                <a class="nav-link" href="#">
                    <span data-feather="cpu"></span>
                 ระบบแจ้งซ่อมคอมพิวเตอร์
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse" id="cs">
	                <div class="nav-item">
		                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   รายการแจ้งดำเนินการใหม่
		                </a>
		                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_fixproblem.php"><span data-feather="chevron-right"></span>รายการแจ้งดำเนินการใหม่</a>
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_waitfixproblem.php"><span data-feather="chevron-right"></span>รายงานระหว่างการดำเนินการ</a>
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_completefixproblem.php"><span data-feather="chevron-right"></span>รานงานการดำเนินการเสร็จ</a>
				        </div>
	                </div>
	                <div class="nav-item">
		                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   IP-Address
		                </a>
		                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <?php
    				          if($user_zoo == 10){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=1">องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=11">สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=12">สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=13">สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=14">สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=15">สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=16">สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=17">สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="dropdown-item" href="admin_index.php?url=cs_show_ip.php&id=18">โครงการคชอาณาจักร</a>
						<?php }?>
				        </div>
	                </div>
	                <div class="nav-item">
		                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   IP-อุปกรณ์
		                </a>
		                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_iptools.php&id=1">Server</a>
				        </div>
	                </div>
			        <div class="nav-item">
		               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   รายงาน
		                </a>
		                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>รายงานการซ่อมบริการ</a>
				          <a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>รายงานการบริการ</a>
				          <a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>สรุป IP</a>
				        </div>
			        </div>
			        <div class="nav-item">
		                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   ตั้งค่า
		                </a>
<!--
		                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#">เพิ่มชนิดอุปกรณ์</a>
				          <a class="dropdown-item" href="#">เพิ่มรายการปัญหา</a>
				        </div>
-->
			        </div>
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
                  <span data-feather="user"></span>
                  ระบบผู้ใข้
                </a>
                   <!-- sub menu -->
                <ul class="sub-menu collapse" id="user">
	                <a class="nav-link dropuser" href="#">
	                   <span data-feather="chevron-right"></span>รายการผู้ใช้
	                </a>
	                <a class="nav-link dropuser" href="#">
	                   <span data-feather="chevron-right"></span>รายการฝ่าย
	                </a>
	                <a class="nav-link dropuser" href="#">
	                   <span data-feather="chevron-right"></span>Log-การใช้งาน
	                </a>
	                <a class="nav-link dropuser" href="#">
	                   <span data-feather="settings"></span>ตั้งค่า
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
            </ul>

<!--
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
-->
          </div>
        </nav>
<?php endif; ?>
