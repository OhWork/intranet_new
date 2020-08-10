<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "language": {
                    "infoEmpty": "ไม่พบข้อมูล",
                }
    } );
                    $('#table1').DataTable( {
                "ordering": false,
                "language": {
                    "infoEmpty": "ไม่พบข้อมูล",
                }
    } );
                    $('#table2').DataTable( {
                "ordering": false,
                "language": {
                    "infoEmpty": "ไม่พบข้อมูล",
                }
    } );
} );
</script>
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
                $member_id = $rs['zlfotmember_id'];
    echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
	?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <div class="row">
            <h4 style="color: #4e555b">ประวัติสมาชิกสโมสรผู้รักสวนสัตว์</h4>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-3">
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>หมายเหตุ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <p><?php  echo $rs['zlfotmember_detail']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-1"></div>
        </div>
    </div>
</div>



<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <div class="row">
        <h4 style="color: #4e555b">ประวัติการเป็นสมาชิก</h4>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<?php
                                                         $columns = array('zlfotcard_code','typezlfot_name','zlfotcard_datestart','zlfotcard_dateend','zlfotcard_receipt','zlfotcard_receiptfin','zlfotcard_detail');
                                                         $rs = $db->findByPK34DESC('zlfotmember','zlfotcard','typezlfot','zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id','zlfotmember_zlfotmember_id',$member_id,'zlfotcard_stsfw','"C"','zlfotcard_id')->execute();
                                                        $grid = new gridView();
                                                                    $grid->header = array('<b><center>รหัสสมาชิก</center></b>','<b><center>ประเภทสมาชิก</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>','<b><center>เลขที่ใบเสร็จสโมสรฯ (เล่มที่/เลขที่)</center></b>','<b><center>เลขที่ใบเสร็จการเงิน (เล่มที่/เลขที่)</center></b>','<b><center>หมายเหตุ</center></b>');
                                                                    $grid->width = array('10%','10%','10%','10%','20%','20%','20%');
                                                                    $grid->name = 'table';
                                                                    $grid->renderFromDB($columns,$rs);


 ?>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2"style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-1"></div>
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <div class="row">
                            <div class="col-xl-3 col-lg-2 col-md-1"></div>
                            <div class="col-xl-6 col-lg-2 col-md-1 col-sm-12 col-12">    
                                <div class="btn-group btn-group-toggle col-12" data-toggle="buttons">
                                    <label class="btn btn-success active col-6">
                                        <input type="radio" name="sendcard_status" value="Y" onchange="swapConfig(this)" id="complete" autocomplete="off" checked> ดำเนินการจัดส่ง
                                    </label>
                                    <label class="btn btn-danger col-6">
                                        <input type="radio" name="sendcard_status" value="N" onchange="swapConfig(this)" id="nocomplete" autocomplete="off"> มารับด้วยตนเอง
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-1"></div>
            </div>
        </div>
        <div id="completeSettings" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <h4 style="color: #4e555b">ประวัติการจัดส่ง</h4>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<?php
                $columns = array('sendcard_date','postoffice_name','sendcard_code');
                $rs = $db->findByPK34('zlfotmember','sendcard','postoffice','sendcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','sendcard.postoffice_postoffice_id','postoffice.postoffice_id','zlfotmember_zlfotmember_id',$member_id,'sendcard_status','"Y"')->execute();
                $grid = new gridView();
                $grid->header = array('<b><center>วันที่จัดส่ง</center></b>','<b><center>ไปรษณีย์</center></b>','<b><center>เลขที่</center></b>');
                $grid->width = array('25%','25%','25%','25%');
                $grid->name = 'table1';
                $grid->renderFromDB($columns,$rs);
 ?>
            </div>
        </div>
        <div id="nocompleteSettings" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="display:none">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <h4 style="color: #4e555b">ประวัติการจัดส่ง</h4>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<?php
                $columns = array('sendcard_date');
                $rs = $db->findByPK23('zlfotmember','sendcard','sendcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotmember_zlfotmember_id',$member_id,'sendcard_status','"N"')->execute();
                $grid = new gridView();
                $grid->header = array('<b><center>วันที่มารับ</center></b>');
                $grid->width = array('25%','25%','25%','25%');
                $grid->name = 'table2';
                $grid->renderFromDB($columns,$rs);
 ?>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-4"></div>
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <a class="btn btn-warning btn-block col-12" href="admin_index.php?url=zlfot_show_member.php">
						ย้อนกลับ
                    </a>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4"></div>
            </div>
	</div>
    </div>
</div>
<?php echo $form->close();
?>
<script>
    function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";

  }
  </script>
  <?php
endif;
?> 
