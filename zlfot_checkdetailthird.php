<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
        $selectpostoffice = new SelectFromDB();
        $selectpostoffice->name = 'postoffice_postoffice_id';
        $selectpostoffice->lists = 'โปรดระบุ';
            $lbpost = new label('ยี้ห้อ?');
            $lbpostcode = new label('เลขที่จัดส่ง');
            $lbdate = new label('วันที่จัดส่ง');
    $txtpost = new textfield('sendcard_code','','form-control','','');
    $txtdate = new datetimepicker('sendcard_date','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','','');
    $txtdate2 = new datetimepicker('sendcard_date','datetimepicker2','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker2','','');
        $button = new buttonok("บันทึก","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
               $rs = $db->findByPK88('zlfotmember','zlfotcard','typezlfot','subdistricts','districts','provinces','user','zoo',
                'zlfotmember.user_user_id','user.user_id',
                'zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id',
                'zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id',
                'user.subzoo_zoo_zoo_id','zoo.zoo_id',
                'zlfotmember.zlfotmember_provinces_id','provinces.provinces_id',
                'zlfotmember.zlfotmember_districts_id','districts.districts_id',
                'zlfotmember.zlfotmember_subdistricts_id','subdistricts.subdistricts_id',
                'zlfotmember_id',$id)->executeRow();  
               $checkcard = $db->findByPK13('zlfotcard','zlfotcard_status','"Y"','zlfotcard_stsfw','"S"','zlfotmember_zlfotmember_id',$id)->executeAssoc();
              $member_id = $rs['zlfotmember_zlfotmember_id'];
            echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
            ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
	<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;font-size: 18px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                    <h2>การจัดส่งบัตรสมาชิก</h2>
		</div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
		<div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <label>ข้อมูลการจัดส่ง</label>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <p class="mb-0"><?php echo $rs['zlfotcard_code']; ?> ชื่อผู้รับ : <?php echo $rs['zlfotmember_nameth']; ?></p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <p class="mb-0">เบอร์ติดต่อ : <?php echo $rs['zlfotmember_tel']; ?></p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <p class="mb-0"> ที่อยู่ : <?php echo $rs['zlfotmember_address']; ?> แขวง/ตำบล <?php echo $rs['subdistricts_nameth']; ?> เขต/อำเถอ <?php echo $rs['districts_nameth']; ?> จังหวัด <?php echo $rs['provinces_nameth']; ?></p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <p><?php echo $rs['subdistricts_code']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1"></div>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
    <div class="row">
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
	<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;font-size: 18px;">
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
            <div id="completeSettings">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <p><?php echo $lbpost; ?></p>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                            <?php echo $selectpostoffice->selectFromTB('postoffice','postoffice_id','postoffice_name',''); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <p><?php echo $lbpostcode; ?></p>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                            <?php echo $txtpost; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <p><?php echo $lbdate; ?></p>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                            <div class="row">
                                <?php echo $txtdate; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nocompleteSettings" style="display:none">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <p><?php echo $lbdate; ?></p>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                            <div class="row">
                                <?php echo $txtdate2; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                <input type='hidden' name='zlfotcard_stsfw' value='T'> 
                <input type='hidden' name='zlfotmember_id' value="<?php echo $member_id; ?>"/>
                <?php if($checkcard){  ?>
               <input type='hidden' name='zlfotcard_id' value='<?php echo $checkcard['zlfotcard_id'];?>' />
                <?php  }else{?>
	<input type='hidden' name='zlfotcard_id' value='<?php echo $rs['zlfotcard_id'];?>' />
                <?php } ?>
                    <div class="col-xl-9 col-lg-8 col-md-8"></div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <?php echo $button;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1"></div>
    </div>
</div>
             <?php
             echo $form->close();
             
             ?>
<script>
    function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";

  }
	$(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
    });
        </script>

<?php
             endif;
             ?> 
