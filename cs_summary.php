<script language="JavaScript">
function checkproblemn(){
$.ajax({
	        url: "cs_checkproblem_N.php",
	        type: "POST",
	        data: {status:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#problemn').html(result);
            }
  		});
	}
	function checkproblems(){
$.ajax({
	        url: "cs_checkproblem_N.php",
	        type: "POST",
	        data: {status2:'S'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//  	            console.log(result);
		            $('#problems').html(result);
            }
  		});
	}
function checkproblemy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {status3:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	//  	            console.log(result);
			            $('#problemy').html(result);
	            }
	});
}
function checkproblemzpon(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuszpon:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	//  	            console.log(result);
			            $('#problemzpon').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemzpos(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuszpos:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	//  	            console.log(result);
			            $('#problemzpos').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemzpoy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuszpoy:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	//  	            console.log(result);
			            $('#problemzpoy').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemzpoip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuszpoip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemzpoip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemdusitn(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusdusitn:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemdusitn').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemdusits(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusdusits:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemdusits').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemdusity(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusdusity:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemdusity').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemdusitip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusdusitip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemdusitip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemkhaokeawn(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhaokeawn:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhaokeawn').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemkhaokeaws(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhaokeaws:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhaokeaws').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemkhaokeawy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhaokeawy:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhaokeawy').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemkhaokeawy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhaokeawy:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhaokeawy').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemkhaokeawip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhaokeawip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhaokeawip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemchangmain(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuschangmain:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemchangmain').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemchangmais(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuschangmais:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemchangmais').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemchangmaiy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuschangmaiy:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemchangmaiy').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemchangmaiip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuschangmaiip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemchangmaiip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemkorachn(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskorachn:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkorachn').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemkorachs(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskorachs:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkorachs').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemkorachy(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskorachy:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkorachy').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemkorachip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskorachip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkorachip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemsongkhlan(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statussongkhalan:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemsongkhalan').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemsongkhlas(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statussongkhalas:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemsongkhalas').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemsongkhlay(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statussongkhalay:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemsongkhalay').html('เสร็จสิ้น '+result);
	            }
	});
}
function checkproblemsongkhlaip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statussongkhalaip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemsongkhalaip').html('IP คงเหลือ '+result);
	            }
	});
}
function checkproblemubonn(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusubonn:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemubonn').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemubons(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusubons:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemubons').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemubony(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusubony:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemubony').html('เสร็จสิ้น '+result);
	            }
	});
}function checkproblemubonip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statusubonip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemubonip').html('IP คงเหลือ '+result);
	            }
	});
}


function checkproblemkhonekaenn(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhonekaenn:'N'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhonekaenn').html('แจ้งดำเนินการใหม่ '+result);
	            }
	});
}
function checkproblemkhonekaens(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhonekaens:'S'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhonekaens').html('ระหว่างดำเนินการ '+result);
	            }
	});
}
function checkproblemkhonekaeny(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhonekaeny:'Y'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhonekaeny').html('เสร็จสิ้น '+result);
	            }
	});
}function checkproblemkhonekaenip(){
	$.ajax({
		        url: "cs_checkproblem_N.php",
		        type: "POST",
		        data: {statuskhonekaenip:'IP-[ว่าง]'},
	            success: function(result) {
	// 	            var obj = jQuery.parseJSON(result);
	// 	            console.log(result);
			            $('#problemkhonekaenip').html('IP คงเหลือ '+result);
	            }
	});
}
function loadfunction(){
	checkproblemn();
	checkproblems();
	checkproblemy();
	checkproblemzpon();
	checkproblemzpos();
	checkproblemzpoy();
	checkproblemzpoip();
	checkproblemdusitn();
	checkproblemdusits();
	checkproblemdusity();
	checkproblemdusitip();
	checkproblemkhaokeawn();
	checkproblemkhaokeaws();
	checkproblemkhaokeawy();
	checkproblemkhaokeawip();
	checkproblemchangmain();
	checkproblemchangmais();
	checkproblemchangmaiy();
	checkproblemchangmaiip();
	checkproblemkorachn();
	checkproblemkorachs();
	checkproblemkorachy();
	checkproblemkorachip();
	checkproblemsongkhlan();
	checkproblemsongkhlas();
	checkproblemsongkhlay();
	checkproblemsongkhlaip();
	checkproblemubonn();
	checkproblemubons();
	checkproblemubony();
	checkproblemubonip();
	checkproblemkhonekaenn();
	checkproblemkhonekaens();
	checkproblemkhonekaeny();
	checkproblemkhonekaenip();
}
	 setInterval(loadfunction, 500);

</script>
<script src="jquery/CSSrefresh.js"></script>
<?php
    if (!empty($_SESSION['user_name'])):
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];

/*
 	$rsAll = $db->countTable('problem','problem_status',"'N'")->execute();
    $rsAll2 = $db->countTable('problem','problem_status',"'S'")->execute();
    $rsAll3 = $db->countTable('problem','problem_status',"'Y'")->execute();
    $rszpo = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
    $rszpo2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
    $rszpo3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
     $rsdusit = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
    $rsdusit2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
     $rsdusit3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
     $rskhaokeaw = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
     $rskhaokeaw2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
     $rskhaokeaw3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
     $rschiangmai = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
     $rschiangmai2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
     $rschiangmai3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
    $rskorat = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
    $rskorat2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
    $rskorat3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
    $rssongkhla = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
    $rssongkhla2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
    $rssongkhla3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
    $rsubon = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
    $rsubon2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
    $rsubon3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
    $rskhonekaen = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
    $rskhonekaen2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
    $rskhonekaen3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
    $ipzpo = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_type',1)->execute();
    $ipdusit = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',11)->execute();
     $ipchiangmai = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',13)->execute();
    $ipkorat = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',14)->execute();
     $ipsongkhla = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',15)->execute();

    $ipubon = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',16)->execute();
    $ipkhonekaen = $db->countTable3('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',17)->execute();
*/
 ?>

<!--     ทั้งหมด  -->
    	<?php if($user_zoo == 10){?>
		<div class='row'>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<h2>องค์การสวนสัตว์ และ สวนสัตว์ทั้งหมด</h2>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
            	<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12'>
					<div class='col-md-12 col-12 boxred' style="padding-top: 16px;padding-bottom: 16px;">
						<div class='row'>
							<div class='col-md-2 col-sm-2 col-2'>
								<center><img class="summaryimg" src='images/icons/glyphicons-30-notes-2@3x.png'/></center>
							</div>
							<div class='col-md-7 col-sm-7 col-7' style="padding-top: 3%;color: #fff;text-align: center;">
								แจ้งดำเนินการใหม่ทั้งหมด
							</div>
							<div class='col-md-3 col-sm-3 col-3' id="problemn" style="font-size:30px;color: #fff;text-align: center;">
					  		</div>
					  	</div>
					</div>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12'>
					<div class='col-md-12 col-12 boxyellow' style="padding-top: 16px;padding-bottom: 16px;">
						<div class='row'>
							<div class='col-md-2 col-2' style="padding-top: 5px;">
								<center><img class="summaryimg" src='images/icons/glyphicons-30-notes-2@3x.png'/></center>
							</div>
							<div class='col-md-7 col-7' style="padding-top: 3%;color: #fff;text-align: center;">
								ระหว่างการดำเนินงานทั้งหมด
							</div>
							<div class='col-md-3 col-3' id="problems" style="font-size:30px;color: #fff;text-align: center;">
							</div>
					  	</div>
					</div>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12'>
					<div class='col-md-12 col-12 boxgreen' style="padding-top: 16px;padding-bottom: 16px;">
						<div class='row'>
							<div class='col-md-2 col-2' style="padding-top: 5px;">
								<center><img class="summaryimg" src='images/icons/glyphicons-30-notes-2@3x.png'/></center>
							</div>
							<div class='col-md-7 col-7' style="padding-top: 3%;color: #fff;text-align: center;">
								เสร๊จสิ้นทั้งหมด
							</div>
							<div class='col-md-3 col-3' id="problemy" style="font-size:30px;color: #fff;text-align: center;">
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		<!--องค์การสวนสัตว์-->
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="margin-top: 10px;">
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfbordertop'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/ZPO.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemzpon" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button' >
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemzpoy" class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemzpos" class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=1' id="problemzpoip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	}?>
								</a>
							</div><!-- end col-md-4 -->
						</div><!-- end row -->
					</div><!-- end summarybox -->
		<?php }?>
		<!--สวนสัตว์ดุสิต-->
		<?php if($user_zoo == 10 || $user_zoo == 11){?>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderrighttop'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/Dusitzoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id='problemdusitn' class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php'id="problemdusity"  class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id='problemdusits' class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 11){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=11' id='problemdusitip' class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
			</div>
		<?php }?>
		<!--สวนสัตว์เปิดเขาเขียว-->
		<?php if($user_zoo == 10 || $user_zoo == 12){?>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderleft'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/KKOzoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemkhaokeawn" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemkhaokeawy" class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemkhaokeaws" class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 12){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=12' id="problemkhaokeawip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
		<?php }?>
		<!--สวนสัตว์เชียงใหม่-->
		<?php if($user_zoo == 10 || $user_zoo == 13){?>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderright'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/chiangmai.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemchangmain" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemchangmaiy"class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemchangmais"class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 13){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=13' id="problemchangmaiip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
			</div>
		<?php }?>
		<!--สวนสัตว์นครราชสีมา-->
		<?php if($user_zoo == 10 || $user_zoo == 14){?>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderleft'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/Nakhonrachsimazoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemkorachn" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemkorachy"class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemkorachs"class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 14){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=14' id="problemkorachip"class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
							</div><!-- end col-md-4 -->
						</div><!-- end row -->
					</div><!-- end summarybox -->
		<?php }?>
		<!--สวนสัตว์สงขลา-->
		<?php if($user_zoo == 10 || $user_zoo == 15){?>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderright'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/Songkhlazoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemsongkhalan" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemsongkhalay" class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemsongkhalas" class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 15){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=15' id="problemsongkhalaip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	} ?>
								</a>
							</div>
						</div>
					</div>
			</div>
		<?php }?>
		<!--สวนสัตว์อุบลราชธานี-->
		<?php if($user_zoo == 10 || $user_zoo == 16){?>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderleft'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/Ubonzoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemubonn" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemubony" class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemubons" class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 16){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=16' id="problemubonip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
							</div>
						</div>
					</div>
		<?php }?>
		<!--สวนสัตว์ขอนแก่น-->
		<?php if($user_zoo == 10 || $user_zoo == 17){?>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 cfborderright'>
						<div class='row'>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<center><img class="imgmobile" src="images/Logo/KKzoo.png"></center>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php' id="problemkhonekaenn" class='btn btn-danger noity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_completefixproblem.php' id="problemkhonekaeny" class='btn btn-success align-middle suscess col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
							</div>
							<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12'>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_waitfixproblem.php' id="problemkhonekaens" class='btn btn-warning warinning text-light col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 boxtext' role='button'>
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 17){?>
								<a href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=17' id="problemkhonekaenip" class='btn btn-primary total col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php		} ?>
								</a>
							</div>
						</div>
					</div>
			</div>
		<?php }?>
<!--
		<?php if($user_zoo == 10){?>
		<div class='col-md-6 summarybox3' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=1';">
		<div class='col-md-4 summarypic'><img src="images/Logo/01.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP องค์การสวนสัตว์คงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipzpo)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 11){?>
		<div class='col-md-6 summarybox4' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=11';">
		<div class='col-md-4 summarypic'><img src="images/Logo/02.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์ดุสิตคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipdusit)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 12){?>
		<div class='col-md-6 summarybox3' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=13';">
		<div class='col-md-4 summarypic'><img src="images/Logo/03.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์เปิดเขาเขียวคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipkhaokeaw)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 13){?>
		<div class='col-md-6 summarybox4' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=12';">
		<div class='col-md-4 summarypic'><img src="images/Logo/04.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์เชียงใหม่คงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipchiangmai)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 14){?>
		<div class='col-md-6 summarybox3' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=15';">
		<div class='col-md-4 summarypic'><img src="images/Logo/05.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์นครราชสีมาคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipkorat)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 15){?>
		<div class='col-md-6 summarybox4' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=14';">
		<div class='col-md-4 summarypic'><img src="images/Logo/06.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์สงขลาคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipsongkhla)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 16){?>
		<div class='col-md-6 summarybox3' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=16';">
		<div class='col-md-4 summarypic'><img src="images/Logo/07.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์อุบลราชธานีคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipubon)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>
		<?php if($user_zoo == 10 || $user_zoo == 17){?>
		<div class='col-md-6 summarybox4' onclick="location.href='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=17';">
		<div class='col-md-4 summarypic'><img src="images/Logo/08.png"></div>
		<div class='col-md-8 summarytext'><center>
		<?php echo "IP สวนสัตว์ขอนแก่นคงเหลือ<br/>";
			  while ($row = mysql_fetch_array($ipkhonekaen)){
			  print_r($row[0]);};
			  }
		 ?>
		</center></div>
		</div>-->
	<?php
    	endif;
    	?>
