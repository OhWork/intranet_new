<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>(New)</title>
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['zlfot_id'])){

		
                                    if($_POST['zlfot_status'] == 'T'){
                                        $data['zlfot_post'] = $_POST['zlfot_post'];
                                         $data['zlfot_status'] = $_POST['zlfot_status'];
                                          $rsfix = $db->update('zlfot',$data,'zlfot_id',$_POST['zlfot_id']);
                                    }else if($_POST['zlfot_status'] == 'C'){
                                        $data['zlfot_receiptfin'] = $_POST['zlfot_receiptfin'];
                                         $data['zlfot_status'] = $_POST['zlfot_status'];
                                           $rsfix = $db->update('zlfot',$data,'zlfot_id',$_POST['zlfot_id']);
                                    }else{
                                        $data['zlfot_status'] = $_POST['zlfot_status'];
                                           $rsfix = $db->update('zlfot',$data,'zlfot_id',$_POST['zlfot_id']);
                                    }
                               
            //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Status-Zoolover',
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
                    switch ($_POST['zlfot_status']){
                          case "P":
                             $link = "admin_index.php?url=zlfot_show_checkmember.php&type=665f644e43731ff9db3d341da5c827e1";
                            break;
                          case "S":
                            $link = "admin_index.php?url=zlfot_show_checkmember.php&type=38026ed22fc1a91d92b5d2ef93540f20";
                            break;
                          case "T":
                            $link = "admin_index.php?url=zlfot_show_checkmember.php&type=011ecee7d295c066ae68d4396215c3d0";
                            break;
                        case "C":
                            $link = "admin_index.php?url=zlfot_show_member.php";
                            break;
                    }
           
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
