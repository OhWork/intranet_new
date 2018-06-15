<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
		<link rel="stylesheet" href="CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="CSS/main.css" media="screen">
        <link rel="stylesheet" href="CSS/print.css" media="print">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
          <title>ระบบคอมพิวเตอร์เซอรวิส(New)</title>
        <?php
            include_once 'inc_js.php';
            include_once 'database/db_tools.php';
            include_once 'connect.php';
            include_once 'form/main_form.php';
            include_once 'form/gridview.php';
        ?>
    </head>
    <body onload="setDefault()">
<!--     <body> -->
        <div class="wrapper">
            <div class="container">
				<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php include_once 'cs_menu.php';?></div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php include_once 'cs_content.php';?></div>
				</div>
     	   </div>
     	</div>
    </body>
    <script type="text/javascript">
function make_autocom(autoObj,showObj){
    var mkAutoObj=autoObj;
    var mkSerValObj=showObj;
    new Autocomplete(mkAutoObj, function() {
        this.setValue = function(id) {
            document.getElementById(mkSerValObj).value = id;
        }
        if ( this.isModified )
            this.setValue("");
        if ( this.value.length < 1 && this.isNotClick )
            return ;
        return "outsource/autocompletedata.php?q=" +encodeURIComponent(this.value);
    });
}

// การใช้งาน
// make_autocom(" id ของ input ตัวที่ต้องการกำหนด "," id ของ input ตัวที่ต้องการรับค่า");
make_autocom("ipzpo_user","ipzpo_address");
//Modal
$('#Modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "cs_getdetail.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })

// function chk_form(){
// 	$(":input + span.require").remove();
// 	$(":input").each(function(){
// 		$(this).each(function(){
// 			if($(this).val()==""){
// 				$(this).after("<span class=require>« จำเป็นต้องกรอก</span>");
// 			}
// 		});
// 	});
// 	if($(":input").next().is(".require")==false){
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

/*
 $(function(){

     var obj_check=$(".css-require");
     $("#myform1").on("submit",function(){
         obj_check.each(function(i,k){
             var status_check=0;
             if(obj_check.eq(i).find(":radio").length>0 || obj_check.eq(i).find(":checkbox").length>0){
                 status_check=(obj_check.eq(i).find(":checked").length==0)?0:1;
             }else{
                 status_check=($.trim(obj_check.eq(i).val())=="")?0:1;
             }
             formCheckStatus($(this),status_check);
         });
         if($(this).find(".has-error").length>0){
              return false;
         }
     });

     obj_check.on("change",function(){
         var status_check=0;
         if($(this).find(":radio").length>0 || $(this).find(":checkbox").length>0){
             status_check=($(this).find(":checked").length==0)?0:1;
         }else{
             status_check=($.trim($(this).val())=="")?0:1;
         }
         formCheckStatus($(this),status_check);
     });

     var formCheckStatus = function(obj,status){
         if(status==1){
             obj.parent(".form-group").removeClass("has-error").addClass("has-success");
             obj.next(".glyphicon").removeClass("glyphicon-warning-sign").addClass("glyphicon-ok");
         }else{
             obj.parent(".form-group").removeClass("has-success").addClass("has-error");
             obj.next(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-warning-sign");
         }
     }
 });

*/



</script>

</html>
