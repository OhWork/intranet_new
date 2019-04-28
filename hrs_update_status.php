<?php  ob_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include 'database/db_tools.php';
	include 'connect.php';

	if(!empty($_POST['hrctf_id'])){
		$data['hrctf_dateupdate'] = $_POST['hrctf_dateupdate'];
        $data['hrctf_recipient'] = $_POST['hrctf_recipient'];
        $data['hrctf_moneyroom'] = $_POST['hrctf_moneyroom'];
        $data['hrctf_status'] = $_POST['hrctf_status'];
// 		$data['zoo_zoo_id'] = $_POST['zoo_zoo_id'];

		$rsfix = $db->update('hrctf',$data,'hrctf_id',$_POST['hrctf_id']);
        if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Hrs_System',
        	'log_action' => 'Update',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
        	echo "ไม่มี";
    	
	    }


	if($rsfix){
            echo "<div class='statusok'>ปรับปรุงสถานะสำเร็จ</div>";
            $link = "admin_index.php?url=hrs_show_editcertificate.php";
        }
            
            header( "Refresh: 2; $link" );

ob_end_flush();
?>
