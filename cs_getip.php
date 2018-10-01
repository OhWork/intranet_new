<?php
    include 'database/db_tools.php';
    include 'connect.php';
    $id = $_GET['id'];

?>

	 <div class="modal-body getdetailall">  
			<div class='getdetail'>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>Name</label></div>
				<div class='getdetailright'><?php echo $show['ipzpo_name'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>IP-Address</label></div>
				<div class='getdetailright'><?php echo $show['ipzpo_address'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>วันและเวลา</label></div>
				<div class='getdetailright'><?php echo $show['ipzpo_date'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>รายละเอียด</label></div>
				<div class='getdetailright'><?php echo $show['ipzpo_detail'];?></div>
				</div>
			</div>		
	</div>		
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
