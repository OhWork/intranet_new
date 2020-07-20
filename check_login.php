<?php
	session_start();
	ob_start();
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d H:i");
	include_once 'database/db_tools.php';
	include_once 'connect.php';
header("Content-type:text/html; charset=UTF-8");              
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false);   
if($_POST['user_user']!="" && $_POST['user_pass']!=""){
// ส่วนของการเชิ่อมต่อกับฐานข้อมูล   
	$db->findByAttributes('user',array(
		'user_user =' => $_POST['user_user'],
		'user_pass =' => md5(md5(md5($_POST['user_pass'])))
		));

	$rs = $db->executeRow();
	$system_id = $rs['systemallow_systemallow_id'];
	$subzoo_id = $rs['subzoo_subzoo_id'];
         $rsallow = $db->findByPK('systemallow','systemallow_id',$system_id)->executeAssoc();
        $rssubzoo = $db->findByPK('subzoo','subzoo_id',$subzoo_id)->executeAssoc(); 
 
    if($rs>0){
                $_SESSION['user_id'] = $rs['user_id'];
		$_SESSION['user_name'] = $rs['user_name'];
		$_SESSION['user_last'] = $rs['user_last'];
		$_SESSION['systemallow_admin'] = $rsallow['systemallow_admin'];
		$_SESSION['systemallow_drive'] = $rsallow['systemallow_drive'];
		$_SESSION['systemallow_news'] = $rsallow['systemallow_news'];
		$_SESSION['systemallow_service'] = $rsallow['systemallow_service'];
		$_SESSION['systemallow_confer'] = $rsallow['systemallow_confer'];
		$_SESSION['systemallow_touristreport'] = $rsallow['systemallow_touristreport'];
		$_SESSION['systemallow_km'] = $rsallow['systemallow_km'];
		$_SESSION['systemallow_hrs'] = $rsallow['systemallow_hrs'];
                $_SESSION['systemallow_vdo'] = $rsallow['systemallow_vdo'];
                $_SESSION['systemallow_zlfot'] = $rsallow['systemallow_zlfot'];
		$_SESSION['systemallow_qtn'] = $rsallow['systemallow_qtn'];
                $_SESSION['systemallow_ts'] = $rsallow['systemallow_ts'];
		$_SESSION['subzoo_sc'] = $rssubzoo['subzoo_sc'];
		$_SESSION['subzoo_enable'] = $rssubzoo['subzoo_enable'];
		$_SESSION['subzoo_subzoo_id'] = $rs['subzoo_subzoo_id'];
		$_SESSION['subzoo_zoo_zoo_id'] = $rs['subzoo_zoo_zoo_id'];
                	$log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
		 //Log
        if(@getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'เข้าระบบ',
    	'log_action' => 'Login',
    	'log_action_date' => $date,
    	'log_action_by' => $log_user,
    	'log_ip' => $ipshow
    	));
        echo "1";  // เมื่อล็อกอินผ่าน
    }else{
        echo "0";   
    }
}else{
    echo "0";   
}
?>