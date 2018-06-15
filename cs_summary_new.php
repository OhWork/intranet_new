<script language="JavaScript">
/*
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
*/

</script>
<script src="jquery/CSSrefresh.js"></script>
<?php
    if (!empty($_SESSION['user_name'])):
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
        $status = "'N'";
 ?>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">องการสวนสัตว์</li>
			  <?php
				  $rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_type','1','problem_status',$status,'problem_status,problem_date')->execute();

				  $checkdata = mysqli_num_rows($rs);
				  if($checkdata > 0){
					  foreach($rs as $cszpo){
			  ?>
			 <li class="list-group-item"><?php echo $cszpo['problem_name'].$cszpo['zoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์ดุสิต</li>
			  <?php
				 $rs2 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','11','problem_status',$status,'problem_status,problem_date')->execute();

				  $checkdata2 = mysqli_num_rows($rs2);
				  if($checkdata2 > 0){
					  foreach($rs2 as $csdusit){
			  ?>
			  <li class="list-group-item"><?php echo $csdusit['problem_name'].$csdusit['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์เปิดเขาเขียว</li>
			  <?php
				 $rs3 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','12','problem_status',$status,'problem_status,problem_date')->execute();
				  $checkdata3 = mysqli_num_rows($rs3);
				  if($checkdata3 > 0){
					  foreach($rs3 as $cskkhoa){
			  ?>
			  <li class="list-group-item"><?php echo $cskkhoa['problem_name'].$cskkhoa['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์เชียงใหม่</li>
			  <?php
				 $rs4 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','13','problem_status',$status,'problem_status,problem_date')->execute();

				 $checkdata4 = mysqli_num_rows($rs4);
				  if($checkdata4 > 0){
					  foreach($rs4 as $cschangmai){
			  ?>
			  <li class="list-group-item"><?php echo $cschangmai['problem_name'].$cschangmai['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์นครราชสีมา</li>
			 <?php
				 $rs5 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','14','problem_status',$status,'problem_status,problem_date')->execute();

				 $checkdata5 = mysqli_num_rows($rs5);
				  if($checkdata5 > 0){
					  foreach($rs5 as $cskorach){
			  ?>
			  <li class="list-group-item"><?php echo $cskorach['problem_name'].$cskorach['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์สงขลา</li>
			  <?php
				$rs6 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','15','problem_status',$status,'problem_status,problem_date')->execute();

				 $checkdata6 = mysqli_num_rows($rs6);
				 if($checkdata6 > 0){
					  foreach($rs6 as $cssr){
			  ?>
			  <li class="list-group-item"><?php echo $cssr['problem_name'].$cssr['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์อุบลราชธา</li>
			 <?php
				$rs7 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','16','problem_status',$status,'problem_status,problem_date')->execute();

				$checkdata7 = mysqli_num_rows($rs7);
				if($checkdata7 > 0){
					  foreach($rs7 as $csubon){
			  ?>
			  <li class="list-group-item"><?php echo $csubon['problem_name'].$csubon['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
		<div class="col-md-6" style="height : 500px;">
			<ul class="list-group">
			  <li class="list-group-item">สวนสัตว์ขอนแก่น</li>
			  <?php
				$rs8 = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','17','problem_status',$status,'problem_status,problem_date')->execute();

				$checkdata8 = mysqli_num_rows($rs8);
				if($checkdata8 > 0){
					  foreach($rs8 as $cskk){
			  ?>
			  <li class="list-group-item"><?php echo $cskk['problem_name'].$cskk['subzoo_name']?></li>
				  <?php }
				  }
				  else{
					  ?>
					   <li class="list-group-item">ยังไม่มีการแจ้งซ่อม</li>
				  <?php
				  }
				  ?>
			</ul>
		</div>
	</div>
</div>
<?php
	endif;
?>
<script>
var element1 = document.getElementsByClassName('list-group').length;
console.log(element1);
if(element1 >= 6 ){
	element1.hide().length(5);
	alert('เคสแจ้งซ่อมเกิน 5 เคสแล้ว');
}
</script>
