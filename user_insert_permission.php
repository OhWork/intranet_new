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

	if(!empty($_POST['user_id']) && !empty($_POST['systemallow_id'])){

        $data['systemallow_service'] = $_POST['systemallow_service'];
		$data['systemallow_news'] = $_POST['systemallow_news'];
		$data['systemallow_confer'] = $_POST['systemallow_confer'];
		$data['systemallow_admin'] = $_POST['systemallow_admin'];
		$data['systemallow_touristreport'] = $_POST['systemallow_touristreport'];
		$data['systemallow_drive'] = $_POST['systemallow_drive'];
		$data['systemallow_hrs'] = $_POST['systemallow_hrs'];
		$data['systemallow_qtn'] = $_POST['systemallow_qtn'];
		$rsfix = $db->update('systemallow',$data,'systemallow_id',$_POST['user_id']);


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
    $rs = $db->insert('systemallow',array(
	'systemallow_service' => $_POST['systemallow_service'],
	'systemallow_news' => $_POST['systemallow_news'],
	'systemallow_confer' => $_POST['systemallow_confer'],
	'systemallow_admin' => $_POST['systemallow_admin'],
	'systemallow_touristreport' => $_POST['systemallow_touristreport'],
	'systemallow_hrs' => $_POST['systemallow_hrs'],
	'systemallow_qtn' => $_POST['systemallow_qtn'],
	'systemallow_drive' => $_POST['systemallow_drive']
	));

	$last_id = $db->specifytable2('systemallow_id','systemallow','ORDER BY systemallow_id DESC LIMIT 0 , 1')->executeAssoc();
        if($last_id == 0){
        echo "ปัญหาinternetไม่สเถียรกรุณาลองใหม่อีกครั้ง";
        }else{
	$data['systemallow_systemallow_id'] = $last_id['systemallow_id'];
 	$rsa = $db->update('user',$data,'user_id',$_POST['user_id']);
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
