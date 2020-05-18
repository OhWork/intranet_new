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


	if(!empty($_POST['vdo_id'])){

		$data['typetools_name'] = $_POST['typetools_name'];

        $rsfix = $db->update('typetools',$data,'typetools_id',$_POST['typetools_id']);
        if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'insert-VDO',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
                $vdo_link = substr($_POST['vdo_link'], -11);
	$rs = $db->insert('vdo',array(
	'vdo_name' => $_POST['vdo_name'],
                'vdo_link' => $vdo_link,
                'vdo_datereg' => $_POST['vdo_datereg'],
                'vdo_datestart' => $_POST['vdo_datestart']
	));
        if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Insert-VDO',
        	'log_action' => 'Add',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=yt_add_vdo.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
