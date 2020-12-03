<?php if (!empty($_SESSION['user_name'])):
    include_once 'form/change2thaidate.php';
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $rs_zoo = $db->findbyPK('zoo','zoo_id',$user_zoo)->execute();
    @$zoo = mysqli_fetch_assoc($rs_zoo,MYSQLI_ASSOC);
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbanimalname = new label('ชื่อสัตว์');
    $lbborn = new label('เกิด');
    $lbdie = new label('เสียชีวิต');
    $txtday = new datetimepicker('animalreport_date','datepicker','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','','#datepicker','','');

    $year = date("Y");
    $md = date("m-d");
    $txtday->value = date("Y-m-d");

    $txtanimalname = new textfield('animalreport_animal_id','','form-control css-require','','');
    $txtanimalname->value = 0;
    $txtanimalname->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtborn = new textfield('animalreport_born','','form-control css-require','','');
    $txtborn->value = 0;
    $txtborn->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    $txtdie = new textfield('animalreport_die','','form-control css-require','','');
    $txtdie->value = 0;
    $txtdie->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

    
    $button = new buttonok("ส่งข้อมูลผู้เข้าชมของสวนสัตว์","btnSubmit","btn btn-success btn-lg btn-block","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('touristreport','touristreport_id',$id)->executeRow();
	$txtday->value = $r['touristreport_date'];
	$txtadult1->value = $r['touristreport_adult_ch'];
	$txtadult0->value = $r['touristreport_adult_free'];
	$txtadult2->value = $r['touristreport_adult_pm'];
	$txtchild1->value = $r['touristreport_child_ch'];
	$txtchild0->value = $r['touristreport_child_free'];
	$txtchild2->value = $r['touristreport_child_pj'];
	$txtchild3->value = $r['touristreport_child_pm'];
	$txtspecial1->value = $r['touristreport_special_ch'];
	$txtspecial0->value = $r['touristreport_special_free'];
	$txtforeigneradult1->value = $r['touristreport_foreigner_adult_ch'];
	$txtforeigneradult0->value = $r['touristreport_foreigner_adult_free'];
	$txtforeigneradult2->value = $r['touristreport_foreigner_adult_pm'];
	$txtforeignerchild1->value = $r['touristreport_foreigner_child_ch'];
	$txtforeignerchild0->value = $r['touristreport_foreigner_child_free'];
	$txtforeignerchild2->value = $r['touristreport_foreigner_child_pm'];
	$txtchargeproject->value = $r['touristreport_project_ch'];
	$txtsafariadult1->value = $r['touristreport_safari_adult_ch'];
	$txtsafarichild1->value = $r['touristreport_safari_child_ch'];
	$txtbus->value = $r['touristreport_vehicle_bus'];
	$txtcar->value = $r['touristreport_vehicle_car'];
	$txtmtc->value = $r['touristreport_vehicle_mtc'];
	}
	?>
	<div class='row' id="maincontent">
        <div class='col-md-12' style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-2" style="float:left;"></div>
                <div class="col-md-8" style="float:left;">
                    <div class="col-md-12" style="padding-top: 15px;">
                        <h3>เพิ่มข้อมูลสัตว์<?php $zoo['zoo_name']; ?></h3>
                    </div>
            <hr>
    <?php

    echo $form->open("form_reg","frmMain","","ar_insert_animalreport.php","");
    echo $lbanimalname.$txtanimalname;
    echo $lbborn.$txtborn;
    echo $lbdie.$txtdie;
echo $form->close();
?>
<script type="text/javascript">
$(document).ready(function(){

	var rows = 1;
	$("#createRows").click(function(){
						var tr = "<tr>";
						tr = tr + "<td width='50%'><input type='text' name='txtCustomerID"+rows+"' id='txtCustomerID"+rows+"'></td>";
						tr = tr + "<td width='25%'><input type='text' name='txtName"+rows+"' id='txtName"+rows+"'></td>";
						tr = tr + "<td width='25%'><input type='text' name='txtEmail"+rows+"' id='txtEmail"+rows+"'></td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
					
						$('#hdnCount').val(rows);
						rows = rows + 1;
		});

		$("#deleteRows").click(function(){
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				rows = 1;
				$('#hdnCount').val(rows);
				$('#myTable > tbody:last').empty(); // remove all
		});

	});
</script>
<meta charset=utf-8 />
</head>
<body>
 <center>
 <form action="save.php" id="frmMain" name="frmMain" method="post">
<h1>jQuery Dynamic table input</h1>

<table width="100%" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    <td width="50%"> <div align="center">ชื่อสัตว์ </div></td>
    <td width="25%"> <div align="center">เกิด </div></td>
    <td width="25%"> <div align="center">ตาย </div></td>
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br />
<input class="btn btn-success" type="button" id="createRows" value="Add">
<input class="btn btn-danger" type="button" id="deleteRows" value="Del">
<input class="btn btn-warning" type="button" id="clearRows" value="Clear">
 <center>
 <br>
 <input type="hidden" id="hdnCount" name="hdnCount">
<input type="submit" value="Submit">
 </form>

<script >
   $(function () {
        $('#datepicker').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        });
    //ตรวจค่าตัวเลข
    function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
	$(document).ready(function() {
    var datefix = $('#datepicker').val();
    if(datefix){

    }else{
        $("#msg").html();
    $("#btnSubmit").attr("disabled", true);
    }
    console.log($('#datepicker').val());
	$(".date").on("change.datetimepicker",function(e) {
    var datepick = $(this).val();
        $("#msg").html("checking...");
        $.ajax({
            url: "trs_checkday.php",
            data: {datepicker : $('#datepicker').val(), zoo : $('#zoo_id').val()},
            type: "POST",
            success: function(data) {
                if(data > '0') {
                    $("#msg").html('<span class="text-danger">วันที่นี้ถูกบันทึกแล้ว</span>');
                    $("#btnSubmit").attr("disabled", true);
//                     console.log("ครั้งที่มีวันอยู่");
//                     console.log(datepick);
                } else {
                    $("#msg").html('<span class="text-success">วันที่นี้สามารถใข้งานได้</span>');
                    $("#btnSubmit").attr("disabled", false);
//                     console.log("ครั้งที่ไม่มีวัน");
//                     console.log(datepick);
                }
            }
        });
    });
    $("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
	});
});

</script>
	<?php
    echo $form->close(); ?>
            </div>
        </div>
	</div>
	<?php endif;
	?>
