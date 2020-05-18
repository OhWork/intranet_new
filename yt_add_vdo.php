<?php
   $datetime = date("Y-m-d H:i");
    $form = new form();
    $lbvdoname = new label('ชื่อเรื่อง');
    $lbly = new label('Link youtube');
    $lbtypeDesign = new label('เลือกรูปแบบข่าวสาร');
    $lbpic = new label('ภาพหน้าปก');
    $lbdatestart = new label('วันเริ่ม');
    $lbdateend = new label('วันสิ้นสุด'); 
    $txtdetailnews = new textfield('news_detail','','form-control','','');
    $txtdatestart = new datetimepicker('news_datestart','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','','');
    $txtdateend = new datetimepicker('news_dateend','datetimepicker2','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker2','','');    $txtheadnews = new textfield('news_head','','form-control','','');
    
    
    
   echo $form->open("form_reg","frmMain","","ty_insert_vdo.php","");
    ?>
    <div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<h4><?php echo $lbvdoname; ?></h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $txtheadnews; ?>
		</div>
    </div>
<?php
?>