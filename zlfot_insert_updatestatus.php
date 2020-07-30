<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>(New)</title>
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['zlfotcard_id'])){          
                         $data['zlfotcard_status'] = $_POST['zlfotcard_status'];
                        $data['zlfotcard_stsfw'] = $_POST['zlfotcard_stsfw'];
                        $rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['zlfotcard_id']);
            
          
            //Log
	if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Status-Zoolover',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
    	$link = "login.php";
        header( "Refresh: 2; $link" );
	}
		if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
                    }
                             $link = "admin_index.php?url=zlfot_show_checkmember.php&type=2";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
