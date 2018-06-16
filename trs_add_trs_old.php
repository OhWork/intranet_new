<?php if (!empty($_SESSION['user_name'])):
    include_once 'form/change2thaidate.php';
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $rs_zoo = $db->findbyPK('zoo','zoo_id',$user_zoo)->execute();
      $zoo = mysqli_fetch_assoc($rs_zoo,MYSQLI_ASSOC);
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $row = "<div class='row'>";
    $rowend = "</div>";
    $trsborder = "<div class='col-md-12 trsborder>";
	$css = "<div class='col-md-12 addtrsbox'>";
	$cssend = "</div>";
    $form = new form();
    $lbmainadult = new label('ผู้ใหญ่');
    $lbcharge = new label('ปกติ(เสียค่าบัตร)');
    $lbfree = new label('ยกเว้น(ไม่เสียค่าบัตร)');
    $lbprojectfree = new label('ในโครงการ(ไม่เสียค่าบัตร)');
    $lbadultcharge = new label('ผู้ใหญ่(เสียค่าบัตร)');
    $lbchildcharge = new label('เด็ก(เสียค่าบัตร)');
    $lbmainchild = new label('เด็ก/นักเรียน');
    $lbmainspecial = new label('นักศึกษา/ครู/ทหาร/ตำรวจ');
    $lbmainforeigner = new label('ชาวต่างขาติ');
    $lbmainnsf = new label('ไนท์ซาฟารี');
	$lbspecialpj = new label('โครงการพิเศษ');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $txtday = new textfieldcalendarreadonly('touristreport_date','datepicker','','date-picker form-control','input-group-addon btn calen','datepicker');
    $year = date("Y");
    $md = date("m-d");
    $txtday->value = date("Y-m-d");
    $txtadult1 = new textfield('touristreport_adult_ch','','form-control css-require','','');
    $txtadult1->value = 0;
    $txtadult1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtadult0 = new textfield('touristreport_adult_free','','form-control css-require','','');
    $txtadult0->value = 0;
    $txtadult0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtchild1 = new textfield('touristreport_child_ch','','form-control css-require','','');
    $txtchild1->value = 0;
    $txtchild1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtchild0 = new textfield('touristreport_child_free','','form-control css-require','','');
    $txtchild0->value = 0;
    $txtchild0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtchild2 = new textfield('touristreport_child_pj','','form-control css-require','','');
    $txtchild2->value = 0;
    $txtchild2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtspecial1 = new textfield('touristreport_special_ch','','form-control css-require','','');
    $txtspecial1->value = 0;
    $txtspecial1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtspecial0 = new textfield('touristreport_special_free','','form-control css-require','','');
    $txtspecial0->value = 0;
    $txtspecial0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtforeigneradult = new textfield('touristreport_foreigner_adult','','form-control css-require','','');
    $txtforeigneradult->value = 0;
    $txtforeigneradult->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtforeignerchild = new textfield('touristreport_foreigner_child','','form-control css-require','','');
    $txtforeignerchild->value = 0;
    $txtforeignerchild->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtchargeproject = new textfield('touristreport_project_ch','','form-control css-require','','');
    $txtchargeproject->value = 0;
    $txtchargeproject->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtfreeproject = new textfield('touristreport_project_free','','form-control css-require','','');
    $txtfreeproject->value = 0;
    $txtfreeproject->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafariadult1 = new textfield('touristreport_safari_adult_ch','','form-control css-require','','');
    $txtsafariadult1->value = 0;
    $txtsafariadult1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafariadult0 = new textfield('touristreport_safari_adult_free','','form-control css-require','','');
    $txtsafariadult0->value = 0;
    $txtsafariadult0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafarichild1 = new textfield('touristreport_safari_child_ch','','form-control css-require','','');
    $txtsafarichild1->value = 0;
    $txtsafarichild1->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafarichild0 = new textfield('touristreport_safari_child_free','','form-control css-require','','');
    $txtsafarichild0->value = 0;
    $txtsafarichild0->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafariforeigneradult = new textfield('touristreport_safari_foreigner_adult','','form-control css-require','','');
    $txtsafariforeigneradult->value = 0;
    $txtsafariforeigneradult->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $txtsafariforeignerchild = new textfield('touristreport_safari_foreigner_child','','form-control css-require','','');
    $txtsafariforeignerchild->value = 0;
    $txtsafariforeignerchild->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
    $button = new buttonok("ส่งข้อมูลผู้เข้าชมของสวนสัตว์","btnSubmit","btn btn-success btn-lg btn-block","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('touristreport','touristreport_id',$id)->executeRow();
	$txtday->value = $r['touristreport_date'];
	$txtadult1->value = $r['touristreport_adult_ch'];
	$txtadult0->value = $r['touristreport_adult_free'];
	$txtchild1->value = $r['touristreport_child_ch'];
	$txtchild0->value = $r['touristreport_child_free'];
	$txtchild2->value = $r['touristreport_child_pj'];
	$txtspecial1->value = $r['touristreport_special_ch'];
	$txtspecial0->value = $r['touristreport_special_free'];
	$txtforeigneradult->value = $r['touristreport_foreigner_adult'];
	$txtforeignerchild->value = $r['touristreport_foreigner_child'];
	$txtchargeproject->value = $r['touristreport_project_ch'];
	$txtfreeproject->value = $r['touristreport_project_free'];
	$txtsafariadult1->value = $r['touristreport_safari_adult_ch'];
	$txtsafariadult0->value = $r['touristreport_safari_adult_free'];
	$txtsafarichild1->value = $r['touristreport_safari_child_ch'];
	$txtsafarichild0->value = $r['touristreport_safari_child_free'];	
	$txtsafariforeignerchild->value = $r['touristreport_safari_foreigner_child'];
	$txtsafariforeigneradult->value = $r['touristreport_safari_foreigner_adult'];
	}
    echo $row;
	echo $css;
    echo "<h3>เพิ่มข้อมูลผู้เข้าชม".$zoo['zoo_name']."</h3>";
    echo "<hr>";
    if(empty($_GET['id'])){
    echo $form->open("form_reg","frmMain","","trs_insert_touristreport.php","");
    }else{
       echo $form->open("","frmMain","","trs_insert_touristreport.php","");
    }
    echo $row."<div class='col-sm-2 col-md-offset-2 trspad'>".$lbtime.$rowend."
				<div class='col-sm-8 trsinputday'>
					<div class='date-form dayinbox'>
                        <div class='form-horizontal'>
                            <div class='control-group'>
                                <div class='controls'>
                                    <div class='input-group'>";
    if(empty($_GET['id'])){
        echo $txtday;
    }else{
        $date_fix = strtotime($r['touristreport_date']);
        $th_date = thai_date($date_fix);
        echo $th_date;
    }
    echo $rowend.$rowend."</div>
                                </div>
                            </div>
                       </div>
 			      </div><div class'row' style='margin:10 0 0 0;'><span class='message'></span>".$rowend;   
    echo $row."<fieldset class='fieldset1'><legend>".$lbmainadult."</legend><div class='col-sm-2 col-md-offset-2 trspad'>".$lbcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput'>".$txtadult1."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbfree.$rowend."<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtadult0."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."</fieldset>".$rowend;
    echo $row."<fieldset class='fieldset2'><legend>".$lbmainchild."</legend><div class='col-sm-2 col-md-offset-2 trspad'>".$lbcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput'>".$txtchild1."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbfree.$rowend."<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtchild0."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbprojectfree.$rowend."<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtchild2."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend.$rowend;
    echo $row."<fieldset class='fieldset3'><legend>".$lbmainspecial."</legend><div class='col-sm-2 col-md-offset-2 trspad'>".$lbcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput'>".$txtspecial1."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbfree.$rowend."<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtspecial0."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend.$rowend;
    echo $row."<fieldset class='fieldset4'><legend>".$lbmainforeigner."</legend><div class='col-sm-2 col-md-offset-2 trspad'>".$lbadultcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput'>".$txtforeigneradult."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbchildcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtforeignerchild."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend.$rowend;
	echo $row."<fieldset class='fieldset5'><legend>".$lbspecialpj."</legend><div class='col-sm-2 col-md-offset-2 trspad'>".$lbcharge.$rowend."<div class='col-sm-8 form-group has-feedback trsinput'>".$txtchargeproject."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."<div class='col-sm-2 col-md-offset-2 trspad trsmar'>".$lbfree.$rowend."<div class='col-sm-8 trsinput form-group has-feedback trsmar'>".$txtfreeproject."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend.$rowend;
    if($user_zoo == 12){
        echo "";
    echo $row."<fieldset class='fieldset6'><legend>".$lbmainnsf."</legend>
	<div class='col-sm-12'><div class='col-sm-2 trsrowpad'><b>ผู้ใหญ่</b></div><div class='col-sm-10 trsblank'></div></div>
	<div class='col-sm-2 col-md-offset-2 trsboxpad'>".$lbcharge.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput'>".$txtsafariadult1."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."
	<div class='col-sm-2 col-md-offset-2 trsboxpad2'>".$lbfree.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtsafariadult0."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."
	<div class='col-sm-12 trsborder'><div class='col-sm-2 trsrowpad'><b>เด็ก</b></div><div class='col-sm-10 trsblank'></div></div>
	<div class='col-sm-2 col-md-offset-2 trsboxpad'>".$lbcharge.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput'>".$txtsafarichild1."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."
	<div class='col-sm-2 col-md-offset-2 trsboxpad2'>".$lbfree.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtsafarichild0."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."
	<div class='col-sm-12 trsborder'><div class='col-sm-2 trsrowpad'><b>ชาวต่างชาติ</b></div><div class='col-sm-10 trsblank'></div></div>
	<div class='col-sm-2 col-md-offset-2 trsboxpad'>".$lbadultcharge.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput'>".$txtsafariforeigneradult."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend."
	<div class='col-sm-2 col-md-offset-2 trsboxpad2'>".$lbchildcharge.$rowend."
	<div class='col-sm-8 form-group has-feedback trsinput trsmar'>".$txtsafariforeignerchild."<span class='glyphicon form-control-feedback addipok' aria-hidden='true'></span>".$rowend.$rowend;
    }
    echo "<input type='hidden' id='zoo_id'name='touristreport_zoo_zoo_id' value=".$user_zoo.">";
    echo "<input type='hidden' name='log_user' value='$log_user'/>";  
    echo "<input type='hidden' name='touristreport_id' value='$_GET[id]'/>";
    echo $row."<div class='col-sm-8 col-lg-offset-4 trsinput trsbotton'>".$button.$rowend.$rowend;
	echo $rowend;
	?>
<script>
   $.fn.datepicker.dates['th'] = {
                                days: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์", "อาทิตย์"],
                                daysShort: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                daysMin: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                months: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                monthsShort: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                today: "วันนี้"
};
   $(".date-picker").datepicker({
    format:'yyyy-mm-dd',
    autoclose:true,
    onselect: function(date) {
            alert(date)
        },
   });
    //ตรวจค่าตัวเลข       
    function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
	//ตรวจเช็ควันซํ้า
    	$(document).ready(function(){  
            $('#form_reg').on("submit",function(){    
                var check = check_day();    
                check.success(function(data){    
                    if (data != 1){    
                        $('#form_reg')[0].submit();    
                    }else{
                        $('.message').html('วันที่เลือกได้มีการบันทึกข้อมูลแล้ว');    
                        }         
        });    
        return false;      
    });    
            $('#datepicker').focusout(function(){    
                var check = check_day();    
                check.success(function(data){    
                    if(data == 1){    
                        $('.message').html('');    
                        }  
                    });    
                });  
            });  

            function check_day(){  
                return $.ajax({  
                    type: 'POST',  
                    data: {datepicker : $('#datepicker').val(), zoo : $('#zoo_id').val()},  
                    url: 'trs_checkday.php'  
                });  
            }
	
	
</script>
	<?php
    echo $form->close();
	echo $cssend;
	echo $rowend;
	endif;
	?>