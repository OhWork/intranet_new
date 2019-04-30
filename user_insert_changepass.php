<?php  ob_start();
       error_reporting(0);
        include 'database/db_tools.php';
	include 'connect.php';
	?>
	<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
	<?php
        if(!empty($_POST['user_id'])){

		$data['user_pass'] = md5(md5(md5($_POST['user_pass'])));
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
ob_end_flush();

?>
