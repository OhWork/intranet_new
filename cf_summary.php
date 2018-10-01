<script language="JavaScript">

function checkstatzpow(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpowait').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatzpoy(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusy:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
   	            console.log(result);
		            $('#rszpopass').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatzpon(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszponopass').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatzpocancel(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpocancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatzpoonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpoonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
function checkstatzpoonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpoonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatzpoonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpoonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatzpoonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rszpoonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
//ดุสิต
function checkstatdusitw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsdusitw').html('รอการอนุมัติ'+result);
            }
  		});
	}
function checkstatdusity(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusity:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rsdusity').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatdusitn(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsdusitn').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatdusitc(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsdusitcancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatdusitonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsdusitonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
function checkstatdusitonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rsdusitonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatdusitonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//  	            console.log(result);
		            $('#rsdusitonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatdusitonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusdusitonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsdusitonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
	//เขาเขียว
function checkstatkhaokeaww(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeaww:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhoakeaww').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkhaokeawy(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawy:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhaokeawy').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkhaokeawn(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhaokeawn').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkhaokeawc(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhaokeawcancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatkhaokeawonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhoakeawonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkhaokeawonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhaokeawonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkhaokeawonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhaokeawonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkhaokeawonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhaokeawonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhaokeawonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
// เชียงใหม่
function checkstatchangmaiw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaiw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmaiw').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatchangmaiy(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaiy:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rschangmaiy').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatchangmain(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmain:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmain').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatchangmaic(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaic:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmaicancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatchangmaionlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaionlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmaionlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatchangmaionliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaionliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rschangmaionliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatchangmaionlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaionlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmaionlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatchangmaionlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuschangmaionlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rschangmaionlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
//สวนสัตว์ โคราช
function checkstatkoratw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratw').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkoraty(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoraty:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskoraty').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkoratn(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratn').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkoratc(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratcancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatkoratonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkoratonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskoratonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkoratonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkoratonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskoratonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskoratonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
//สวนสัตว์สงขลา
function checkstatsongkhlaw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlaw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlaw').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatsongkhlay(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlay:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rssongkhlay').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatsongkhlan(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlan:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlan').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatsongkhlac(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlac:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlacancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatsongkhlaonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlaonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlaonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatsongkhlaonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlaonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rssongkhlaonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatsongkhlaonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlaonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlaonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatsongkhlaonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statussongkhlaonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rssongkhlaonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
//สวนสัตว์อุบลราชธานี
function checkstatubonw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubonw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsubonw').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatubony(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubony:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rsubony').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatubonn(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubonn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsubonn').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatubonc(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubonc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsuboncancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatubononlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubononlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsubononlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatubononliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubononliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rsubononliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatubononlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubononlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsubononlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatubononlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statusubononlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rsubononlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
//สวนสัตว์ขอนแก่น
function checkstatkhonekaenw(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenw:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhonekaenw').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkhonekaeny(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaeny:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhonekaeny').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkhonekaenn(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenn:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhonekaenn').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkhonekaenc(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenc:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhonekaencancel').html('ยกเลิก'+result);
            }
  		});
	}
function checkstatkhonekaenonlinew(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenonlinew:'W'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//   	            console.log(result);
		            $('#rskhonekaenonlinew').html('รอการอนุมัติ'+result);
            }
  		});
	}
	function checkstatkhonekaenonliney(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenonliney:'Y'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhonekaenonliney').html('อนุมัติ'+result);
            }
  		});
	}
function checkstatkhonekaenonlinen(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenonlinen:'N'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhonekaenonlinen').html('ไม่อนุมัติ'+result);
            }
  		});
	}
function checkstatkhonekaenonlinec(){
$.ajax({
	        url: "cf_checkstat.php",
	        type: "POST",
	        data: {eventconfer_statuskhonekaenonlinec:'C'},
            success: function(result) {
// 	            var obj = jQuery.parseJSON(result);
//    	            console.log(result);
		            $('#rskhonekaenonlinecancel').html('ยกเลิก'+result);
            }
  		});
	}
function loadfunction(){

	checkstatzpow();
	checkstatzpoy();
	checkstatzpon();
	checkstatzpocancel();
	checkstatzpoonlinew();
	checkstatzpoonliney();
	checkstatzpoonlinen();
	checkstatzpoonlinec();
	checkstatdusitw();
	checkstatdusity();
	checkstatdusitn();
	checkstatdusitc();
	checkstatdusitonlinew();
	checkstatdusitonliney();
	checkstatdusitonlinen();
	checkstatdusitonlinec();
	checkstatkhaokeaww();
	checkstatkhaokeawy();
	checkstatkhaokeawn();
	checkstatkhaokeawc()
	checkstatkhaokeawonlinew();
	checkstatkhaokeawonliney();
	checkstatkhaokeawonlinen();
	checkstatkhaokeawonlinec()
	checkstatchangmaiw();
	checkstatchangmaiy();
	checkstatchangmain();
	checkstatchangmaic();
	checkstatchangmaionlinew();
	checkstatchangmaionliney();
	checkstatchangmaionlinen();
	checkstatchangmaionlinec();
	checkstatkoratw();
	checkstatkoraty();
	checkstatkoratn();
	checkstatkoratc()
	checkstatkoratonlinew();
	checkstatkoratonliney();
	checkstatkoratonlinen();
	checkstatkoratonlinec();
	checkstatsongkhlaw();
	checkstatsongkhlay();
	checkstatsongkhlan();
	checkstatsongkhlac();
	checkstatsongkhlaonlinew();
	checkstatsongkhlaonliney();
	checkstatsongkhlaonlinen();
	checkstatsongkhlaonlinec();
	checkstatubonw();
	checkstatubony();
	checkstatubonn();
	checkstatubonc();
	checkstatubononlinew();
	checkstatubononliney();
	checkstatubononlinen();
	checkstatubononlinec();
	checkstatkhonekaenw();
	checkstatkhonekaeny();
	checkstatkhonekaenn();
	checkstatkhonekaenc();
	checkstatkhonekaenonlinew();
	checkstatkhonekaenonliney();
	checkstatkhonekaenonlinen();
	checkstatkhonekaenonlinec();
}
 	 setInterval(loadfunction, 1000);

</script>
<script src="jquery/CSSrefresh.js"></script>
<?php
    if (!empty($_SESSION['user_name'])):
    $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
 ?>
<!--     ทั้งหมด  -->
    	<?php if($user_zoo == 10 || $user_zoo == 3){?>

		<!--องค์การสวนสัตว์-->
			<div class='col-md-12' style="margin-top: 10px;">
				<div class='row'>
					<div class='col-md-6 cfbordertop' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:35px;">
								<center><img src="images/Logo/ZPO.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' id="rszpowait" role='button' style="padding-left:5px;padding-right:5px;margin-top:16px;"></a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' id="rszpopass" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;"></a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rszponopass" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	}?>
								</a>
								<a href='#' class='btn col-md-12 align-middle text-light' id="rszpocancel" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;"></a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' id="rszpoonlinew" role='button' style="padding-left:5px;padding-right:5px;margin-top:16px;"></a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' id="rszpoonliney" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' id="rszpoonlinen" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	}?>
								</a>
								<a href='#' class='btn col-md-12 align-middle text-light' id="rszpoonlinecancel" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;"></a>
							</div><!-- end col-md-8 -->
						</div><!-- end row -->
					</div><!-- end summarybox -->
		<?php }?>
		<!--สวนสัตว์ดุสิต-->
		<?php if($user_zoo == 10 || $user_zoo == 11){?>
					<div class='col-md-6 cfborderrighttop' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:35px;">
								<center><img src="images/Logo/Dusitzoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning warinning col-md-12 text-light' role='button' id="rsdusitw" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 11){?>
								<a href='#' class='btn btn-success align-middle col-md-12 suscess' role='button' id="rsdusity" style="padding-left:5px;padding-right:5px;margin-top:20px;">								<?php } ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rsdusitn" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn col-md-12 align-middle text-light' id="rsdusitcancel" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;"></a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn col-md-12 warinning text-light' role='button' id="rsdusitonlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rsdusitonliney" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rsdusitonlinen" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
								<a href='#' class='btn col-md-12 align-middle text-light' id="rsdusitonlinecancel" role='button' style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		<!--สวนสัตว์เปิดเขาเขียว-->
		<?php if($user_zoo == 10 || $user_zoo == 12){?>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-6 cfborderleft' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:30px;">
								<center><img src="images/Logo/KKOzoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskhoakeaww" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 12){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskhaokeawy" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskhaokeawn" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn col-md-12 noity text-light' role='button' id="rskhaokeawcancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskhoakeawonlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskhaokeawonliney" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskhaokeawonlinen" style="padding-left:5px;padding-right:5px;margin-top:20px;">							<?php }?>
								</a>
								<a href='#' class='btn col-md-12 noity text-light' role='button' id="rskhaokeawonlinecancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
						</div>
					</div>
		<?php }?>
		<!--สวนสัตว์เชียงใหม่-->
		<?php if($user_zoo == 10 || $user_zoo == 13){?>
					<div class='col-md-6 cfborderright' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:50px;">
								<center><img src="images/Logo/chiangmai.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rschangmaiw" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 13){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rschangmaiy" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php
									} ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rschangmain" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn col-md-12 noity text-light' role='button' id="rschangmaicancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rschangmaionlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rschangmaionliney"style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id='rschangmaionlinen'style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	}?>
								</a>
								<a href='#' class='btn col-md-12 noity text-light' role='button' id="rschangmaionlinecancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		<!--สวนสัตว์นครราชสีมา-->
		<?php if($user_zoo == 10 || $user_zoo == 14){?>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-6 cfborderleft' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:35px;">
								<center><img src="images/Logo/Nakhonrachsimazoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskoratw" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 14){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskoraty" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php	} ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskoratn" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn col-md-12 text-light' role='button' id="rskoratcancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
								</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskoratonlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskoratonliney" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskoratonlinen" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
								<a href='#' class='btn col-md-12 text-light' role='button' id="rskoratonlinecancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div><!-- end col-md-4 -->
						</div><!-- end row -->
					</div><!-- end summarybox -->
		<?php }?>
		<!--สวนสัตว์สงขลา-->
		<?php if($user_zoo == 10 || $user_zoo == 15){?>
					<div class='col-md-6 cfborderright' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:35px;">
								<center><img src="images/Logo/Songkhlazoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rssongkhlaw" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 15){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rssongkhlay"style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php } ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rssongkhlan" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn  col-md-12 text-light' role='button' id="rssongkhlacancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rssongkhlaonlinew"style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rssongkhlaonliney"style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rssongkhlaonlinen"style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php }?>
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle text-light' role='button' id="rssongkhlaonlinecancel"style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		<!--สวนสัตว์อุบลราชธานี-->
		<?php if($user_zoo == 10 || $user_zoo == 16){?>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-6 cfborderleft' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:35px;">
								<center><img src="images/Logo/Ubonzoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rsubonw" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 16){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rsubony" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php		} ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rsubonn" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn  col-md-12 text-light' role='button' id="rsuboncancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rsubononlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rsubononliney" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rsubononlinen" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php
									}?>
								</a>
								<a href='#' class='btn  col-md-12 text-light' role='button' id="rsubononlinecancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
						</div>
					</div>
		<?php }?>
		<!--สวนสัตว์ขอนแก่น-->
		<?php if($user_zoo == 10 || $user_zoo == 17){?>
					<div class='col-md-6 cfborderright' style="padding-top:5px;padding-bottom:5px;">
						<div class='row'>
							<div class='col-md-4' style="margin-top:30px;">
								<center><img src="images/Logo/KKzoo.png"></center>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;"><center>ระบบจองห้องประชุม</center></div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskhonekaenw"style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<?php if($user_zoo == 10 || $user_zoo == 17){?>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskhonekaeny" style="padding-left:5px;padding-right:5px;margin-top:20px;">
									<?php	} ?>
								</a>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskhonekaenn" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<a href='#' class='btn  col-md-12 text-light' role='button' id="rskhonekaencancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
							<div class='col-md-4'>
								<div class='col-md-12 headconfer' style="margin-top:6px;">ระบบจองห้องประชุมทางไกล</div>
								<a href='#' class='btn btn-warning col-md-12 warinning text-light' role='button' id="rskhonekaenonlinew" style="padding-left:5px;padding-right:5px;margin-top:16px;">
								</a>
								<a href='#' class='btn btn-success col-md-12 align-middle suscess' role='button' id="rskhonekaenonliney" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								</a>
								<?php if($user_zoo == 10){?>
								<a href='#' class='btn btn-danger col-md-12 noity' role='button' id="rskhonekaenonlinen" style="padding-left:5px;padding-right:5px;margin-top:20px;">
								<?php
									}?>
								</a>
								<a href='#' class='btn  col-md-12 text-light' role='button' id="rskhonekaenonlinecancel" style="padding-left:5px;padding-right:5px;margin-top:20px; background-color:ff6c00;">
								</a>
							</div>
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
