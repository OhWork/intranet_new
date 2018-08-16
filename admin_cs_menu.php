<a class="nav-link collapsed" href="#cs" data-toggle="collapse" data-target="#cs">
                    <span data-feather="cpu"></span>
                        ระบบแจ้งซ่อมคอมพิวเตอร์
                    </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse on-sub" id="cs">
		                <a class="nav-link collapsed" href="#cscase" data-toggle="collapse" data-target="#cscase">
							 รายการดำเนินการ<span data-feather="chevron-right"></span>
		                </a>
		                <ul class="sub-menu collapse bnmenusub1" id="cscase">
				          <a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_fixproblem.php"><span data-feather="chevron-right"></span>รายการแจ้งดำเนินการใหม่</a>
				          <a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_waitfixproblem.php"><span data-feather="chevron-right"></span>รายงานระหว่างการดำเนินการ</a>
				          <a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_completefixproblem.php"><span data-feather="chevron-right"></span>รานงานการดำเนินการเสร็จ</a>
		                </ul>
		                <a class="nav-link collapsed py-1" href="#csip" data-toggle="collapse" data-target="#csip">IP-Address</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csip">
				        <?php
    				          if($user_zoo == 10){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=1"><span data-feather="chevron-right"></span>องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="nav-link bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=18"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
						<?php }?>
				        </ul>
		                <a class="nav-link collapsed py-1" href="#csipacc" data-toggle="collapse" data-target="#csipacc">IP-อุปกรณ์</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csipacc">
				        <a class="nav-link bnmenusub2" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_iptools.php&id=1"><span data-feather="chevron-right"></span>Server</a>
				        </ul>
		               <a class="nav-link collapsed py-1" href="#csreport" data-toggle="collapse" data-target="#csreport">รายงาน</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csreport">
				         <a class="nav-link collapsed py-1 bnmenusub2" href="#csreportcom" data-toggle="collapse" data-target="#csreportcom"><span data-feather="chevron-right"></span>รายงานการซ่อม</a>
				         <ul class="sub-menu collapse bnmenusub1" id="csreportcom">
										<?php if($user_zoo == 10){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 11){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=11">สวนสัตว์ดุสิต</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 12){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 13){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=13">สวนสัตว์เชียงใหม่</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 14){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=14">สวนสัตว์นครราชสีมา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 15){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?urlcs_totalservicemonthzoo.php&zoo=15">สวนสัตว์สงขลา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 16){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?urlcs_totalservicemonthzoo.php&zoo=16">สวนสัตว์อุบลราชธานี</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 17){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=17">สวนสัตว์ขอนแก่น</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 18){?>
												<li class="dropdown-item"><a class="dropdown-item" href="#">โครงการคชอาณาจักร</a></li>
										<?php }?>
									</ul>
				         <a class="nav-link collapsed py-1 bnmenusub2" href="admin_index.php?url=cs_totalserviceadmin.php"><span data-feather="chevron-right"></span>รายงานการบริการ</a>
				         <a class="nav-link collapsed py-1 bnmenusub2" href="#csreportip" data-toggle="collapse" data-target="#csreportip"><span data-feather="chevron-right"></span>รายงานสรุปไอพีที่ใช้</a>
				         <ul class="sub-menu collapse" id="csreportip">
				                        <?php if($user_zoo == 10){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 11){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 12){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 13){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 14){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 15){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 16){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 17){?>
												<li class="nav-link"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 18){?>
												<li class="nav-link"><a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a></li>
										<?php }?>
				         </ul>
				        </ul>
				        <a class="nav-link collapsed py-1" href="admin_index.php?url=cs_showupweb.php"><span data-feather="settings"></span>รายการขอคำร้องขึ้นเว็บไซต์</a>
		               <a class="nav-link collapsed py-1" href="#cssetting" data-toggle="collapse" data-target="#cssetting"><span data-feather="settings"></span>ตั้งค่า</a>
		               <ul class="sub-menu collapse" id="cssetting">
				          <a class="nav-link" href="#"><span data-feather="chevron-right"></span>จัดการชนิดอุปกรณ์</a>
				          <a class="nav-link" href="#"><span data-feather="chevron-right"></span>จัดการรายการปัญหา</a>
		               </ul>
                </ul>
              <!-- end sub menu -->
