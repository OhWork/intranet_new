<?php
    include 'database/db_tools.php';
    include 'connect.php';
    $id = $_GET['id'];
$rs = $db->findByPK33DESC('reguser','subzoo','zoo','reguser.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','reguser_id',$id,'reguser_date')->executeAssoc();

?>

		<div class="modal-body">
    			<!--เพิ่มฝ่ายเพื่อให้ทราบว่าหน่วยงานไหนแจ้งมา-->
    		<div class='col-md-12'>
	    		<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">สำนัก/สวนสัตว์</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $rs['zoo_name'];?></label></div>
				</div>
    		</div>
            <div class='col-md-12'>
	            <div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ฝ่าย</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $rs['subzoo_name'];?></label></div>
				</div>
            </div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ชื่อ</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $rs['reguser_name_th'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ตำแหน่ง</label></div>
					<div class='col-md-8'>
						<label class='text-left'>
						<?php if(empty($rs['reguser_position'])){?>
											<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
									<?php }else{
											echo $rs['reguser_position'];
										  }
									?>
						</label>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">

				</div>
			</div>
			
		</div>
	
		<div class="modal-footer">
			<div class='getdetialfooter'>
				<a href="cs_register_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><img src="images/icons/print.png" style="width:16px; height:16px;"></a>
			</div>
			<button type="button" class="close btclose" data-dismiss="modal" aria-label="Close"><span class="btn btn-danger" aria-hidden="true">&times;</span></button>
		</div>
