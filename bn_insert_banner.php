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
	
	if(!empty($_POST['bn_id'])){
        $dateupdate = date("Y-m-d");
        $data['bn_name'] = $_POST['bn_name'];
		$data['bn_link'] = $_POST['bn_link'];
		$data['bn_dateupdate'] = $dateupdate;
		$data['bn_enable'] = $_POST['bn_enable'];
		$rsfix = $db->update('bn',$data,'bn_id',$_POST['bn_id']);
		
		
	if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'questionare-System',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));

	}else{
    $rs = $db->insert('bn',array(
	'bn_name' => $_POST['bn_name'],
	'bn_link' => $_POST['bn_link'],
	'bn_datereg' => $_POST['bn_datereg'],
	'bn_enable' => $_POST['bn_enable'],
	'bn_no' => $_POST['bn_no'],
	'user_user_id' => $_POST['user_user_id']
	));
	
	
	 //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'Banner-System',
    	'log_action' => 'Add',
    	'log_action_date' => date("Y-m-d H:i"),
    	'log_action_by' => $_POST['log_user'],
    	'log_ip' => $ipshow
    	));
	}

	if(@$rs || @$rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }else{
            echo("ไม่สำเร็จ");
            echo $last_id;
        }
    if(!empty($_POST['user_per'])){
            $link = "admin_index.php";
            header( "Refresh: 2; $link" );

        }else{
            $link = "admin_index.php";
            header( "Refresh: 2; $link" );
        }
}
?>
</html>
<?php
ob_end_flush();
?>
