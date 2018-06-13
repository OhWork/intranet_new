<?php
	session_start();
	ob_start();
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d H:i");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบintranet</title>
	</head>
<?php
	include_once 'database/db_tools.php';
	include_once 'connect.php';

	$db->findByAttributes('user',array(
		'user_user =' => $_POST['user_user'],
		'user_pass =' => $_POST['user_pass']
		));
	$rs = $db->executeRow();
	$system_id = $rs['systemallow_systemallow_id'];
    $rsallow = $db->findByPK('systemallow','systemallow_id',$system_id)->executeAssoc();
	if($rs){
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
		$_SESSION['subzoo_subzoo_id'] = $rs['subzoo_subzoo_id'];
		$_SESSION['subzoo_zoo_zoo_id'] = $rs['subzoo_zoo_zoo_id'];
		?>
		<script>
			alert('เข้าสู่ระบบได้เรียบร้อย');
			window.location.href = 'admin_index.php';
		</script>
		<?php
		//header('location: admin_index.php');
		$log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
		 //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
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
	}else{
		?>
		<script>
			alert('ไอดีหรือรหัสผิดพลาด กรุณาลองใหม่');
			window.location.href = 'index.php';
		</script>
		<?php
		//header('location: admin_index.php');
		$login_confirm = 0;
		echo "<div class='loginwrong'>ไอดีหรือรหัสผิดพลาด กรุณาลองใหม่</div>";
	}

?>
</html>
