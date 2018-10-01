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
	if(!empty($_POST['submenu_id'])){
		$data['submenu_name'] = $_POST['submenu_name'];
		$data['submenu_link'] = $_POST['submenu_link'];
		$data['submenu_no'] = $_POST['submenu_no'];
		$data['submenu_enable'] = $_POST['submenu_enable'];

		$rsfix = $db->update('submenu',$data,'submenu_id',$_POST['submenu_id']);

	}else{
	$rs = $db->insert('submenu',array(
	'submenu_name' => $_POST['submenu_name'],
	'submenu_link' => $_POST['submenu_link'],
	'submenu_no' => $_POST['submenu_no'],
	'submenu_enable' => $_POST['submenu_enable'],
	'menu_menu_id' => $_POST['menu_menu_id']

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
