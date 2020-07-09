<?php  ob_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';


	if(!empty($_POST['eventzlfot_id'])){

		$data['eventzlfot_name'] = $_POST['eventzlfot_name'];
		$data['eventzlfot_no'] = $_POST['eventzlfot_no'];
		$data['eventzlfot_enable'] = $_POST['eventzlfot_enable'];

		$rsfix = $db->update('eventzlfot',$data,'eventzlfot_id',$_POST['eventzlfot_id']);

	}else{
	$rs = $db->insert('eventzlfot',array(
	'eventzlfot_name' => $_POST['eventzlfot_name'],
	'eventzlfot_no' => $_POST['eventzlfot_no'],
	'eventzlfot_enable' => $_POST['eventzlfot_enable']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
 $link = "url=admin_index.php?url=zlfot_add_member.php";
            header( "Refresh: 2; $link" );
        }
?>
</html>
<?php
ob_end_flush();
?>
