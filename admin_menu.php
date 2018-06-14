<?php if (!empty($_SESSION['user_name'])): ?>
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
</div> <!-- end row -->
<?php endif; ?>
