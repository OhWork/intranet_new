<?php
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

	<div class="modal-body fixdetailall clearfix">
		<div class='fixdetailbox'>
    		 <!--เพิ่มฝ่าย เพื่อให้ทราบว่าหน่วยงานไหนแจ้งซ่อม-->
    		 <div class='getdetailbox1'>
				<div class='getdetailleft'><label>สำนัก/สวนสัตว์</label></div>
				<div class='getdetailright'><?php echo $fix['zoo_name'];?></div>
				</div>
            <div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>ฝ่าย</label></div>
				<div class='fixdetailboxright'><?php echo $fix['subzoo_name'];?></div>
			</div>
			<div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>ชื่อ</label></div>
				<div class='fixdetailboxright'><?php echo $fix['problem_name'];?></div>
			</div>
			<div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>ตำแหน่ง</label></div>
				<div class='fixdetailboxright'>
    				<?php if(empty($fix['problem_position'])){?>
    				<p style="color:red">ไม่ระบุ</p>
                <?php }else{
                    echo $fix['problem_position'];
                    }?></div>
			</div>
            <div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>IP-Address</label></div>
				<div class='fixdetailboxright'>
    				<?php if(empty($fix['problem_ip'])){?>
    				<p style="color:red">ยังไม่ลงทะเบียน</p>
    				<?php }else{ 
        				    echo $fix['problem_ip'];
        				  }
    				?>
                </div>
		    </div>    
			<div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>ชนิดอุปกรณ์</label></div>
				<div class='fixdetailboxright'><?php echo $fix['typetools_name'];?></div>
			</div>
			<div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>ปัญหา</label></div>
				<div class='fixdetailboxright'><?php echo $fix['subtypetools_name'];?></div>
			</div>
            <div class='fixdetailbox1'>
				<div class='fixdetailboxleft'><label>รายละเอียด</label></div>
				<div class='fixdetailboxright'>
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
		
		<?php if(!empty($rs['problem_status'] == 'S')){ ?>
		<div class="modal-header">
			<h4 class="modal-title waitcompleted" id="exampleModalLabel">อยู่ระหว่างการดำเนินการ</h4>
        </div>
            <div class="modal-body getfixdetailall clearfix">
				    <div class='getfixdetailbox1'>
                        <div class='getfixdetailleft'><label>วันที่รับเรื่อง</label></div>
                        <div class='getfixdetailright'><?php echo $rs['problem_dateorder'];?></div>
				    </div>
   					<div class='getfixdetailbox1'>
				    	<div class='getfixdetailleft'><label>รายละเอียด/อุปกรณ์ที่ต้องทำการเปลียน</label></div>
                    	<div class='getfixdetailright'>
                            <?php if(empty($rs['problem_detailwaitcomplete'])){?>
                                <p style="color:red">ไม่ระบุ</p>
                            <?php }else{
                                    echo $rs['problem_detailwaitcomplete'];
                                  } ?>
                    	</div>
					</div>	
					<div class='getfixdetailbox1'>
				    	<div class='getfixdetailleft'><label>หมายเลขเครื่อง</label></div>
                    	<div class='getfixdetailright'>
    						<?php if(empty($rs['problem_serial'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_serial'];
        						  }
    						?>        
    					</div>
					</div>
					<div class='getfixdetailbox1'>
				    	<div class='getfixdetailleft'><label>รหัสครุภัณฑ์</label></div>
                    	<div class='getfixdetailright'>
    						<?php if(empty($rs['problem_serialorganize'])){?>
    						<p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_serialorganize'];
        						  }
    						?>
    					</div>
					</div>
					<div class='getfixdetailbox1'>
						<div class='getfixdetailleft'><label>สถานที่</label></div>
						<div class='getfixdetailright'>
    						<?php if(empty($rs['problem_place'])){?>
    						<p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_place'];
        						  }
    						?>        
    				    </div>
					</div>
				<div class='getfixdetailbox1'>
				<div class='getfixdetailleft'><label>ผู้รับเรื่อง</label></div>
				<div class='getfixdetailright'><?php echo $rs['user_name']." ".$rs['user_last'];?></div>
				</div>
			</div>
      </div>
    	<?php	}?>
    	<?php if(!empty($rs['problem_status'] == 'Y')){?>
		<div class="modal-header">
			<h4 class="modal-title completedtitle" id="exampleModalLabel">ดำเนินการเสร็จสิ้น</h4>
		</div>
        <div class="modal-body completedall clearfix">
					<div class='completedbox1'>
						<div class='completedleft'><label>วันที่เสร็จสิ้น</label></div>
						<div class='completedright'><?php echo $rs['problem_dateend'];?></div>
					</div>	
				<div class='completedbox1'>
				    <div class='completedleft'><label>รายละเอียดการซ่อม</label></div>
                    <div class='completedright'>
    				    <?php if(empty($rs['problem_detailcomplete'])){?>
                                <p style="color:red">ไม่ระบุ</p>
                        <?php }else{ 
        				        echo $rs['problem_detailcomplete'];
        				      }
    				    ?>
    				</div>
				</div>	
				<div class='completedbox1'>
						<div class='completedleft'><label>หมายเลขเครื่อง</label></div>
						<div class='completedright'>
    						<?php if(empty($rs['problem_serial'])){?>
    						<p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_serial'];
        						  }
    						?>
    				    </div>
					</div>
					<div class='completedbox1'>
						<div class='completedleft'><label>รหัสครุภัณฑ์</label></div>
						<div class='completedright'>
    						<?php   if(empty($rs['problem_serialorganize'])){?>
    						<p style="color:red">ไม่ระบุ</p>
                            <?php  
                                    }else{ 
                                        echo $rs['problem_serialorganize'];
                                    }
                            ?>
                        </div>
					</div>
					<div class='completedbox1'>
						<div class='completedleft'><label>สถานที่</label></div>
						<div class='completedright'>
    						<?php if(empty($rs['problem_place'])){?>
    						        <p style="color:red">ไม่ระบุ</p>
    						<?php }else{ 
        						    echo $rs['problem_place'];
        						  }
    						?>        
    				    </div>
					</div>
					<div class='completedbox1'>
						<div class='completedleft'><label>ผู้รับเรื่อง</label></div>
						<div class='completedright'><?php echo $rs['user_name']." ".$rs['user_last'];?></div>
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
    		<a href="cs_report.php?id=<?php echo $id;?>"><button type="button" class="btn btn-primary formgetfixdetial"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button></a>
		</div>
			<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></button>
		</div>
