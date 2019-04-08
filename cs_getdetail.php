<?php
    include 'database/db_tools.php';
    include 'connect.php';
    $id = $_GET['id'];
    $fix = $db->findByPK55('problem','typetools','subtypetools','subzoo','zoo',
        'problem.subtypetools_typetools_typetools_id','typetools.typetools_id',
        'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
        'problem.subzoo_subzoo_id','subzoo.subzoo_id',
        'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
        'problem_id',$id)->executeAssoc();
    $rs = $db->findByPK55('problem','typetools','subtypetools','subzoo','user',
        'problem.subtypetools_typetools_typetools_id','typetools.typetools_id',
        'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
        'problem.subzoo_subzoo_id','subzoo.subzoo_id',
        'problem.problem_adminfix','user.user_id',
        'problem_id',$id)->executeAssoc();

?>

		<div class="modal-body">
    			<!--เพิ่มฝ่ายเพื่อให้ทราบว่าหน่วยงานไหนแจ้งมา-->
    		<div class='col-md-12'>
	    		<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">สำนัก/สวนสัตว์</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['zoo_name'];?></label></div>
				</div>
    		</div>
            <div class='col-md-12'>
	            <div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ฝ่าย</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['subzoo_name'];?></label></div>
				</div>
            </div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ชื่อ</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['problem_name'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ตำแหน่ง</label></div>
					<div class='col-md-8'>
						<label class='text-left'>
						<?php if(empty($fix['problem_position'])){?>
											<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
									<?php }else{
											echo $fix['problem_position'];
										  }
									?>
						</label>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">IP-Address</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
							<?php if(empty($fix['problem_ip'])){?>
											<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
									<?php }else{
											echo $fix['problem_ip'];
										  }
									?>
						</label>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">วันและเวลา</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['problem_date'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ชนิด</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['typetools_name'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ปัญหา</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $fix['subtypetools_name'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">รายละเอียด</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
							<?php if(empty($fix['problem_detail'])){?>
											<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
									<?php }else{
											echo $fix['problem_detail'];
										  }
									?>
					</label>
					</div>
				</div>
			</div>
		</div>
   <?php if($fix['problem_status'] == 'S'){ ?>
		<div class="modal-header" style="padding-top:0;">
			<h4 class="modal-title" id="exampleModalLabel">อยู่ระหว่างการดำเนินการ</h4>
		</div>
		<div class="modal-body">
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">วันที่รับเรื่อง</label></div>
						<div class='col-md-8'><label class='text-left'><?php echo $rs['problem_dateorder'];?></label></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">เนื่องจาก</label></div>
						<div class='col-md-8'>
						<label class='text-left'>
                        <?php if(empty($rs['problem_detailwaitcomplete'])){?>
    						        <p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
    						<?php }else{
        						    echo $rs['problem_detailwaitcomplete'];
        						  }
    						?>
						</label>
						</div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ผู้ดำเนินการ</label></div>
						<div class='col-md-8'><label class='text-left'><?php echo $rs['user_name']." ".$rs['user_last'];?></label></div>
					</div>
				</div>
		</div>
   <?php	}?>

   <?php if(!empty($fix['problem_status'] == 'Y')){   ?>
		<div class="modal-header" style="padding-top:0;">
            <h4 class="modal-title" id="exampleModalLabel">ดำเนินการเสร็จสิ้น</h4>
		</div>
		<div class="modal-body">
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">วันที่เสร็จสิ้น</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $rs['problem_dateend'];?></label></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">	
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">รายละเอียดการซ่อม</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
    						<?php if(empty($rs['problem_detailcomplete'])){?>
    						        <p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
    						<?php }else{
        						    echo $rs['problem_detailcomplete'];
        						  }
    						?>
					</label>
    				</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">		
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">หมายเลขเครื่อง</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
						<?php if(empty($rs['problem_serial'])){?>
    						        <p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
    						<?php }else{
        						    echo $rs['problem_serial'];
        						  }
    						?>
					</label>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">	
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">รหัสครุภัณฑ์</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
						<?php if(empty($rs['problem_serialorganize'])){?>
    						<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
    						<?php }else{
        						    echo $rs['problem_serialorganize'];
        						  }
    						?>
					</label>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">สถานที่ดำเนินการ</label></div>
					<div class='col-md-8'>
					<label class='text-left'>
    						<?php if(empty($rs['problem_place'])){?>
    						<p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
    						<?php }else{
        						    echo $rs['problem_place'];
        						  }
    						?>
					</label>
    				</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class="row">	
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ผู้รับเรื่อง</label></div>
					<div class='col-md-8'><label class='text-left'><?php echo $rs['user_name']." ".$rs['user_last'];?></label></div>
				</div>
			</div>
		</div>
   <?php	}?>
		<div class="modal-footer">
			<div class='getdetialfooter'>
				<a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><img src="images/icons/print.png" style="width:16px; height:16px;"></a>
			</div>
			<button type="button" class="close btclose" data-dismiss="modal" aria-label="Close"><span class="btn btn-danger" aria-hidden="true">&times;</span></button>
		</div>
