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

	print_r($_POST);
	if(!empty($_POST['user_id'])){

		$data['user_name'] = $_POST['user_name'];
		$data['user_last'] = $_POST['user_last'];
		$data['user_nameeng'] = $_POST['user_nameeng'];
		$data['user_lasteng'] = $_POST['user_lasteng'];
		$data['user_pass'] = $_POST['user_pass'];
		$data['user_tel'] = $_POST['user_tel'];
		$data['user_idcard'] = $_POST['user_idcard'];
		$data['user_enable'] = $_POST['user_enable'];
		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];
		$data['subzoo_zoo_zoo_id'] = $_POST['subzoo_zoo_zoo_id'];
		$rsfix = $db->update('user',$data,'user_id',$_POST['user_id']);

		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'UserSystem',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));

	}else{

    $rs = $db->insert('user',array(
    'user_name' => $_POST['user_name'],
    'user_last' => $_POST['user_last'],
    'user_nameeng' => $_POST['user_nameeng'],
    'user_lasteng' => $_POST['user_lasteng'],
    'user_user' => $_POST['user_user'],
    'user_pass' => $_POST['user_pass'],
    'user_idcard' => $_POST['user_idcard'],
    'user_tel' => $_POST['user_tel'],
    'user_enable' => $_POST['user_enable'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id'],
    'systemallow_systemallow_id' => $last_id['systemallow_id']
	));

// 	}
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
