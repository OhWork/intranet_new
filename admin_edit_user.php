
<?php
    
if (!empty($_SESSION['user_name'])):
  $form = new form();
  $lbpass = new label("แก้ไขรหัสผ่าน :");
  $lbname = new label("เปลียนชื่อ :");
  $lblast = new label("เปลี่ยนนามสกุล :");
  $txtpass = new textfield('user_pass','','form-control css-require','');
  $txtname = new textfield('user_name','','form-control css-require','');
  $txtlast = new textfield('user_last','','form-control css-require','');
  $submit = new buttonok("ยืนยัน","","btn btn-success admineditok","");
  $wrap = '<div class="wrapper">';
  $end = '</div>';
  if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('user','user_id',$id)->executeRow();
	
	$txtpass->value = $r['user_pass'];
	$txtname->value = $r['user_name'];
	$txtlast->value = $r['user_last'];
	}  
  echo $wrap;
  echo $form->open("form_reg","","form","user_insert_user.php","","");
  echo "<div class='row'>
  		<div class='col-md-12 adminedit sdupadding'>
  		<div class='col-md-12 sdupadding'>
  			<h4>เปลี่ยนแปลง และ แก้ไขข้อมูลส่วนตัว</h4>
		</div>";
		  echo("<div class='col-md-12 admineditpad'>
		  		<div class='admineditpass col-md-2'>".$lbpass."</div>
				<div class='form-group has-feedback admineditpass2 col-md-10'>".$txtpass.
					"<span class='glyphicon form-control-feedback' aria-hidden='true'></span>
				 	 <span id='pass_status'></span></div></div>");
		  echo("<div class='col-md-12 admineditpad'>
		  		<div class='admineditname col-md-2'>".$lbname."</div>
				<div class='form-group has-feedback admineditname2 col-md-10'>".$txtname.
					"<span class='glyphicon form-control-feedback' aria-hidden='true'></span>
					 <span id='pass_status'></span></div></div>");
  		  echo("<div class='col-md-12 admineditpad'>
		  		<div class='admineditlast col-md-2'>".$lblast."</div>
				<div class='form-group has-feedback admineditlast2 col-md-10'>".$txtlast.
					"<span class='glyphicon form-control-feedback' aria-hidden='true'></span>
					 <span id='pass_status'></span></div></div>");
 echo "<input type='hidden' name='user_id' value='$id'>";
 echo "<input type='hidden' name='user_id' value='".$r['subzoo_subzoo_id']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['subzoo_zoo_zoo_id']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_service_allow']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_news_allow']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_confer_allow']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_admin_allow']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_touristreport_allow']."'>";
 echo "<input type='hidden' name='user_id' value='".$r['user_drive_allow']."'>";
  echo "<input type='hidden' name='user_per' value='no'>";
 
  echo("<div class='col-md-12 adminbutton'>".$submit."</div>
  		</div>
		</div>");
  echo $end;
  echo $form->close();
  endif; 
?>