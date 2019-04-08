<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $form = new form();
  $lboldpass = new label("รหัสผ่านเดิม");
  $lbpass = new label("รหัสผ่าน");
  $lbpasscon = new label("ยืนยันรหัสผ่าน");
  $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
  $txtoldpass = new pass('user_pass','form-control','','user_passold');
  $txtpass = new pass('user_pass','form-control','','user_pass');
  $txtpass_confirm = new pass('user_pass_confirm','form-control','','user_pass_confirm');
  echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_change_password.php","");
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
			<?php echo $lboldpass;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<?php echo $txtoldpass;?>
		</div>
		<div id="msg" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbpass;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<?php echo $txtpass;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbpasscon;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<?php echo $txtpass_confirm;?>
		</div>
		<div id="msg2" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pb-3">
			<div class="row">
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
                                <input type='hidden' name='user_id' value='<?php echo $_GET['id'];?>'/>
					<?php echo $submit;?>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
			</div>
		</div>
<?php    echo $form->close();
    endif; ?>
    <script>
    	$("#user_passold").blur(function(){
	    $.ajax({
            url: "user_checkpass.php",
            data: {passold : $('#user_passold').val() , userid :<?php echo $_SESSION['user_id'];?>},
            type: "POST",
            success: function(data) {
                if(data == "รหัสผ่านเดิมไม่ตรงกับที่ท่านเคยสมัครไว้"){
				$("#msg").html('<span class="text-danger">รหัสผ่านเดิมไม่ตรงกับที่ท่านเคยสมัครไว้</span>');
                }else{
	                $("#msg").html('<span class="text-success">รหัสผ่านเดิมตรงกับที่ท่านเคยสมัครไว้</span>');
                }
            }
        });
	});
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
