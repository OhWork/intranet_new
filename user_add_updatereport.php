<?php
  $form = new form();
  $lbversion = new label("เวอชั่น :");
  $lbupdatedetail = new label("รายละเอียดการอัพเดท :");
  $lbupdatedate = new label("วันที่ :");
  $txtupdateversion = new textfield('updatereport_version','','form-control css-require','');
  $txtupdatedetail = new textarea('updatereport_detail','ckeditor col-md-12','','','','','');
    $txtupdatedetail->rows = 5;
  $txtday = new datetimepicker('updatereport_date','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','');
  $txtday->value = date("Y-m-d");
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
  echo $form->open("form_reg","form","","user_insert_updatereport.php","");
?>
<div class='col-md-12' style='margin-top: 16px;' id="maincontent">
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<div class='row'>
				<div class='col-md-12' style='padding-top: 8px;'>
					<h4>เพิ่มรายการอัพเดทของระบบ</h4>
				</div>
				<div class='col-md-12' style='margin-bottom: 8px;'>
					<div class='row'>
						<div class='col-md-3' style='padding-top: 8px;'><?php echo $lbversion; ?></div>
						<div class='col-md-9'><?php echo $txtupdateversion; ?></div>
					</div>
				</div>
				<div class='col-md-12' style='margin-bottom: 8px;'>
					<div class='row'>
						<div class='col-md-3' style='padding-top: 8px;'><?php echo $lbupdatedetail; ?></div>
						<div class='col-md-9'><?php echo $txtupdatedetail; ?></div>
					</div>
				</div>
				<div class='col-md-12' style='margin-bottom: 8px;'>
					<div class='row'>
						<div class='col-md-3' style='padding-top: 8px;'><?php echo $lbupdatedate; ?></div>
						<div class='col-md-9'>
							<div class='date-form dayinbox form-horizontal control-group controls'>
                                    <div class='input-group'><?php echo $txtday; ?></div>
                            </div>
                        </div>
                    </div>
				</div>
				<div class='col-md-12'>
					<div class='row'>
						<div class='col-md-4'></div>
						<div class='col-md-4'><?php echo $submit; ?></div>
						<div class='col-md-4'></div>
                    </div>
				</div>
			</div>
		</div>
		<div class='col-md-3'></div>
	</div>
</div>
<?php
  echo $form->close();
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
  $( function() {
   	$('.date').datetimepicker({
		 format: 'YYYY-MM-DD',
 		 minDate: '2017-10-1',
	     useCurrent: false,
	     ignoreReadonly: true,
         allowInputToggle: true,
	     locale:moment.locale('th'),
//       pickTime: false
        });
        $("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
		});
      } );
</script>
