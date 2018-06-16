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
		$data['user_name'] = $_POST['user_name'];
		$data['user_last'] = $_POST['user_last'];
		$data['user_pass'] = $_POST['user_pass'];
		$data['user_tel'] = $_POST['user_tel'];
		$data['user_idcard'] = $_POST['user_idcard'];
		$data['user_enable'] = $_POST['user_enable'];
		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];
		$data['subzoo_zoo_zoo_id'] = $_POST['subzoo_zoo_zoo_id'];
		$rsfix = $db->update('user',$data,'user_id',$_POST['user_id']);
		
		$data['systemallow_service'] = $_POST['systemallow_service'];
		$data['systemallow_news'] = $_POST['user_news_allow'];
		$data['systemallow_confer'] = $_POST['systemallow_confer'];
		$data['systemallow_admin'] = $_POST['systemallow_admin'];
		$data['systemallow_touristreport'] = $_POST['systemallow_touristreport'];
		$data['systemallow_drive'] = $_POST['systemallow_drive'];
		$rsfixsystem = $db->update('systemallow',$data,'systemallow_id',$_POST['systemallow_id']);
		
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'UpdateStatusonline-ConferenceRoom',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));

	}else{
    $rsa = $db->insert('systemallow',array(
	'systemallow_service' => $_POST['systemallow_service'],
	'systemallow_news' => $_POST['systemallow_news'],
	'systemallow_confer' => $_POST['systemallow_confer'],
	'systemallow_admin' => $_POST['systemallow_admin'],
	'systemallow_touristreport' => $_POST['systemallow_touristreport'],
	'systemallow_drive' => $_POST['systemallow_drive']
	));
	$last_id = $db->specifytable2('systemallow_id','systemallow','ORDER BY systemallow_id DESC LIMIT 0 , 1')->executeAssoc();
	if($last_id){
    $rs = $db->insert('user',array(
    'user_name' => $_POST['user_name'],
    'user_last' => $_POST['user_last'],
    'user_user' => $_POST['user_user'],
    'user_pass' => $_POST['user_pass'],
    'user_idcard' => $_POST['user_idcard'],
    'user_tel' => $_POST['user_tel'],
    'user_enable' => $_POST['user_enable'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id'],
    'systemallow_systemallow_id' => $last_id['systemallow_id']
	));
	}
	 //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'UserSystem',
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
            $link = "admin_index.php?url=admin_user_index.php";
            header( "Refresh: 2; $link" );
        }
}
?>
</html>
<?php
ob_end_flush();
?>
