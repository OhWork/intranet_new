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

	 <div class="modal-body getdetailtop">  
			<div class='getdetail clearfix'>
    			<!--เพิ่มฝ่ายเพื่อให้ทราบว่าหน่วยงานไหนแจ้งมา-->
    			<div class='getdetailbox1'>
				<div class='getdetailleft'><label>สำนัก/สวนสัตว์</label></div>
				<div class='getdetailright'><?php echo $fix['zoo_name'];?></div>
				</div>
                <div class='getdetailbox1'>
				<div class='getdetailleft'><label>ฝ่าย</label></div>
				<div class='getdetailright'><?php echo $fix['subzoo_name'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>ชื่อ</label></div>
				<div class='getdetailright'><?php echo $fix['problem_name'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>ตำแหน่ง</label></div>
				<div class='getdetailright'>
				<?php if(empty($fix['problem_position'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $fix['problem_position'];
        						  }
    						?>
				</div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>IP-Address</label></div>
				<div class='getdetailright'>
    				<?php if(empty($fix['problem_ip'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $fix['problem_ip'];
        						  }
    						?>
    				</div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>วันและเวลา</label></div>
				<div class='getdetailright'><?php echo $fix['problem_date'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>ชนิด</label></div>
				<div class='getdetailright'><?php echo $fix['typetools_name'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>ปัญหา</label></div>
				<div class='getdetailright'><?php echo $fix['subtypetools_name'];?></div>
				</div>
				<div class='getdetailbox1'>
				<div class='getdetailleft'><label>รายละเอียด</label></div>
				<div class='getdetailright'>
    				<?php if(empty($fix['problem_detail'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $fix['problem_detail'];
        						  }
    						?>
    				</div>
				</div>
			</div>		
	</div>
	 
   <?php if($fix['problem_status'] == 'S'){ ?>
    <div class="modal-header">
		<h4 class="modal-title waitcompleted" id="exampleModalLabel">อยู่ระหว่างการดำเนินการ</h4>
    </div>
       <div class="modal-body getdetailcenter">  
			<div class='getdetail clearfix'>
				<div class='getdetailbox1'>
				    <div class='getdetailleft'><label>วันที่รับเรื่อง</label></div>
                    <div class='getdetailright'><?php echo $rs['problem_dateorder'];?></div>
				</div>
				<div class='getdetailbox1'>
				    <div class='getdetailleft'><label>เนื่องจาก</label></div>
                    <div class='getdetailright'>
                        <?php if(empty($rs['problem_detailwaitcomplete'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_detailwaitcomplete'];
        						  }
    						?>
                    </div>
				</div>
				<div class='getdetailbox1'>
				    <div class='getdetailleft'><label>ผู้ดำเนินการ</label></div>
                    <div class='getdetailright'><?php echo $rs['user_name']." ".$rs['user_last'];?></div>
				</div>
			</div> 
      </div><!--end modal-body-->		
   <?php	}?>
    	
   <?php if(!empty($fix['problem_status'] == 'Y')){   ?>
      <div class="modal-header">
            <h4 class="modal-title completedtitle" id="exampleModalLabel">ดำเนินการเสร็จสิ้น</h4>
      </div>
      <div class="modal-body getdetailall clearfix">  
				<div class='getdetail'>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>วันที่เสร็จสิ้น</label></div>
						<div class='getdetailright2'><?php echo $rs['problem_dateend'];?></div>
					</div>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>รายละเอียดการซ่อม</label></div>
						<div class='getdetailright2'>
    						<?php if(empty($rs['problem_detailcomplete'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_detailcomplete'];
        						  }
    						?>
    				    </div>
					</div>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>หมายเลขเครื่อง</label></div>
						<div class='getdetailright2'>
						<?php if(empty($rs['problem_serial'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_serial'];
        						  }
    						?>
						</div>
					</div>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>รหัสครุภัณฑ์</label></div>
						<div class='getdetailright2'>
						<?php if(empty($rs['problem_serialorganize'])){?>
    						<p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_serialorganize'];
        						  }
    						?>
						</div>
					</div>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>สถานที่ดำเนินการ</label></div>
						<div class='getdetailright2'>
    						<?php if(empty($rs['problem_place'])){?>
    						<p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_place'];
        						  }
    						?>
    				    </div>
					</div>
					<div class='getdetailbox1'>
						<div class='getdetailleft2'><label>ผู้รับเรื่อง</label></div>
						<div class='getdetailright2'><?php echo $rs['user_name']." ".$rs['user_last'];?></div>
					</div>
				</div>
			</div><!--end modal-body-->
   <?php	}?>
		<div class="modal-footer">
		<div class='getdetialfooter'>
    		<a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button></a>
		</div>
		
			<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></button>
		</div>
