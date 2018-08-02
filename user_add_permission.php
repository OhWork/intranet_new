<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
  $form = new form();
  $lbuser = new label("ชื่อผู้ใช้ (ID)");
  $lbpass = new label("รหัสผ่าน");
  $lbpasscon = new label("ยืนยันรหัสผ่าน");
  $lbname = new label("ชื่อ");
  $lblast = new label("นามสกุล");
  $lbnameen = new label("ชื่อ(อังกฤษ)");
  $lblasten = new label("นามสกุล(อังกฤษ)");
  $lbtel = new label("เบอร์โทรศัพท์");
  $lbidcard = new label("รหัสบัตรประชาชน");
  $lbuserenable = new label("สถานะผู้ใช้งาน");
  $lbcomputerservice = new label("ระบบจัดการบริการด้านคอมพิวเตอร์");
  $lbnews = new label("ระบบจัดการข่าวสาร");
  $lbzpodrive = new label("ระบบการจัดการเอกสาร");
  $lbconfer = new label("ระบบจองห้องประชุม");
  $lbhrs = new label("ระบบขอหนังสือรับรอง");
  $lbradiotouristreport = new label("ระบบจัดการคนเข้าชมสวนสัตว์");
  $lbadmin = new label("ระบบจัดการผู้ใช้");
  $txtuser = new textfield('user_user','user_user','form-control css-require','');
  $txtpass = new pass('user_pass','form-control css-require','','user_pass');
  $txtpass_confirm = new pass('user_pass_confirm','form-control css-require','','user_pass_confirm');
  $txtname = new textfield('user_name','','form-control css-require','');
  $txtnameen = new textfield('user_nameeng','','form-control','');
  $txtlast = new textfield('user_last','','form-control css-require','');
  $txtlasten = new textfield('user_lasteng','','form-control','');
  $txttel = new textfield('user_tel','data2','form-control','');
  $txttel->functions = "onkeyup='autoTab2(this,2)'";
  $txtidcard = new textfield('user_idcard','data2','form-control','');
  $txtidcard->functions = "onkeyup='autoTab2(this,1)'";

  $radiouserenable = new radioGroup();
  $radiouserenable->name = 'user_enable';
  if(empty($id)){
    	$radiouserenable->add('ใช้งานได้',1,'');
    	$radiouserenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
  $radioadmin = new radioGroup();
  $radioadmin->name = 'systemallow_admin';
  if(empty($id)){
    	$radioadmin->add('อนุญาต',1,'');
    	$radioadmin->add('ไม่อนุญาต',0,'checked');
    	}
  $radiodrive = new radioGroup();
  $radiodrive->name = 'systemallow_drive';
  if(empty($id)){
         $radiodrive->add('อนุญาต',1,'');
         $radiodrive->add('ไม่อนุญาต',0,'checked');
  }
  $radionews = new radioGroup();
  $radionews->name = 'systemallow_news';
  if(empty($id)){
         $radionews->add('อนุญาต',1,'');
         $radionews->add('ไม่อนุญาต',0,'checked');
  }
  $radioservice = new radioGroup();
  $radioservice->name = 'systemallow_service';
  if(empty($id)){
       $radioservice->add('อนุญาต',1,'');
       $radioservice->add('ไม่อนุญาต',0,'checked');
  }
  $radioconfer = new radioGroup();
  $radioconfer->name = 'systemallow_confer';
  if(empty($id)){
        $radioconfer->add('อนุญาต',1,'');
        $radioconfer->add('ไม่อนุญาต',0,'checked');
  }
  $radiotouristreport = new radioGroup();
  $radiotouristreport->name = 'systemallow_touristreport';
  if(empty($id)){
        $radiotouristreport->add('อนุญาต',1,'');
        $radiotouristreport->add('ไม่อนุญาต',0,'checked');
  }
  $radiohrs = new radioGroup();
  $radiohrs->name = 'systemallow_hrs';
  if(empty($id)){
        $radiohrs->add('อนุญาต',1,'');
        $radiohrs->add('ไม่อนุญาต',0,'checked');
  }
   $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('user','user_id',$id)->executeRow();
	$sa = $db->findByPK('systemallow','systemallow_id',$id)->executeRow();
	$txtpass->value = $r['user_pass'];
	$txtname->value = $r['user_name'];
	$txtlast->value = $r['user_last'];
	$txttel->value = $r['user_tel'];
	$txtidcard->value = $r['user_idcard'];
	$zoo = $r['subzoo_zoo_zoo_id'];
    $subzoo = $r['subzoo_subzoo_id'];

    if($r["user_enable"] == 1){
    	$radiouserenable->add('ใช้งานได้',1,'checked');
    	$radiouserenable->add('ไม่สามารถใช้งานได้',0,'');
    	}else if($sa['systemallow_admin'] == 0){
        $radiouserenable->add('ใช้งานได้',1,'');
        $radiouserenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
	if($sa["systemallow_admin"] == 1){
    	$radioadmin->add('อนุญาต',1,'checked');
    	$radioadmin->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_admin'] == 0){
        $radioadmin->add('อนุญาต',1,'');
        $radioadmin->add('ไม่อนุญาต',0,'checked');
    	}
	if($sa["systemallow_service"] == 1){
    	$radioservice->add('อนุญาต',1,'checked');
    	$radioservice->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_service'] == 0){
        $radioservice->add('อนุญาต',1,'');
        $radioservice->add('ไม่อนุญาต',0,'checked');
        }
    if($sa["systemallow_drive"] == 1){
    	$radiodrive->add('อนุญาต',1,'checked');
    	$radiodrive->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_drive'] == 0){
        $radiodrive->add('อนุญาต',1,'');
        $radiodrive->add('ไม่อนุญาต',0,'checked');
        }
    if($sa["systemallow_news"] == 1){
    	$radionews->add('อนุญาต',1,'checked');
    	$radionews->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_news'] == 0){
        $radionews->add('อนุญาต',1,'');
        $radionews->add('ไม่อนุญาต',0,'checked');
        }
    if($sa["systemallow_confer"] == 1){
    	$radioconfer->add('อนุญาต',1,'checked');
    	$radioconfer->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_confer'] == 0){
        $radioconfer->add('อนุญาต',1,'');
        $radioconfer->add('ไม่อนุญาต',0,'checked');
        }
    if($sa["systemallow_hrs"] == 1){
    	$radiohrs->add('อนุญาต',1,'checked');
    	$radiohrs->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_hrs'] == 0){
        $radiohrs->add('อนุญาต',1,'');
        $radiohrs->add('ไม่อนุญาต',0,'checked');
        }
if($sa["systemallow_touristreport"] == 1){
    	$radiotouristreport->add('อนุญาต',1,'checked');
    	$radiotouristreport->add('ไม่อนุญาต',0,'');
    	}else if($sa['systemallow_touristreport'] == 0){
        $radiotouristreport->add('อนุญาต',1,'');
        $radiotouristreport->add('ไม่อนุญาต',0,'checked');
        }
}

?>
<script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
// 			frmMain.ddlAmphur.length = 0  (ไม่ใช้)

			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?php
			$intRows = 0;
			$rs = $db->findPK1ASC('subzoo','subzoo_enable',1,'subzoo_no')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["zoo_zoo_id"];?>;
				strValue = "<?=$objResult["subzoo_id"];?>";
				strItem = "<?=$objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
				}
			<?php
			}
			?>
		}
		function setDefault()
		{
			<?php
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$r2 = $db->findByPK('user','user_id',$id)->executeRow();
				$strZoo = $r2['subzoo_zoo_zoo_id'];
				$strSubzoo = $r2['subzoo_subzoo_id'];
			?>

				<?php
				/*** Default Zoo  ***/
				if($strZoo != "")
				{
				?>
					var objZoo=document.frmMain.ddlZoo;
					for (x=0;x<objZoo.length;x++)
					{
						if (objZoo.options[x].value=="<?=$strZoo?>")
						{
							objZoo.options[x].selected = true;
							break;
						}
					}

					ListSubzoo(<?=$strZoo;?>)
				<?php
				}
				?>

				<?php
				/*** Default Subzoo  ***/
				if($strSubzoo != "")
				{
				?>
					var objSubZoo=document.frmMain.ddlSubzoo;
					for (x=0;x<objSubZoo.length;x++)
					{
						if (objSubZoo.options[x].value=="<?=$strSubzoo?>")
						{
							objSubZoo.options[x].selected = true;
							break;
						}
					}
				<?php
				}
				?>
}
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
<?php echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_insert_permission.php",""); ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2"  style="border-bottom:solid 1px #E0E0E0;">
				<h4>สิทธิ์การเข้าถึงระบบ</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="color:#0288D1;font-size: 1rem;">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
						<?php echo $lbuser; ?>
					</div>
					<div class="form-group has-feedback col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
						<?php echo $r['user_user'];?>
					</div>
					<div id="msg"></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbnews; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radionews; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbzpodrive; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radiodrive; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbconfer; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radioconfer; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbcomputerservice; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radioservice; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbradiotouristreport; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radiotouristreport; ?></div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-bottom:solid 1px #E0E0E0;">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbhrs; ?></div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $radiohrs; ?></div>
				</div>
			</div>    
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top: 8px;"><?php echo $lbadmin; ?></div>
					<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6' style="padding-top: 8px;"><?php echo $radioadmin; ?></div>
				</div>
			</div>	
			<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
			<input type='hidden' name='user_id' value='<?php echo $_GET['id'];?>'/>
			<input type='hidden' name='systemallow_id' value='<?php echo $_GET['id'];?>'/>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom: 16px;">
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
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
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
		},
		messages: {
			user_user:'*กรุณากรอกชื่อผู้ใช้ระหว่าง 8-16 ตัวอักษร*',
		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".showrequired" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".showrequired" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});


    });
	$('#user_user').keyup(function(){
		console.log($('#user_user').val().length);
		if($('#user_user').val().length >= 8 &&  $('#user_user').val().length <= 16){
		$.ajax({
	            url: "user_check_user.php",
	            data: {user_user : $('#user_user').val()},
	            type: "POST",
	            success: function(data) {
// 		            console.log($('#user_user').val());
		           	$('#msg').show();
	                if((data > '0')) {
//    	                    $("#btnSubmit").attr("disabled", true);
	                     $("#msg").html('<span class="text-danger">ชื่อผู้ใช้ไม่สามารถใช้งานได้</span>');
	                } else {
		                $("#msg").html('<span class="text-success">ชื่อผู้ใช้นี้สามารถใช้ได้</span>');
//  	                    $("#btnSubmit").attr("disabled", false);
	                }
	            },
	           error: function(XMLHttpRequest, textStatus, errorThrown) {
			   alert("some error");
	  		   }
	     });
	    }
    });


/*
    $('#user_user').focusout(function(){
    var max_length = 16;
	     var this_length = max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
	     var min_length = 8;
	     var length = $(this).val().length;
		    if(this_length <= 0){
                $("#msg").html('<span class="text-danger">กรุณากรอกชื่อผู้ใช้ให้น้อยกว่า 16 ตัวอักษร</span>');
                  $("#btnSubmit").attr("disabled", true);
            }
            else if(length < min_length){
				$("#msg").html('<span class="text-danger">กรุณากรอกชื่อผู้ใช้ให้มากกว่า 8 ตัวอักษร</span>');
  				$("#btnSubmit").attr("disabled", true);
            }
    });
*/
    $('#user_pass_confirm').focusout(function(){
	    var passcon =  $('#user_pass_confirm').val();
	    var pass = $('#user_pass').val();
	    if(pass == passcon){
		   $("#msg2").html('<span class="text-success">รหัสผ่านตรงกัน</span>');
 		   $("#btnSubmit").attr("disabled", false);
	    }
	    else{
		   $("#msg2").html('<span class="text-danger">รหัสผ่านไม่ตรงกัน</span>');
 		   $("#btnSubmit").attr("disabled", true);
	    }
    });

</script>
