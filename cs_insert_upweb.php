<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบคอมพิวเตอร์เซอรวิส(New)</title>
	</head>
<?php

    include 'database/db_tools.php';
	include 'connect.php';
	

	if(!empty($_POST['ipzpo_id'])){

		$data['ipzpo_address'] = $_POST['ipzpo_address'];
		$rsfix = $db->update('ipzpo',$data,'ipzpo_id',$_POST['ipzpo_id']);
	
	    //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy 
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'IP-address',
    	'log_action' => 'Edit',
    	'log_action_date' => date("Y-m-d H:i"),
    	'log_action_by' => $_POST['log_user'],
    	'log_ip' => $ipshow
    	));	
		
	}else{
	$rs = $db->insert('upweb',array(
	'upweb_name' => $_POST['ipzpo_address'],
	'ipzpo_user' => $_POST['ipzpo_user'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id']
	));
	}	
	
	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
        //แก้เรื่องการส่งค่ากลับปัจจุบัน เมื่อกดแก้ไขแล้วค่าจะแสดงผิด
            if(($_POST['subzoo_zoo_zoo_id']>1)  &&  ($_POST['subzoo_zoo_zoo_id'] <=10)){
            $link = "admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=1";    
            }
            else if($_POST['subzoo_zoo_zoo_id']==20){
            $link = "admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=1";    
            }else{
            $link = "admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id=".$_POST['subzoo_zoo_zoo_id'];
            }
            header( "Refresh: 1; $link" );
}
?>
</html>
<?php					
ob_end_flush();	
?>
