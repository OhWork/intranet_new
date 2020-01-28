<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $form = new form();
  $lboldpass = new label("รหัสผ่านเดิม");
  $lbpass = new label("รหัสผ่าน");
  $lbpasscon = new label("ยืนยันรหัสผ่าน");
  $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
  $txtoldpass = new pass('user_pass_old','form-control','','user_passold');
  $txtpass = new pass('user_pass','form-control','','user_pass');
  $txtpass_confirm = new pass('admin_edit_password','form-control','','user_pass_confirm');
  echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_insert_changepass.php","");
  ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mt-3 pt-2 csborder">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
			<div class="row">
				<h4>เปลี่ยนรหัสผ่าน</h4>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbpass;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showrequired">
			<?php echo $txtpass;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbpasscon;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showrequired">
			<?php echo $txtpass_confirm;?>
		</div>
		<div id="msg2" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pb-3">
			<div class="row">
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
                                <input type='hidden' name='user_id' value='<?php echo $id;?>'/>
					<?php echo $submit;?>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
			</div>
		</div>
<?php    echo $form->close();
    endif; ?>
    <script>
	    $("#form_reg").validate({
		rules: {
			user_pass: "required",
			user_pass_confirm: "required",

		},
		messages: {
			user_pass:'*กรุณากรอกรหัสผ่านใหม่ที่ต้องการเปลี่ยน*',
			user_pass_confirm:'*กรุณายืนยันรหัสผ่านเดิม*',
		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".showrequired" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".showrequired" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});

	$('#user_pass_confirm').focusout(function(){
	    var passcon =  $('#user_pass_confirm').val();
	    var passconmd5 = $.md5($.md5($.md5(passcon)));
	    var pass = $('#user_pass').val();
	    var passmd5 =$.md5($.md5($.md5(pass)));
	    if(passmd5 == passconmd5){
		   $("#msg2").html('<span class="text-success">รหัสผ่านตรงกัน</span>');
 		   $("#btnSubmit").attr("disabled", false);
	    }
	    else{
		   $("#msg2").html('<span class="text-danger">รหัสผ่านไม่ตรงกัน</span>');
 		   $("#btnSubmit").attr("disabled", true);
	    }
    });
    </script>
