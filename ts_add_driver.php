<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
  $form = new form();
  $lbname = new label("ชื่อ - นามสกุล");
  $lbtel = new label("เบอร์โทรศัพท์");
  $lbline = new label("LINEID");
  $lbdriverenable = new label("สถานะคนขับรถ");
  $txtname = new textfield('driver_name','','form-control','');
    $txtline = new textfield('driver_lineid','','form-control','');
  $txttel = new textfield('driver_tel','data2','form-control','');
  $txttel->functions = "onkeyup='autoTab2(this,2)'";
  $radiodriverenable = new radioGroup();
  $radiodriverenable->name = 'driver_status';
  if(empty($id)){
    	$radiodriverenable->add('ใช้งานได้',1,'','');
    	$radiodriverenable->add('ไม่สามารถใช้งานได้',0,'checked','');
    	}
   $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	//$r = $db->findByPK('user','user_id',$id)->executeRow();
                //$r = $db->findByPK33('user','subzoo','zoo','subzoo_subzoo_id','subzoo_id','subzoo_zoo_zoo_id','zoo_id','user_id',$id)->executeRow();
	$txtpass->value = $r['user_pass'];
	$txtname->value = $r['user_name'];
                $txtnameen->value = $r['user_nameeng'];
	$txtlast->value = $r['user_last'];
                $txtlasten->value = $r['user_lasteng'];
	$txttel->value = $r['user_tel'];
	$txtidcard->value = $r['user_idcard'];
	$zoo = $r['subzoo_zoo_zoo_id'];
                $subzoo = $r['subzoo_subzoo_id'];
    if($r["user_enable"] == 1){
    	$radiodriverenable->add(' ใช้งานได้',1,'checked','');
    	$radiodriverenable->add(' ไม่สามารถใช้งานได้',0,'','');
    	}else if($sa['systemallow_admin'] == 0){
        $radiodriverenable->add('ใช้งานได้',1,'','');
        $radiodriverenable->add('ไม่สามารถใช้งานได้',0,'checked','');
    	}
    }

?>
<script>
function autoTab2(obj,typeCheck){
    /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
    หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
    4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
    รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
    หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
    ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
    */
        if(typeCheck==1){
            var pattern=new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }else{
            var pattern=new String("___-___-____"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }
        var returnText=new String("");
        var obj_l=obj.value.length;
        var obj_l2=obj_l-1;
        for(i=0;i<pattern.length;i++){
            if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                returnText+=obj.value+pattern_ex;
                obj.value=returnText;
            }
        }
        if(obj_l>=pattern.length){
            obj.value=obj.value.substr(0,pattern.length);
        }
}  </script>
<?php echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","ts_insert_driver.php",""); ?>
<div class="row">
	<div class="col-xl-3 col-lg-2 col-md-1"></div>
	<div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 usubd">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
				<h4>ข้อมูลคนขับรถยนตร์</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
				<?php echo $lbname; ?>
			</div>
			<div class="form-group has-feedback col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showrequired">
				<?php echo $txtname; ?>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<?php echo $lbtel; ?>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<?php echo $txttel; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<?php echo $lbline; ?>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<?php echo $txtline; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 15px;">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" style="padding-top: 14px;"><?php echo $lbdriverenable; ?></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-top: 14px;"><?php echo $radiodriverenable; ?></div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5"></div>
				</div>
			</div>
			<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
			<input type='hidden' name='user_id' value='<?php echo $_GET['id'];?>'/>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:16px;">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<?php echo $submit; ?>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1"></div>
</div>
<?php
    echo $form->close();
    endif; ?>
<script>
$(document).ready(function() {
    $("#form_reg").validate({
		rules: {
			user_user: {
				required: true,
				rangelength: [8, 16]
			},
			user_name: "required",
			user_last: "required",

		},
		messages: {
			user_user:'*กรุณากรอกชื่อผู้ใช้ระหว่าง 8-16 ตัวอักษร*',
			user_name:'*กรุณากรอกชื่อ*',
			user_last:'*กรุณากรอกนามสกุล*',
		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".showrequired" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".showrequired" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});


    });

</script>
