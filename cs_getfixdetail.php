<?php
	error_reporting(0);
    include 'database/db_tools.php';
    include 'connect.php';
    $id = $_GET['id'];
    $rs = $db->findByPK55('problem','typetools','subtypetools','subzoo','user',
        'problem.subtypetools_typetools_typetools_id','typetools.typetools_id',
        'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
        'problem.subzoo_subzoo_id','subzoo.subzoo_id',
        'problem.problem_adminfix','user.user_id',
        'problem_id',$id)->executeRow();
    $fix = $db->findByPK55('problem','typetools','subtypetools','subzoo','zoo',
        'problem.subtypetools_typetools_typetools_id','typetools.typetools_id',
        'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
        'problem.subzoo_subzoo_id','subzoo.subzoo_id',
        'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
        'problem_id',$id)->executeAssoc();
?>

	<div class="modal-body">
    		 <!--เพิ่มฝ่าย เพื่อให้ทราบว่าหน่วยงานไหนแจ้งซ่อม-->
			<div class="col-md-12">
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
	    				<p class='text-left' style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
	                <?php }else{
	                    echo $fix['problem_position'];
	                    }?>
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
	    				<p class='text-left' style="color:red;margin-bottom:8px;">ยังไม่ลงทะเบียน</p>
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
					<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ชนิดอุปกรณ์</label></div>
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
	    				<p class='text-left' style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
	                <?php }else{
	                    echo $fix['problem_detail'];
	                    }
	                    ?>
					</label>
				    </div>
				</div>
			</div>
     </div>

		<?php
			if(!empty($rs['problem_status'] == 'S')){
			?>
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
							<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">รายละเอียด/อุปกรณ์ที่ต้องทำการเปลียน</label></div>
							<div class='col-md-8'>
							<label class='text-left'>
                            <?php if(empty($rs['problem_detailwaitcomplete'])){?>
                                <p style="color:red;margin-bottom:8px;">ไม่ระบุ</p>
                            <?php }else{
                                    echo $rs['problem_detailwaitcomplete'];
                                  } ?>
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
							<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">สถานที่</label></div>
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
						<div class='col-md-8'>
						<label class='text-left'><?php echo $rs['user_name']." ".$rs['user_last'];?></label>
						</div>
					</div>
				</div>
			</div>
      </div>>
    	<?php	}?>
    	<?php if(!empty($rs['problem_status'] == 'Y')){?>
		<div class="modal-header">
			<h4 class="modal-title" id="exampleModalLabel">ดำเนินการเสร็จสิ้น</h4>
		</div>
		<div class="modal-body">
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-4' style="padding: 0 4;"><p class="text-md-left font-weight-bold">วันที่เสร็จสิ้น</label></div>
					<div class='col-md-8'><p class='text-left'><?php echo $rs['problem_dateend'];?> </p> </div>
				</div>
			</div>
				<div class='col-md-12'>
					<div class="row">
					    <div class='col-md-4' style="padding: 0 4;"><p class="text-md-left font-weight-bold">รายละเอียดการซ่อม</label></div>
	                    <div class='col-md-8'>
	    				    <?php if(empty($rs['problem_detailcomplete'])){?>
	                                <p class='text-left' style="color:red">ไม่ระบุ</p>
	                        <?php }else{?>
	        				       <p class='text-left'> <?php echo $rs['problem_detailcomplete']; ?> </p>
	        				<?php  } ?>
	    				</div>
	    			</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
							<div class='col-md-4' style="padding: 0 4;"><p class="text-md-left font-weight-bold">หมายเลขเครื่อง</label></div>
							<div class='col-md-8'>
	    						<?php if(empty($rs['problem_serial'])){?>
	    						<p class='text-left' style="color:red">ไม่ระบุ</p>
	    						<?php }else{ ?>
	        						   <p class='text-left'>  <?php echo $rs['problem_serial']; ?> </p>
	        					<?php	  } ?>
	    				    </div>
						</div>
					</div>
					<div class='col-md-12'>
						<div class="row">
							<div class='col-md-4' style="padding: 0 4;"><p class="text-md-left font-weight-bold">รหัสครุภัณฑ์</label></div>
							<div class='col-md-8'>
	    						<?php   if(empty($rs['problem_serialorganize'])){?>
	    						<p class='text-left' style="color:red">ไม่ระบุ</p>
	                            <?php
	                                    }else{?>
	                                      <p class='text-left'><?php echo $rs['problem_serialorganize']; ?></p>
	                                <?php    } ?>
	                        </div>
						</div>
					</div>
					<div class='col-md-12'>
						<div class="row">
							<div class='col-md-4' style="padding: 0 4;"><p class="text-md-left font-weight-bold">สถานที่</label></div>
							<div class='col-md-8'>
	    						<?php if(empty($rs['problem_place'])){?>
	    						       <p class='text-left' style="color:red">ไม่ระบุ</p>
	    						<?php }else{?>
	        						   <p class='text-left'> <?php echo $rs['problem_place']; ?> </p>
	        					<?php	  } ?>
	    				    </div>
						</div>
					</div>
					<div class='col-md-12'>
						<div class="row">
							<div class='col-md-4' style="padding: 0 4;"><label class="text-md-left font-weight-bold">ผู้รับเรื่อง</label></div>
							<div class='col-md-8'> <p class='text-left'><?php echo $rs['user_name']." ".$rs['user_last'];?></p></div>
						</div>
					</div>
			</div>
    	<?php  }?>
		<div class="modal-footer">
<!--
    		<?php if($rs['problem_status'] == 'S'){?>
    		<a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button></a>
			<?php }else if($rs['problem_status'] == 'Y'){ ?>
            <div class='getdetialfooter'>
                <a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><span class="glyphicon glyphicon-print" aria-hidden="true"></button></a>
            </div>
            <?php }else{ ?>
            <div class='getdetialfooter'><p>อยู่ระหว่างรอรับเรื่องการแจ้งซ่อม จากฝ่าย IT</p></div>
            <?php } ?>
-->
        <div class='getdetialfooter'>
    		<a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial "><img src="images/icons/print.png" style="width:16px; height:16px;"></a>
		</div>
			<button type="button" class="close btclose" data-dismiss="modal" aria-label="Close"><span class="btn btn-danger" aria-hidden="true" style="padding: 5px 11px 7px 11px">&times;</span></button>
		</div>
