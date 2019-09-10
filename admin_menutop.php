
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
                <a class="navbar-brand brandedit sidebarhead pt-3" href="#">
                        <h3 class="mb-0 mt-1" style="font-weight: bold;">INTRANET</h3>
	</a>
	<button id="sidebarCollapse" class="btn btn-link btn-sm text-white order-1 order-sm-0 ml-5 mt-2">
                        <i class="fas fa-bars"></i>
	</button>
	<div class="dropdown" style="color:#ffffff;margin-left: auto;">
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
			<a class="dropdown-item" href="admin_index.php?url=user_add_user.php&id=<?php echo $_SESSION['user_id'];?>" style="color:#B0BEC5;">แก้ไขข้อมูลส่วนตัว</a>
			<a class="dropdown-item" href="admin_index.php?url=user_change_password.php" style="border-bottom:1px solid #ffffff;color:#B0BEC5;">เปลี่ยนรหัสผ่าน</a>
			<a class="dropdown-item" href="logout.php" style="color:#17a2b8;"><span data-feather="list"></span> ช่วยเหลือ</a>
			<a class="dropdown-item" href="logout.php" style="color:#dc3545;"><span data-feather="log-out"></span> ออกจากระบบ</a>
		</div>
	</div>
</nav>
<script>
$(document).ready(function () {
        $('#sidebar').toggleClass('hide');
        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        
    });
	});
</script>