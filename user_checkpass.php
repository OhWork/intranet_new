<?php
	ob_start();
	session_start();
	error_reporting(0);
    include 'database/db_tools.php';
	include 'connect.php';
	$iduser = $_POST['userid'];
	$passold = $_POST['passold'];
        $strPassword = mysqli_real_escape_string($conn,md5(md5(md5($passold))));
	$rs = $db->findbyPK('user','user_id',$iduser)->executeAssoc();
	if($rs){
		if($rs['user_pass'] != $strPassword){
			echo "รหัสผ่านเดิมไม่ตรงกับที่ท่านเคยสมัครไว้";
		}else{
			echo "";
		}

	}
?>
