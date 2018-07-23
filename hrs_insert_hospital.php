<?php  ob_start();
    
    include 'database/db_tools.php';
	include 'connect.php';

	if(!empty($_POST['headncf_id'])){

		$data['headncf_name'] = $_POST['headncf_name'];
		$data['headncf_no'] = $_POST['headncf_no'];
		$data['headncf_enable'] = $_POST['headncf_enable'];

		$rsfix = $db->update('headncf',$data,'headncf_id',$_POST['headncf_id']);

	}else{
	$rs = $db->insert('hrhos',array(
	'hrhos_name' => $_POST['hrhos_name'],
	'hrhos_datestart' => $_POST['hrhos_datestart'],
	'hrhos_dateend' => $_POST['hrhos_dateend'],
	'hrhos_datereg' => $_POST['hrhos_datereg'],
	'hrhos_subname' => $_POST['hrhos_subname'],
	'hrhos_familytype' => $_POST['hrhos_familytype'],
	'hrhos_hosname' => $_POST['hrhos_hosname'],
	'hrnos_province' => $_POST['hrnos_province'],
	'hrhos_status' => $_POST['hrhos_status'],
	'zoo_zoo_id' => $_POST['zoo_zoo_id']
	
	));
                //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'insert_hospital',
        	'log_action' => 'Edit',
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
            $link = "admin_index.php?url=admin_cf_index.php&url2=cf_show_headconfer.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
