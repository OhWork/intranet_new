<?php  ob_start();
     		error_reporting(E_ERROR | E_WARNING | E_PARSE);
        include 'database/db_tools.php';
	include 'connect.php';
        if(!empty($_POST['user_id'])){


		$data['user_pass'] = $_POST['user_pass'];
		$rsfix = $db->update('user',$data,'user_id',$_POST['user_id']);

	if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'UserSystem',
        	'log_action' => 'Changepassword',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));

	}
?>