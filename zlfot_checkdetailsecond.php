<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
        $button = new buttonok("ดำเนินการพิมพ์เรียบร้อย","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
               $rs = $db->findByPK88('zlfotmember','zlfotcard','typezlfot','subdistricts','districts','provinces','user','zoo',
                'zlfotmember.user_user_id','user.user_id',
                'zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id',
                'zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id',
                'user.subzoo_zoo_zoo_id','zoo.zoo_id',
                'zlfotmember.zlfotmember_provinces_id','provinces.provinces_id',
                'zlfotmember.zlfotmember_districts_id','districts.districts_id',
                'zlfotmember.zlfotmember_subdistricts_id','subdistricts.subdistricts_id',
                'zlfotmember_id',$id)->executeRow();
                          $checkcard = $db->findByPK24('zlfotcard','typezlfot', 'zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id','zlfotcard_status','"Y"','zlfotcard_stsfw','"P"','zlfotmember_zlfotmember_id',$id)->executeAssoc();
            echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
 ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
	<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;font-size: 18px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                    <h4>ข้อมูลที่ใช้พิมพ์บัตรสมาชิก</h4>
		</div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
		<div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php 
                               if($checkcard){
                                echo $checkcard['zlfotcard_code']." ".$checkcard['typezlfot_name'];
                               }else{
                                 echo $rs['zlfotcard_code']." ".$rs['typezlfot_name'];
                               } ?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <?php
                               if($checkcard){
                                $datestart = new DateTime($checkcard['zlfotcard_datestart']);
                                $dateend = new DateTime($checkcard['zlfotcard_dateend']);
                               }else{
                                 $datestart = new DateTime($rs['zlfotcard_datestart']);
                                $dateend = new DateTime($rs['zlfotcard_dateend']);
                               }
                                
                                echo $datestart->format('d-M-Y'); ?> - <?php echo $dateend->format('d-M-Y'); ?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo $rs['zlfotmember_nameen']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                <input type='hidden' name='zlfotcard_stsfw' value='S'>
                <input type='hidden' name='zlfotcard_id' value=<?php echo $rs['zlfotcard_id'];?>>
                <?php if($checkcard){  ?>
                                                    <input type='hidden' name='zlfotcard_id' value='<?php echo $checkcard['zlfotcard_id'];?>' />
                                                   <?php  }else{?>
			<input type='hidden' name='zlfotcard_id' value='<?php echo $rs['zlfotcard_id'];?>' />
                                                   <?php } ?>
                    <div class="col-xl-4 col-lg-4 col-md-3"></div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <?php echo $button; ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1"></div>
    </div>
</div>
            <?php echo $form->close();
            endif;
            ?>
