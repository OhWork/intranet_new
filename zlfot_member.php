<?php
    if (!empty($_SESSION['user_name'])):
    $id =  $_GET['id'];
    $form = new form();
    $button = new buttonok("ยืนยันการตรวจสอบ","","btn btn-success btn-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
        $rs = $db->findByPK88('zlfotmember','zlfotcard','typezlfot','subdistricts','districts','provinces','user','zoo',
                'zlfotmember.user_user_id','user.user_id',
                'zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id',
                'zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id',
                'user.subzoo_zoo_zoo_id','zoo.zoo_id',
                'zlfotmember.zlfotmember_provinces_id','provinces.provinces_id',
                'zlfotmember.zlfotmember_districts_id','districts.districts_id',
                'zlfotmember.zlfotmember_subdistricts_id','subdistricts.subdistricts_id',
                'zlfotmember_id',$id)->executeRow(); 
    echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
	?>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" style="background-color: #FFFFFF;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <h4 style="color: #4e555b">ประวัติสมาชิกสโมสรผู้รักสวนสัตว์</h4>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-1"></div>
            <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>ชื่อ-นามสกุล :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php echo $rs['zlfotmember_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>หมายเลขโทรศัพท์ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php echo $rs['zlfotmember_tel']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>อีเมล์ :</p>
                            </div>
                            <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8">
                                <p><?php echo $rs['zlfotmember_email']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>Lineid :</p>
                            </div>
                            <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8">
                                <p><?php echo $rs['zlfotmember_line']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>ที่อยู่ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php  echo $rs['zlfotmember_address']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>แขวง/ตำบล :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php  echo $rs['subdistricts_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>เขต/อำเภอ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php  echo $rs['districts_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <p>จังหวัด :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php  echo $rs['provinces_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-1"></div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" style="background-color: #FFFFFF;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <div class="row">
        <h4 style="color: #4e555b">ประวัติการเป็นสมาชิก</h4>
        <a href="admin_index.php?url=zlfot_add_card.php&id=<?php echo $rs['zlfotmember_id'];?>" class="btn btn-success pl-4 pr-4 ml-auto" title="เพิ่มบัตรสมาชิกสโมสรผู้รักสวนสัตว์"><i class="fas fa-plus"></i><i class="far fa-id-card ml-2"></i></a>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<?php
                                                         $columns = array('zlfotcard_code','typezlfot_name','zlfotcard_datestart','zlfotcard_dateend');
                                                         $rs = $db->findByPK34DESC('zlfotmember','zlfotcard','typezlfot','zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id','zlfotmember_zlfotmember_id',$member_id,'zlfotcard_stsfw','"C"','zlfotcard_id')->execute();
                                                        $grid = new gridView();
                                                                    $grid->header = array('<b><center>รหัสสมาชิก</center></b>','<b><center>ประเภทสมาชิก</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>');
                                                                    $grid->width = array('25%','25%','25%','25%');
                                                                    $grid->name = 'table';
                                                                    $grid->renderFromDB($columns,$rs);


 ?>
    </div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
						<div class="row">
                                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                                             <a class="btn btn-warning btn-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" href="admin_index.php?url=zlfot_show_member.php">
						ย้อนกลับ
						</a>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-2 col-md-2"></div>
						</div>
					</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1"></div>
		</div>
	</div>
<?php echo $form->close();
endif;
?> 
