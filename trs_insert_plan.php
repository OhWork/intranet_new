<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['plan_id'])){
		$data['plan_status'] = $_POST['plan_status'];

		$rs = $db->update('plan',$data,'plan_id',$_POST['plan_id']);
        if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Touristreport System',
        	'log_action' => 'plan Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
	$rs = $db->insert('plan',array(
    'plan_date' => $_POST['plan_date'],
	'plan_adult' => $_POST['plan_adult'],
	'plan_child' => $_POST['plan_child'],
	'plan_ch_pj' => $_POST['plan_ch_pj'],
	'plan_sp_ch' => $_POST['plan_sp_ch'],
	'plan_f_ch' => $_POST['plan_f_ch'],
	'plan_f_ad' => $_POST['plan_f_ad'],
	'plan_chsafari_adult' => $_POST['plan_chsafari_adult'],
	'plan_chsafari_child' => $_POST['plan_chsafari_child'],
	'plan_sfsafari_ad' => $_POST['plan_sfsafari_ad'],
	'plan_sfsafari_ch' => $_POST['plan_sfsafari_ch'],
	'plan_free' => $_POST['plan_free'],
	'plan_count'=> $_POST['plan_count'],
	'plan_status'=> $_POST['plan_status'],
	'plan_zoo_zoo_id' => $_POST['plan_zoo_zoo_id']
	));
	 if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Touristreport System',
        	'log_action' => 'Plan Add',
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
            $link = "url=admin_index.php";
            header( "Refresh: 2; $link" );
}else{
            echo "Error!!";
        }
?>
</html>
<?php
ob_end_flush();
?>
