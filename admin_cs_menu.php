<?php if (!empty($_SESSION['user_name'])):
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
<div class="row">
	<div class="col-md-12 printdisplaynone">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="admin_index.php?url=admin_cs_index.php">ComputerService</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายการแจ้งดำเนินการ</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php">รายการแจ้งดำเนินการใหม่</a>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php">รายการระหว่างการดำเนินการ</a>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php">รายการดำเนินการเสร็จสิ้น</a>
						</div>
					</div>
					<?php if($user_zoo == 10){?>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข้อมูล</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_add_typetools.php">เพิ่มชนิดอุปกรณ์</a>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_add_problemlist.php">เพิ่มรายการปัญหา</a>
						</div>
					</div>
					<?php }?>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IP-แอดเดรส</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<?php if($user_zoo == 10){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=1">องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=11">สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=12">สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=13">สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=14">สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=15">สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=16">สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=17">สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=18">โครงการคชอาณาจักร</a>
						<?php }?>
			<!--
						<li role="separator" class="divider"></li>
						<li><a href="admin_index.php?url=admin_cs_index.php&url2=cs_add_ip.php">เพิ่มรายการ IP-address</a></li>
			-->
						</div>
					</div>
					<?php if($user_zoo == 10){?>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IP-อุปกรณ์</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_iptools.php&id=1">Server</a>
			<!--
						<li role="separator" class="divider"></li>
						<li><a href="admin_index.php?url=admin_cs_index.php&url2=cs_add_iptools.php">เพิ่มรายการ IP-อุปกรณ์</a></li>
			-->
						</div>
					</div>
					<?php }?>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สรุป IP-address</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<?php if($user_zoo == 10){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=1">องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=11">สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=12">สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=13">สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=14">สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=15">สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=16">สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=17">สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_report_ip.php&id=18">โครงการคชอาณาจักร</a>
						<?php }?>
			<!--
						<li role="separator" class="divider"></li>
						<li><a href="admin_index.php?url=admin_cs_index.php&url2=cs_add_ip.php">เพิ่มรายการ IP-address</a></li>
			-->
						</div>
					</div>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายงาน</a>
							<ul class="dropdown-menu multi-level dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu">
								<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalserviceadmin.php">รายงานการบริการ</a>
								<li class="dropdown-submenu">
								<a  class="dropdown-item" href="#">รายงานการซ่อม</a>
									<ul class="dropdown-menu">
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
								</li>
							</ul>
						</li>
					</div>
					 <!--<li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายงาน</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">รายงานการบริการ</a>
								<div class="dropdown-submenu">
									<a class="dropdown-item" tabindex="1" href="#">รายงานการซ่อม</a>
										<ul class="dropdown-menu">
											<a class="dropdown-item" tabindex="-1" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
											<a class="dropdown-item" href="#">Second level</a>
										</ul>
								</div>
						</div>
<!--
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายงานการซ่อม</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<?php if($user_zoo == 10){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=11">สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=13">สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=14">สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=15">สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=16">สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=17">สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="dropdown-item" href="#">โครงการคชอาณาจักร</a>
						<?php }?>
						</div>
-->	
				</ul>
			</div>
		</nav>
	</div>
</div>
<?php endif; ?>

