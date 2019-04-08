<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
  $form = new form();
  $lboldpass = new label("รหัสผ่านเดิม");
  $lbpass = new label("รหัสผ่าน");
  $lbpasscon = new label("ยืนยันรหัสผ่าน");
  $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
  $txtoldpass = new pass('user_pass','form-control','','user_pass');
  $txtpass = new pass('user_pass','form-control','','user_pass');
  $txtpass_confirm = new pass('user_pass_confirm','form-control','','user_pass_confirm');
  echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","user_change_password.php","");
  ?>
                    <div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
				<h4>เปลี่ยนรหัสผ่าน</h4>
			</div>
                    </div>

<?php
    echo $lboldpass;
    echo $txtoldpass;
    echo $lbpass;
    echo $txtpass;
    echo $lbpasscon;
    echo $txtpass_confirm;
    echo $submit;
    echo $form->close();
    endif; ?>