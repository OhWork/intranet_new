<?php
    include 'database/db_tools.php';
    include 'connect.php';
    $id = $_GET['id'];
    $rs = $db->findByPK('news','news_id',$id)->execute();
    $show = mysql_fetch_assoc($rs);
    $user_id = $show['user_user_id'];
    $user = $db->findByPK('user','user_id',$user_id)->execute();
    $usershow = mysql_fetch_assoc($user);
?>

	<div class="modal-body">             
		<div class="form-group">
			<label for="name">หัวเรื่อง
				<?php echo $show['news_head'];?>
			</label>
		</div>	
		<div class="form-group">
			<label>รายละเอียด
				<?php echo $show['news_detail'];?>
			</label>
		</div>	
		<div class="form-group">
			<label>วันที่
				<?php echo $show['news_date'];?>
			</label>
		</div>	
			<div class="form-group">
			<label>ผู้เขียน
				<?php echo $usershow['user_name']." ".$usershow['user_last'];?>
			</label>
		</div>	
    </div>
	
    </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
