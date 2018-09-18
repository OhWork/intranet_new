<style>
	/* form new */
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*form styles*/
#msform {
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;

	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100%;
	background: #4CAF50;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
/* 	color: white; */
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

</style>
<?php
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
    $filepic = new inputFile('news_cover','','');
    $txtdatestart = new textfieldcalendarreadonly('newsdatestart','datetimepicker1','','form-control','input-group-addon','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('newsdateend','datetimepicker2','','form-control','input-group-addon','datetimepicker2');
    $txtheadnews = new textfield('news_head','','form-control','','');
    $radiotypedesign = new radioGroup();
    $radiotypedesign->name = 'typeDesignnews_id';
    if(empty($id)){
    	$radiotypedesign->add(' รูปแบบที่ 1',1,'checked');
    	$radiotypedesign->add(' รูปแบบที่ 2',2,'');
    	$radiotypedesign->add(' รูปแบบที่ 3',3,'');
    	$radiotypedesign->add(' รูปแบบที่ 4',4,'');
    	$radiotypedesign->add(' รูปแบบที่ 5',5,'');
    	}
    $button = new buttonok("ต่อไป","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 action-button","");
	$user_id = $_SESSION['user_id'];
	$r = $db->findByPK('user','user_id',$user_id)->executeRow();
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
     echo $form->open("msform","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","news_insert_news.php","");
?>

<div class="row">
<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6' >
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<ul id="progressbar">
			    <li class="active">รายละเอียดข่าวสาร</li>
			    <li>รูปแบบการแสดงผลของข่าวสาร</li>
			</ul>
		</div>
		<fieldset>
			 <h2 class="fs-title">รายละเอียดข่าวสาร</h2>
    <h3 class="fs-subtitle">ส่วนที่ 1 ในการเพิ่มข่าว/กิจกรรม</h3>
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
				</div>
			</div>
		</div>
		<input type="button" name="next" class="next action-button col-12" value="Next" />

		</fieldset>
		<fieldset>
			<h2 class="fs-title">รูปแบบการแสดงผลของข่าวสาร</h2>
			<h3 class="fs-subtitle">ส่วนที่ 2 ในการเพิ่มข่าว / กิจกรรม</h3>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php echo $lbtypeDesign; ?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
			<?php echo $radiotypedesign; ?>
		</div>
    		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/Banner.jpg">
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/Banner.jpg">
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/Banner.jpg">
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/Banner.jpg">
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
					<img style="width:50px;height:50px;" src="images/news/typeDesign/Banner.jpg">
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
// 						if(!empty($_GET['user_id'])){
// 						echo "<input type='hidden' name='user_user_id' value='$_GET[user_id]'/>";
// 						}
// 						if(!empty($user_id)){
// 						echo "<input type='hidden' name='user_user_id' value='$user_id'/>";
// 						}
					?>
				</div>
			</div>
		</div>

    <input type="button" name="previous" class="previous action-button col-12" value="Previous" />
   					<?php echo $button; ?>
		</fieldset>
		<input type='hidden' name='news_date' value='<?php echo $datetime; ?>'/>
		<input type='hidden' name='user_user_id' value='<?php echo $user_id; ?>'/>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1" style="padding-bottom:16px;">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">


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
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        });
    });
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>
