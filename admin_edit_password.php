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
	if(!empty($_POST['user_id'])){
		$data['user_pass'] = $_POST['user_pass'];
		$rsfix = $db->update('user',$data,'user_id',$_POST['user_id']);
	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "admin_index.php?url=cs_show_ip.php&id=".$_POST['subzoo_zoo_zoo_id'];
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
