<?php if (!empty($_SESSION['user_name'])):
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
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
                <a class="nav-link" href="filemanager/dialog.php">
                    <span data-feather="database"></span>
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
             <?php }
				if($_SESSION['systemallow_confer'] == 1){ ?>
              <li data-toggle="collapse" data-target="#confer" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="calendar"></span>
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
              <?php }
				if($_SESSION['systemallow_service'] == 1){ ?>
              </li>
					<a class="nav-link collapsed" href="#cs" data-toggle="collapse" data-target="#cs">
                    <span data-feather="cpu"></span>
                 ระบบแจ้งซ่อมคอมพิวเตอร์
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse on-sub" id="cs">
		                <a class="nav-link collapsed" href="#cscase" data-toggle="collapse" data-target="#cscase">
							ระบบแจ้งซ่อมคอมพิวเตอร์<span data-feather="chevron-right"></span>
		                </a>
		                <ul class="sub-menu collapse" id="cscase">
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_fixproblem.php"><span data-feather="chevron-right"></span>รายการแจ้งดำเนินการใหม่</a>
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_waitfixproblem.php"><span data-feather="chevron-right"></span>รายงานระหว่างการดำเนินการ</a>
				          <a class="dropdown-item" href="admin_index.php?url=cs_show_completefixproblem.php"><span data-feather="chevron-right"></span>รานงานการดำเนินการเสร็จ</a>
		                </ul>
		                <a class="nav-link collapsed py-1" href="#csip" data-toggle="collapse" data-target="#csip">IP-Address</a>
		                 <ul class="sub-menu collapse" id="csip">
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
				        </ul>
		                <a class="nav-link collapsed py-1" href="#csipacc" data-toggle="collapse" data-target="#csipacc">IP-อุปกรณ์</a>
		                <ul class="sub-menu collapse" id="csipacc">
				        <a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_iptools.php&id=1">Server</a>
				        </ul>
		               <a class="nav-link collapsed py-1" href="#csreport" data-toggle="collapse" data-target="#csreport">รายงาน</a>
		                <ul class="sub-menu collapse" id="csreport">
				         <a class="nav-link collapsed py-1" href="#"><span data-feather="chevron-right"></span>รายงานการซ่อมบริการ</a>
				         <a class="nav-link collapsed py-1" href="admin_index.php?url=cs_totalserviceadmin.php"><span data-feather="chevron-right"></span>รายงานการบริการ</a>
				         <a class="nav-link collapsed py-1" href="#csreportip" data-toggle="collapse" data-target="#csreportip"><span data-feather="chevron-right"></span>รายงานสรุปไอพีที่ใช้</a>
				         <ul class="sub-menu collapse" id="csreportip">
				                        <?php if($user_zoo == 10){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 11){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=11">สวนสัตว์ดุสิต</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 12){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 13){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=13">สวนสัตว์เชียงใหม่</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 14){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=14">สวนสัตว์นครราชสีมา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 15){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=15">สวนสัตว์สงขลา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 16){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=16">สวนสัตว์อุบลราชธานี</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 17){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=17">สวนสัตว์ขอนแก่น</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 18){?>
												<li class="dropdown-item"><a class="dropdown-item" href="#">โครงการคชอาณาจักร</a></li>
										<?php }?>
				         </ul>
				        </ul>
		               <a class="nav-link collapsed py-1" href="#cssetting" data-toggle="collapse" data-target="#cssetting">ตั้งค่า</a>
		               <ul class="sub-menu collapse" id="cssetting">
				          <a class="dropdown-item" href="#">จัดการชนิดอุปกรณ์</a>
				          <a class="dropdown-item" href="#">จัดการรายการปัญหา</a>
		               </ul>
                </ul>
              <!-- end sub menu -->
              <?php }
				if($_SESSION['systemallow_touristreport'] == 1){ ?>
<!--               </li> -->
              <a class="nav-link collapsed" href="#trs" data-toggle="collapse" data-target="#trs">
                    <span data-feather="bar-chart"></span>
                  ระบบรายงานจำนวนผู้เข้าชม
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse" id="trs">
	               <div class="nav-item">
	                <a class="nav-link collapsed py-1" href="#trsreport" data-toggle="collapse" data-target="#trsreport">
	                   รายงานจำนวนผู้เข้าชมสวนสัตว์
	                </a>
	                <ul class="sub-menu collapse" id="trsreport">
	                   <?php
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=11">สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=13">สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=14">สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=15">สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=16">สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=17">สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo.php&zoo=?">โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
	               </div>
	                <a class="nav-link collapsed py-1" href="#trsreportold" data-toggle="collapse" data-target="#trsreportold">
	                   รายงานจำนวนผู้เข้าชมสวนสัตว์เก่า(ตุลาคม 2559 - กันยายน 2560)
	                </a>
	                <ul class="sub-menu collapse" id="trsreportold">
	                    <?php
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=11">สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=13">สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=14">สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=15">สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=16">สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=17">สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="admin_index.php?url=admin_trs_index.php&url2=trs_showtotalzoo_old.php&zoo=?">โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
                </ul>
              <!-- end sub menu -->
              </li>
              <?php }
    			if($_SESSION['systemallow_km'] == 1){ ?>
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
              <?php }
				if($_SESSION['systemallow_admin'] == 1){ ?>
                <a class="nav-link collapsed py-1" href="#user" data-toggle="collapse" data-target="#user">
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
	                <a class="nav-link collapsed py-1" href="#usersetting" data-toggle="collapse" data-target="#usersetting"><span data-feather="settings"></span>ตั้งค่า</a>
		               <ul class="sub-menu collapse" id="usersetting">
			              <a class="dropdown-item" href="#">จัดการผู้ใช้</a>
				          <a class="dropdown-item" href="#">จัดการฝ่าย</a>
				          <a class="dropdown-item" href="#">จัดการสวนสัตว์</a>
		               </ul>
                </ul>
              <!-- end sub menu -->
              </li>
              <?php } ?>
            </ul>
          </div>
        </nav>
<?php endif; ?>
