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
	if(!empty($_POST['problem_id']) && !empty($_POST['problem_adminfix'])){

		$data['problem_status'] = $_POST['problem_status'];
		$data['problem_dateend'] = $_POST['problem_dateend'];
		$data['problem_dateorder'] = $_POST['problem_dateorder'];
		$data['problem_serial'] = $_POST['problem_serial'];
		$data['problem_place'] = $_POST['problem_place'];
		$data['problem_serialorganize'] = $_POST['problem_serialorganize'];
		$data['problem_detailcomplete'] = $_POST['problem_detailcomplete'];
		$data['problem_detailwaitcomplete'] = $_POST['problem_detailwaitcomplete'];
        $data['problem_adminfix'] = $_POST['problem_adminfix'];
		$rsfix = $db->update('problem',$data,'problem_id',$_POST['problem_id']);
            //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Status-ComputerService',
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
            $link = "admin_index.php?url=cs_show_fixproblem.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
