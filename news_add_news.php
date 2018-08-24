<?php
    $form = new form();
    $lbheadnews = new label('หัวข้อข่าว');
    $lbdetail = new label('รายละเอียด');
    $lbpic = new label('ภาพปก');
    $lbdatestart = new label('วันเริ่ม');
    $lbdateend = new label('วันสิ้นสุด');
    $selecttypenews = new SelectFromDB();
    $selecttypenews->name = 'typeNews_typeNews_id';
    $selecttypenews->lists = 'โปรดระบุ ชนิดของข่าวสาร';
    $filepic = new inputFile('news_cover','','');
    $txtdatestart = new textfieldcalendarreadonly('newsdatestart','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('newsdateend','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtheadnews = new textfield('news_head','','form-control','','');
    $button = new buttonok("ต่อไป","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$id = $_SESSION['user_id'];
	$r = $db->findByPK('user','user_id',$id)->executeRow();
	$txtname= $r['user_name'];
	$txtlast= $r['user_last'];
    if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $r = $db->findByPK('news','news_id',$id)->executeRow();
    $txtheadnews->value = $r['news_head'];
    $user_id = $r['user_user_id'];
    $r2 = $db->findByPK('user','user_id',$user_id)->executeRow();
    $txtname= $r2['user_name'];
	$txtlast= $r2['user_last'];
    }
    echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","news_insert_news.php","");
?>
<div class="row">
<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6' style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $lbheadnews; ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo$txtheadnews; ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<?php echo $selecttypenews->selectFromTB('typeNews','typeNews_id','typeNews_name',$r['typeNews_typeNews_id']); ?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-right:0px;padding-top:5px;">
					<?php echo $lbdatestart; ?>
				</div>
				<div class='date-form dayinbox col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 form-horizontal control-group controls input-group'>
					<div class='input-group date' id ="datetimepicker1">
						<?php echo $txtdatestart; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-right:0px;padding-top:5px;">
					<?php echo $lbdateend; ?>
				</div>
				<div class='date-form dayinbox col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 form-horizontal control-group controls input-group'>
					<div class='input-group date' id ="datetimepicker2">
						<?php echo $txtdateend; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<?php echo $lbpic; ?>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
					<?php echo $filepic; ?>
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<label>ผู้เขียนข่าว </label>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
					<?php echo $txtname." ".$txtlast;
						if(!empty($_GET['user_id'])){
						echo "<input type='hidden' name='user_user_id' value='$_GET[user_id]'/>";
						}
						if(!empty($user_id)){
						echo "<input type='hidden' name='user_user_id' value='$user_id'/>";
						}
					?>
				</div>
			</div>
		</div>
		<input type='hidden' name='news_date' value='$datetime'/>
		<input type='hidden' name='id' value='$_GET[id]'/>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1" style="padding-bottom:16px;">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<?php echo$button; ?>
				</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php
    echo $form->close();
?>
