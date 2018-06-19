<?php if (!empty($_SESSION['user_name'])): ?>
<div class="row">
    <div class="col-md-12" style="height: 55.7px; background-color: #2196F3;">
        <ul class="navbar-nav col-md-12">
            <div class="span3 half" style="margin-top: 15px;">
                <a class="nav-link col-12" style="font-size: 1rem; line-height: 1.5; color: white;" href="#">E-Service System</a>
            </div>
			<div class="span4"></div>
            <div class="span5 entire types" style="float: right; margin-top: 15px;">
						<a class="span2" style="text-align:right; font-size: 1rem; line-height: 1.5; color: white;" href="../admin_index.php?url=admin_edit_user.php&id=<?php echo $_SESSION['user_id'];?>" ><?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];?></a>
						<a class="span2" href="../logout.php" style="padding-left:0px;padding-right:0px;  font-size: 1rem; line-height: 1.5; color: white;">ออกจากระบบ</a>
			</div>
        </ul>
    </div>
<div class="col-md-12 printdisplaynone">
    <a class="btn menutop" role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" style="width: 100%; margin-top: 10px;background-color: #009ACD;color:#fff;">
        คลิกเพื่อเลือกโปรแกรมที่ต้องการ
    </a>
    <div class="collapse" id="collapseMenu">
		<div class='col-md-12' style="padding-left:35%;padding-right:25%; margin-top: 10px;">
			<?php if($_SESSION['systemallow_drive'] == 1){ ?>
					<a href="dialog.php">
						<img src='../images/icons/data.png' width="84.03px" height="84.03px">
					</a>
			<?php }
				  if($_SESSION['systemallow_news'] == 1){ ?>
					<a href="../admin_index.php?url=admin_news_index.php&user_id=<?php echo $_SESSION['user_id']; ?>">
						<img src='../images/icons/News.png' width="84.03px" height="84.03px">
					</a>
			<?php }
				if($_SESSION['systemallow_confer'] == 1){ ?>
					<a href="../admin_index.php?url=admin_cf_index.php">
						<img src='../images/icons/conference.png' width="84.03px" height="84.03px">
					</a>
			<?php }
				if($_SESSION['systemallow_service'] == 1){ ?>
					<a href="../admin_index.php?url=admin_cs_index.php">
						<img src='../images/icons/comservice.png' width="84.03px" height="84.03px">
					</a>
			<?php }
				if($_SESSION['systemallow_touristreport'] == 1){ ?>
					<a href="../admin_index.php?url=admin_trs_index.php">
							<img src='../images/icons/trsreport.png' width="84.03px" height="84.03px">
					</a>
			<?php }
    			if($_SESSION['systemallow_km'] == 1){ ?>
					<a href="../admin_index.php?url=admin_km_index.php">
						<img src='../images/icons/knowledge.png' width="84.03px" height="84.03px">
					</a>
			<?php }
				if($_SESSION['systemallow_admin'] == 1){ ?>
					<a href="../admin_index.php?url=admin_user_index.php">
						<img src='../images/icons/admincs.png' width="84.03px" height="84.03px">
					</a>
			<?php } ?>
		</div>
    </div>
</div>
</div>
 <!-- end row -->
<?php endif; ?>
