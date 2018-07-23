<?php
    if (!empty($_SESSION['user_name'])):
    $zoo = $_SESSION['subzoo_zoo_zoo_id'];
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $lbzoo = new label('สำนัก/สวน');
    $lbsubzoo = new label('ฝ่าย');
    $lbname = new label('ชื่อ - สกุล');
    $lbip = new label('หมายเลขไอพี');
    $lbwork = new label('งาน');
    $lbcall = new label('โทรศัพท์');
    $lbcompletedetail = new label('รายละเอียดการซ่อม');
    $lbnocompletedetail = new label('เนื่องจาก');
    $lbdevision = new label('สำนัก/สวน');
    $lbdetail = new label('รายละเอียดเพิ่มเติม');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $lbtimeend = new label('วันที่และเวลาเสร็จสิ้น');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $lbsubtypetools = new label('ปัญหาเบื้องต้น');
    $lbdetailbegin = new label('รายละเอียดเบื้องต้น');
    $lbadmin = new label('ผู้ดำเนินการ');
    $lborder = new label('วันและเวลารับเรื่อง');
    $lbserialNo = new label('หมายเลขเครื่อง');
    $lbplace = new label('สถานที่ดำเนินการ');
    $lbserialorganize = new label('รหัสครุภัณฑ์');
    $selectadmin = new SelectFromDB();
    $selectadmin->name = 'problem_adminfix';
    $selectadmin->lists = 'โปรดระบุ';
    $selectadmin2 = new SelectFromDB();
    $selectadmin2->name = 'problem_adminfix';
    $selectadmin2->lists = 'โปรดระบุ';

    $txtnotclear = new textfield('problem_notclear','','form-control css-require','','');
    $txttime = new textfield('problem_dateend','datetimepicker','form-control css-require','','');
    $txtorder = new textfield('problem_dateorder','datetimepicker2','form-control css-require','','');
    $txtserialNo = new textfield('problem_serial','','form-control css-require','','');
    $txtplace = new textfield('problem_place','','form-control css-require','','');
    $txtserialorganize = new textfield('problem_serialorganize','','form-control css-require','','');
    $txtcompletedetail = new textarea('problem_detailcomplete','form-control','','');
    $txtcompletedetail->rows = 5;
    $txtnocompletedetail = new textarea('problem_detailwaitcomplete','form-control','','');
    $txtnocompletedetail->rows = 5;
    $button = new buttonok('อัพเดทสถานะการบริการ','','btn btn-success','');
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$r = $db->findByPK55('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_zoo_zoo_id','zoo.zoo_id','problem_id',$id,'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id')->executeRow();
		 $year = date("Y")+543;
          $md = date("m-d");
          $time = date("H:i");
		  $selectadmin->value = $r['problem_adminfix'];
		  $selectadmin2->value = $r['problem_adminfix'];
          $txtnocompletedetail->value = $r['problem_detailwaitcomplete'];
		  $txtcompletedetail->value = $r['problem_detailcomplete'];
          $txtserialorganize->value = $r['problem_serialorganize'];
		  $txtserialNo->value = $r['problem_serial'];
		  $txtplace->value = $r['problem_place'];
		  $txtorder->value = $r['problem_dateorder'];
		  echo $row."<legend></legend>".$rowend;
		  echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbzoo.$rowend."<div class='col-md-3  m-3'>".$r['zoo_name'].$rowend.$rowend;
		  echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbsubzoo.$rowend."<div class='col-md-3  m-3'>".$r['subzoo_name'].$rowend.$rowend;
		   echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbname.$rowend."<div class='col-md-3  m-3'>".$r['problem_name'].$rowend.$rowend;

		if($r['problem_ip']==''){
        echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbip.$rowend."<div class='col-md-3  m-3'>ยังไม่ลงทะเบียน".$rowend.$rowend;
		}else{echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbip.$rowend."<div class='col-md-3  m-3'>".$r['problem_ip'].$rowend.$rowend;}
		echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbtime.$rowend."<div class='col-md-3  m-3'>".$r['problem_date'].$rowend.$rowend;
        echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbtypetools.$rowend."<div class='col-md-3  m-3'>".$r['typetools_name'].$rowend.$rowend;
		echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbsubtypetools.$rowend."<div class='col-md-3  m-3'>".$r['subtypetools_name'].$rowend.$rowend;
		echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbdetailbegin.$rowend."<div class='col-md-3  m-3'>".$r['problem_detail'].$rowend.$rowend;
		}
		 		echo $form->open("form_reg","form","","cs_insert_updateproblem.php","");
		 ?>
		 <div class="col-md-8 m-3"><hr>
		<div class="col-md-12 m-3">
	          <div class="row m-3">
			        <div class="btn-group " data-toggle="buttons">
			            <label class="btn btn-success active">
			              <input type="radio" name="problem_status" value="Y" onchange="swapConfig(this)" id="complete" autocomplete="off"  checked> ดำเนินเสร็จสิ้นแล้ว
			            </label>
			            <label class="btn btn-warning">
			              <input type="radio" name="problem_status" value="S" onchange="swapConfig(this)" id="nocomplete" autocomplete="off"> อยู่ระหว่างการดำเนินการ
			            </label>
			        </div>
            	</div>
            </div>
  <div id="completeSettings">
      <?php
          $txttime->value = $year."-".$md." ".$time;
          echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbcompletedetail.$rowend."<div class='col m-3'>".$txtcompletedetail.$rowend.$rowend;
          echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbserialNo.$rowend."<div class='col m-3'>".$txtserialNo.$rowend.$rowend;
          echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbserialorganize.$rowend."<div class='col m-3'>".$txtserialorganize.$rowend.$rowend;
          echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbtimeend.$rowend."<div class='col m-3'>".$txttime.$rowend.$rowend;
          echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbplace.$rowend."<div class='col m-3'>".$txtplace.$rowend.$rowend;
          		 ?>

      </div>
  <div id="nocompleteSettings" style="display:none">
    <?php
        $txtorder->value = $year."-".$md." ".$time;
        echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbnocompletedetail.$rowend."<div class='col m-3'>".$txtnocompletedetail.$rowend.$rowend;
        echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbserialNo.$rowend."<div class='col m-3'>".$txtserialNo.$rowend.$rowend;
        echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbserialorganize.$rowend."<div class='col m-3'>".$txtserialorganize.$rowend.$rowend;
        echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lborder.$rowend."<div class='col m-3'>".$txtorder.$rowend.$rowend;
        echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbplace.$rowend."<div class='col m-3'>".$txtplace.$rowend.$rowend;

    ?>
  </div>
<?php
    echo $row."<div class='col-md-4 text-center font-weight-bold m-3'>".$lbadmin.$rowend."<div class='col m-3'>".$selectadmin->selectFromTBinDB2('user','systemallow','user_id','user_name','user_last','systemallow_systemallow_id','systemallow_id','subzoo_zoo_zoo_id',$zoo,'user_enable','1','systemallow_service','1',$r['problem_adminfix']).$rowend.$rowend;
    echo "<input type='hidden' name='log_user' value='$log_user'/>";
    echo "<input type='hidden' name='problem_id' value='$_GET[id]'/>";
    echo $row."<div class='col mt-5 ml-5 mr-5'>".$button.$rowend.$rowend;
     echo $form->close();
	endif;
?>
</div>
<script>
function swapConfig(x) {
    var radioName = document.getElementsByName(x.name);
    for(i = 0 ; i < radioName.length; i++){
      document.getElementById(radioName[i].id.concat("Settings")).style.display="none";
    }
    document.getElementById(x.id.concat("Settings")).style.display="initial";

  }
$(function(){

    var thaiYear = function (ct) {
        var leap=3;
        var dayWeek=["พฤ.", "ศ.", "ส.", "อา.","จ.", "อ.", "พ."];
        if(ct){
            var yearL=new Date(ct).getFullYear()-543;
            leap=(((yearL % 4 == 0) && (yearL % 100 != 0)) || (yearL % 400 == 0))?2:3;
            if(leap==2){
                dayWeek=["ศ.", "ส.", "อา.", "จ.","อ.", "พ.", "พฤ."];
            }
        }
        this.setOptions({
            i18n:{ th:{dayOfWeek:dayWeek}},dayOfWeekStart:leap,
        })
    };

    $("#datetimepicker").datetimepicker({
        timepicker:true,
        format:'Y-m-d H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,
        onShow:thaiYear,
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnTimeSelect:true
    });
    $("#datetimepicker2").datetimepicker({
        timepicker:true,
        format:'Y-m-d H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,
        onShow:thaiYear,
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnTimeSelect:true
    });
});

</script>
