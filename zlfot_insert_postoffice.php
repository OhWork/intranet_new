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


	if(!empty($_POST['postoffice_id'])){

		$data['postoffice_name'] = $_POST['postoffice_name'];
		$data['postoffice_enable'] = $_POST['postoffice_enable'];

		$rsfix = $db->update('postoffice',$data,'postoffice_id',$_POST['postoffice_id']);

	}else{
	$rs = $db->insert('postoffice',array(
	'postoffice_name' => $_POST['postoffice_name'],
	'postoffice_enable' => $_POST['postoffice_enable']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=zlfot_show_postoffice.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
