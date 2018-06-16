<?php
  date_default_timezone_set('Asia/Bangkok');
  $id = $_GET['id'];
  $form = new form();
  $lbplan_date = new label("เดือน/ปี :");
  $lbplan_adult = new label("แผนจำนวนผู้เข้าชม-ผู้ใหญ่ :");
  $lbplan_child = new label("แผนจำนวนผู้เข้าชม-เด็ก :");
  $lbplan_ch_pj = new label("แผนจำนวนผู้เข้าชม-นักเรียนในโครงการ (ฟรี) :");
  $lbplan_sp_ch = new label("แผนจำนวนผู้เข้าชม-นักเรียน/ครู/ทหาร/ตำรวจ :");
  $lbplan_foreigner_adult = new label("แผนจำนวนผู้เข้าชม-ผู้ใหญ่ (ชาวต่างชาติ) :");
  $lbplan_foreigner_child = new label("แผนจำนวนผู้เข้าชม-เด็ก (ชาวต่างชาติ) :");
  $lbplan_charge_safari_adult = new label("แผนจำนวนผู้เข้าชม-ผู้ใหญ่ (ไนท์ซาฟารี) :");
  $lbplan_charge_safari_child = new label("แผนจำนวนผู้เข้าชม-เด็ก (ไนท์ซาฟารี) :");
  $lbplan_safari_foreigner_adult = new label("แผนจำนวนผู้เข้าชม-ผู้ใหญ่ชาวต่างชาติ (ไนท์ซาฟารี) :");
  $lbplan_safari_foreigner_child = new label("แผนจำนวนผู้เข้าชม-เด็กชาวต่างชาติ (ไนท์ซาฟารี) :");
  $lbplan_free = new label("แผนจำนวนผู้เข้าชม-ยกเว้น :");
  $lbplan_status = new label("สถานะ :");
  $lbcount = new label("ครั้งที่ :");
   $selectzoo = new SelectFromDB();
  $selectzoo->name = 'plan_zoo_zoo_id';
  $selectzoo->lists = 'โปรดระบุ สำนัก/สวนสัตว์';
  $txtcount = new textfieldreadonly('plan_count','','');
  $txtplan_date = new textfieldcalendarreadonly('plan_date','datepicker','','date-picker form-control','input-group-addon btn calen','datepicker');
  $txtplan_adult = new textfield('plan_adult','','form-control css-require','');
  $txtplan_child = new textfield('plan_child','','form-control css-require','');
  $txtplan_ch_pj = new textfield('plan_ch_pj','','form-control css-require','');
  $txtplan_sp_ch = new textfield('plan_sp_ch','','form-control css-require','');
  $txtplan_f_ch = new textfield('plan_f_ch','','form-control css-require','');
  $txtplan_f_ad = new textfield('plan_f_ad','','form-control css-require','');
  $txtplan_chsafari_adult = new textfield('plan_chsafari_adult','','form-control css-require','');
  $txtplan_chsafari_child = new textfield('plan_chsafari_child','','form-control css-require','');
  $txtplan_sfsafari_ad = new textfield('plan_sfsafari_ad','','form-control css-require','');
  $txtplan_sfsafari_ch = new textfield('plan_sfsafari_ch','','form-control css-require','');
  $txtplan_free = new textfield('plan_free','','form-control css-require','');
  $radiostatus = new radioGroup();
  $radiostatus->name = 'plan_status';
  if(empty($id)){ 
    	$radiostatus->add('ใช้งาน',1,'checked');
    	$radiostatus->add('ไม่ใช้งาน',0,'');
    	}
  $submit = new buttonok("ยืนยัน","","btn btn-success addplanbutton","");
  if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('plan','plan_id',$id)->executeRow();
    $txtplan_date->value = $r['plan_date'];
	$txtplan_count->value = $r['plan_count'];

	if($r["plan_status"] == 1){ 
    	$radiostatus->add('อนุญาต',1,'checked');
    	$radiostatus->add('ไม่อนุญาต',0,'');
    	}else if($r['plan_status'] == 0){
        $radiostatus->add('อนุญาต',1,'');
        $radiostatus->add('ไม่อนุญาต',0,'checked');
    	}
    	}

  echo $form->open("form_reg","form","","trs_insert_plan.php","");
  echo "<div class='trswh'>";
  echo "<div class='col-md-12 trsaddplan'><h4>เพิ่มแผน</h4></div>";
if(!empty($_GET['id'])){
  }else{
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbzoo."</div><div class='col-md-3'>".$selectzoo->selectFromTBinDB('zoo','zoo_id','zoo_name','zoo_type','2',$r['zoo_zoo_id'])."</div><div class='col-md-3'></div></div>";
  }
  echo $lb_plandate."<div class='col-md-12 trsapr'>
                <div class='row'><center>
                    <div id='searchdaySettings'>
                        <div class='col-md-4'></div>
                            <div class='col-md-4'>
                                <div class='date-form dayinbox'>
                                    <div class='form-horizontal'>
                                        <div class='control-group'>
                                            <div class='controls'>
                                                <div class='input-group'>".$txtplan_date."</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class='col-md-4'></div>
                    </div>
                </div></div>";
  $txtcount->value = 1;
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbcount."</div><div class='col-md-3'>".$txtcount."</div><div class='col-md-3'></div></div>";
  if(!empty($_GET['id'])){
  }else{
        echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_adult."</div><div class='col-md-3'>".$txtplan_adult."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_child."</div><div class='col-md-3'>".$txtplan_child."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_ch_pj."</div><div class='col-md-3'>".$txtplan_ch_pj."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_sp_ch."</div><div class='col-md-3'>".$txtplan_sp_ch."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_foreigner_adult."</div><div class='col-md-3'>".$txtplan_f_ad."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_foreigner_child."</div><div class='col-md-3'>".$txtplan_f_ch."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_charge_safari_adult."</div><div class='col-md-3'>".$txtplan_chsafari_adult."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_charge_safari_child."</div><div class='col-md-3'>".$txtplan_chsafari_child."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_safari_foreigner_adult."</div><div class='col-md-3'>".$txtplan_sfsafari_ad."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_safari_foreigner_child."</div><div class='col-md-3'>".$txtplan_sfsafari_ad."</div><div class='col-md-3'></div></div>";
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_free."</div><div class='col-md-3'>".$txtplan_free."</div><div class='col-md-3'></div></div>";
  }
  
  echo "<div class='col-md-12 trsapr'><div class='col-md-3'></div><div class='col-md-3 trsapt'>".$lbplan_status."</div><div class='col-md-3'>".$radiostatus."</div><div class='col-md-3'></div></div>";
    echo "<input type='hidden' name='plan_count' value='1'/>";
  echo "<input type='hidden' name='plan_id' value='$_GET[id]'/>";
  echo $submit."</div>";
  echo $form->close();
  
?>
<script>
       $(".date-picker").datepicker({
    format:'yyyy-mm-dd',
    autoclose:true
   }).datepicker("setDate", "0");
</script>