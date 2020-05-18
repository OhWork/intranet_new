<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
  $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
   $datetime = date("Y-m-d H:i");
    $form = new form();
    $lbvdoname = new label('ชื่อเรื่อง');
    $lbly = new label('Link youtube');
    $lbtypeDesign = new label('เลือกชนิด');
    $lbdatestart = new label('วันเริ่มแสดง');
    $txtvdoname = new textfield('ipzpo_location','','form-control','','');
    $txtly = new textfield('vdo_link','','form-control','','');
    $txtdatestart = new datetimepicker('touristreport_date','datepicker','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','','#datepicker','','');
    $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
     echo $form->open("form_reg","frmMain","","yt_insert_vdo.php","");
    ?>
    <div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<h4><?php echo $lbvdoname; ?></h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $txtvdoname; ?>
		</div>
    </div>
    <div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<h4><?php echo $lbly; ?></h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $txtly; ?>
		</div>
    </div>
    <div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<h4><?php echo $lbdatestart; ?></h4>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $txtdatestart; ?>
		</div>
    </div>
                                                <input type='hidden' name='user_user_id' value='<?php echo $user_id; ?>'/>
			<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
                                                <input type='hidden' name='vdo_datereg' value='<?php echo $datetime; ?>'/>
			<input type='hidden' name='user_id' value='<?php echo $_GET['id'];?>'/>
<?php
    echo $submit;
    
    echo $form->close();
    endif;
?>
                        <script>
                            $(function () {
        $('#datepicker').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        });
                            </script>