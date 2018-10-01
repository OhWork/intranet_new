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
	if(!empty($_POST['upweb_id'])){

		$data['upweb_status'] = $_POST['upweb_status'];
		$rsfix = $db->update('upweb',$data,'upweb_id',$_POST['upweb_id']);

	    //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'IP-address',
    	'log_action' => 'Edit',
    	'log_action_date' => date("Y-m-d H:i"),
    	'log_action_by' => $_POST['log_user'],
    	'log_ip' => $ipshow
    	));

	}
	else{
			$target_dir = 'temp/';
			$target_file = $target_dir.basename($_FILES['filUpload']['name']);
			$target_dir_save = 'storeuploadweb/'.basename($_FILES['filUpload']['name']);
			move_uploaded_file($_FILES['filUpload']['tmp_name'], $target_dir_save);


	$rs = $db->insert('upweb',array(
	'upweb_name' => $_POST['upweb_name'],
	'upweb_date' => date("Y-m-d"),
	'upweb_detail' => $_POST['upweb_detail'],
	'upweb_work' => $_POST['upweb_work'],
	'upweb_uploadfile' => basename($_FILES['filUpload']['name']),
	'upweb_email' => $_POST['upweb_email'],
	'upweb_tel' => $_POST['upweb_tel'],
	'upweb_status' => $_POST['upweb_status'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id'],
	'typeWorkupweb_typeWorkupweb_id' => $_POST['type_upweb']
	));

	}




	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	    $link = "index.php?url=cs_add_upweb.php";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
             $link = "admin_index.php?url=cs_showupweb.php";
        }
            header( "Refresh: 1; $link" );
}


?>
</html>
<?php
ob_end_flush();
?>
