<?php
	$datetime = date("Y-m-d H:i");
    $form = new form();
    $lbheadnews = new label('หัวข้อข่าวสาร');
    $lbdetail = new label('รายละเอียด');
    $lbtypeDesign = new label('เลือกรูปแบบข่าวสาร');
    $lbpic = new label('ภาพหน้าปก');
    $lbdatestart = new label('วันเริ่ม');
    $lbdateend = new label('วันสิ้นสุด');
    $selecttypenews = new SelectFromDB();
    $selecttypenews->name = 'typeNews_typeNews_id';
    $selecttypenews->lists = 'โปรดระบุ ชนิดของข่าวสาร';
    $filepic = new inputFile('news_cover','','cover_new');
    $txtdatestart = new textfieldcalendarreadonly('newsdatestart','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('newsdateend','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtheadnews = new textfield('news_head','','form-control','','');
    $txtdetailnews = new textfield('news_detail','','form-control','','');
    $radiotypedesign = new radioGroup();
    $radiotypedesign->name = 'typeDesignnews_id';
    if(empty($_GET['id'])){
    	$radiotypedesign->add(' รูปแบบที่ 1',1,'checked');
    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
    	}
    $button = new buttonok("ต่อไป","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$user_id = $_SESSION['user_id'];
    if(!empty($_GET['id'])){
	    $id = $_GET['id'];
	    $r = $db->findByPK('news','news_id',$id)->executeRow();
	    $txtheadnews->value = $r['news_head'];
	    $txtdatestart->value = $r['news_datestart'];
		$txtdateend->value = $r['news_dateend'];
	    $user_id = $r['user_user_id'];
	    $r2 = $db->findByPK('user','user_id',$user_id)->executeRow();
	    $txtname= $r2['user_name'];
		$txtlast= $r2['user_last'];
		if($r['typeDesignnews_id'] == 1){
			$radiotypedesign->add(' รูปแบบที่ 1',1,'checked','');
	    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
	    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
	    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
	    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
		}
		if($r['typeDesignnews_id'] == 2){
			$radiotypedesign->add(' รูปแบบที่ 1',1,'');
	    	$radiotypedesign->add(' รูปแบบที่ 2',2,'checked');
	    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
	    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
	    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
		}
		if($r['typeDesignnews_id'] == 3){
			$radiotypedesign->add(' รูปแบบที่ 1',1,'');
	    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
	    	$radiotypedesign->add(' รูปแบบที่ 3',3,'checked');
	    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
	    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
		}
		if($r['typeDesignnews_id'] == 4){
			$radiotypedesign->add(' รูปแบบที่ 1',1,'');
	    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
	    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
	    	$radiotypedesign->add(' รูปแบบที่ 4',4,'checked');
	    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
	    }
		if($r['typeDesignnews_id'] == 5){
			$radiotypedesign->add(' รูปแบบที่ 1',1,'');
	    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
	    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
	    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
	    	$radiotypedesign->add(' รูปแบบที่ 5',5,'checked');
		}
    }
    echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","news_insert_news.php","");
?>
<div class="row">
<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6' style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'><img src=""
			<?php echo $lbheadnews; ?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<?php echo $txtheadnews; ?>
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
					<img src="images/news/<?php echo $r['news_cover'];?>" width="100px;" height="100px;">
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbtypeDesign; ?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
			<?php echo $radiotypedesign; ?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
			<div class="row">
				<div class="" style="margin-left:32px;">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/new1.png">
				</div>
				<div class="" style="margin-left:48px;">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/new2.png">
				</div>
				<div class="" style="margin-left:48px;">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/new3.png">
				</div>
				<div class="" style="margin-left:50px;">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/new4.png">
				</div>
				<div class="" style="margin-left:50px;">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/new5.png">
				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<label>ผู้เขียนข่าว </label>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
					<?php echo $txtname." ".$txtlast;?>
				</div>
			</div>
		</div>
		<input type='hidden' name='news_date' value='<?php echo $datetime; ?>'/>
		<input type='hidden' name='user_user_id' value='<?php echo $user_id; ?>'/>
		<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'/>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1" style="padding-bottom:16px;">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<?php echo $button; ?>
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
<script>
	$(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD H:mm',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD H:mm',
            useCurrent: false,
            ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
            locale:moment.locale('th'),
            stepping: 30
        });
        $("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("dp.hide");
                    $(this).find(".form-control").blur();
                }
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("dp.hide");
                    $(this).find(".form-control").blur();
                }
        });
    });
	$('#cover_new').on('change',function(){
	<?php
/*
		if(!empty($r['news_cover'])){
			unlink('images/news/'.$r['news_cover']);
		}
*/
	?>
	});
</script>
