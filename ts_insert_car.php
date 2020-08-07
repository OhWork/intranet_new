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


	if(!empty($_POST['car_id'])){

		$data['car_name'] = $_POST['car_name'];
		$data['zoo_no'] = $_POST['zoo_no'];
		$data['zoo_enable'] = $_POST['zoo_enable'];

		$rsfix = $db->update('zoo',$data,'zoo_id',$_POST['zoo_id']);

	}else{
	$rs = $db->insert('car',array(
	'car_lp' => $_POST['car_lp'],
	'car_brand' => $_POST['car_brand'],
        'car_color' => $_POST['car_color'],
        'car_model' => $_POST['car_model'],
        'car_status' => $_POST['car_status'],
        'car_seat' => $_POST['car_seat'],
        'car_detail' => $_POST['car_detail'],
	'typecar_typecar_id' => $_POST['typecar_typecar_id']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=ts_show_car.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
