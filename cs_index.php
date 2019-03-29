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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php include_once 'cs_menu.php';?></div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php include_once 'cs_content.php';?></div>
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

</script>

</html>
