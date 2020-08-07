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


	if(!empty($_POST['driver_id'])){

		$data['driver_name'] = $_POST['driver_name'];
		$data['driver_lineid'] = $_POST['driver_lineid'];
		$data['driver_tel'] = $_POST['driver_tel'];
                $data['driver_status'] = $_POST['driver_status'];
		$rsfix = $db->update('driver',$data,'driver_id',$_POST['driver_id']);

	}else{
	$rs = $db->insert('driver',array(
	'driver_name' => $_POST['driver_name'],
	'driver_lineid' => $_POST['driver_lineid'],
        'driver_tel' => $_POST['driver_tel'],
        'driver_status' => $_POST['driver_status']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=ts_show_driver.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
