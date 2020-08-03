<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
        $lbreciptfin = new label('เลขที่ใบเสร็จการเงิน(เล่มที่/เลขที่)');
        $txtreciptfin = new textfield('zlfotcard_receiptfin','','form-control','กรุณากรอกเลขใบเสร็จ','');
        $button = new buttonok("บันทึกใบเสร็จ","","btn btn-success btn-block bt3success col-12","");
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
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-xl-4 col-lg-2 col-md-1"></div>
            <div class="col-xl-4 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;font-size: 18px;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4><?php echo $lbreciptfin; ?></h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php echo $txtreciptfin; ?>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mb-3">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-2"></div>
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <input type='hidden' name='zlfotcard_stsfw' value='C'> 
                        <input type='hidden' name='zlfotcard_id' value=<?php echo $rs['zlfotcard_id'];?>>
                            <?php echo $button;?>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-md-1"></div>
        </div>
    </div>
</div>
<?php echo $form->close();
             endif;
             ?> 