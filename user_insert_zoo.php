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


	if(!empty($_POST['zoo_id'])){

		$data['zoo_name'] = $_POST['zoo_name'];
		$data['zoo_no'] = $_POST['zoo_no'];
		$data['zoo_enable'] = $_POST['zoo_enable'];

		$rsfix = $db->update('zoo',$data,'zoo_id',$_POST['zoo_id']);

	}else{
	$rs = $db->insert('zoo',array(
	'zoo_name' => $_POST['zoo_name'],
	'zoo_no' => $_POST['zoo_no'],
	'zoo_enable' => $_POST['zoo_enable']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=user_show_zoo.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
