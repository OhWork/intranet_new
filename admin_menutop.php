<nav class="navbar navbar-expand-md navbar-dark bg-dark col-md-12">
    <a class="navbar-brand brandedit" href="#" style="margin-right:80.5%;">
		<h4>Intranet</h4>
	</a>
	<div class="dropdown" style="color:#ffffff;">
		<div style="height:34px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="rounded-circle" style="height:31px;padding-left:8px;padding-right:8px;padding-top:3px;float:left;background-color:#455A64;margin-right:3px;">
				<span data-feather="users"></span>
			</div>
			<div style="float:left;margin-top:4px;">
				<?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];?>
			</div>
			<div style="float:left;margin-top:4px;">
				<span data-feather="chevron-down"></span>
			</div>
		</div>
		<div class="dropdown-menu" aria-labelledby="dropownMenuButton" style="left:2px;background-color:#455A64;">
			<a class="dropdown-item" href="#" style="color:#B0BEC5;">ประวัติ</a>
			<a class="dropdown-item" href="#" style="color:#B0BEC5;">เปลี่ยนรหัสผ่าน</a>
			<a class="dropdown-item" href="#" style="border-bottom:1px solid #ffffff;color:#B0BEC5;">แก้ไขบัญชีส่วนตัว</a>
			<a class="dropdown-item" href="logout.php" style="color:#17a2b8;"><span data-feather="list"></span> ช่วยเหลือ</a>
			<a class="dropdown-item" href="logout.php" style="color:#dc3545;"><span data-feather="log-out"></span> ออกจากระบบ</a>
		</div>
	</div>
</nav>