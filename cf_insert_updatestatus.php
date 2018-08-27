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
	if(!empty($_POST['eventconfer_id'])){
		$data['eventconfer_status'] = $_POST['eventconfer_status'];
		$data['eventconfer_comment'] = $_POST['eventconfer_comment'];
		$rsfix = $db->update('eventconfer',$data,'eventconfer_id',$_POST['eventconfer_id']);

            //Log
		if(@getenv(HTTP_X_FORWARDED_FOR)){
            @$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            @$ip = $_SERVER['REMOTE_ADDR'];
        }
            @$ipshow = gethostbyaddr($ip);
            @$log = $db->insert('log',array(
        	'log_system' => 'UpdateStatus-ConferenceRoom',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
    	echo("ไม่มี");
	}
		if(@$rs || $rsfix){
    	if(@$rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "admin_index.php?url=cf_summary.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
