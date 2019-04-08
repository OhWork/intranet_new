<?php
	ob_start();
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include 'database/db_tools.php';
	include 'connect.php';
	$iduser = $_POST['userid'];
	$passold = $_POST['passold'];
	$rs = $db->findbyPK('user','user_id',$iduser)->executeAssoc();
	if($rs){
		if($rs['user_pass'] != $passold){
			echo "รหัสผ่านเดิมไม่ตรงกับที่ท่านเคยสมัครไว้";
		}else{
			echo "";
		}

	}
?>
