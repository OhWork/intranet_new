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
	
	if(!empty($_POST['qtn_id'])){

        $data['qtn_name'] = $_POST['qtn_name'];
		$data['qtn_link'] = $_POST['qtn_link'];
		$data['qtn_color'] = $_POST['qtn_color'];
		$data['qtn_datestart'] = $_POST['qtn_datestart'];
		$data['qtn_dateend'] = $_POST['qtn_dateend'];
		$data['qtn_dateupdate'] = $_POST['qtn_dateupdate'];
		$data['qtn_enable'] = $_POST['qtn_enable'];
		$rsfix = $db->update('qtn',$data,'qtn_id',$_POST['user_id']);
		
		
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'questionare',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));

	}else{
    $rsa = $db->insert('qtn',array(
	'qtn_name' => $_POST['qtn_name'],
	'qtn_link' => $_POST['qtn_link'],
	'qtn_color' => $_POST['qtn_color'],
	'qtn_datestart' => $_POST['qtn_datestart'],
	'qtn_dateend' => $_POST['qtn_dateend'],
	'qtn_datereg' => $_POST['qtn_datereg'],
	'qtn_enable' => $_POST['qtn_enable'],
	'qtn_no' => $_POST['qtn_no'],
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
    	'log_system' => 'questionare',
    	'log_action' => 'Add',
    	'log_action_date' => date("Y-m-d H:i"),
    	'log_action_by' => $_POST['log_user'],
    	'log_ip' => $ipshow
    	));
	}

	if(@$rsa || @$rsfix){
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
