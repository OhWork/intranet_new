<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['subzoo_id'])){
		$data['subzoo_name'] = $_POST['subzoo_name'];
		$data['subzoo_year'] = $_POST['subzoo_year'];
		$data['subzoo_no'] = $_POST['subzoo_no'];
		$data['subzoo_detail'] = $_POST['subzoo_detail'];
		$data['subzoo_enable'] = $_POST['subzoo_enable'];

		$rsfix = $db->update('subzoo',$data,'subzoo_id',$_POST['subzoo_id']);

	}else{
	$rs = $db->insert('subzoo',array(
	'subzoo_name' => $_POST['subzoo_name'],
	'subzoo_year' => $_POST['subzoo_year'],
	'subzoo_no' => $_POST['subzoo_no'],
	'subzoo_detail' => $_POST['subzoo_detail'],
	'subzoo_enable' => $_POST['subzoo_enable'],
	'zoo_zoo_id' => $_POST['zoo_zoo_id']

	));
	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=user_add_division.php";
            header( "Refresh: 2; $link" );
}else{
            echo "ข้อมูลไม่เข้าฐานข้อมูล";
        }
?>
</html>
<?php
ob_end_flush();
?>
