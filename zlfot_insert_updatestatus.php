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
	if(!empty($_POST['zlfotcard_id'])){

		
                                    if($_POST['zlfotcard_stsfw'] == 'T'){
                                         $data['zlfotcard_stsfw'] = $_POST['zlfot_stsfw'];
                                          $rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['zlfotcard_id']);
                                          if($_POST['sendcard_status'] =='Y'){
                                          $rs = $db->insert('postoffice',array(
                                                    'sendcard_post' => $_POST['sendcard_post'],
                                                    'sendcard_status' => $_POST['sendcard_status'],
                                                    'sendcard_date' => $_POST['sendcard_date'],
                                                     'zlfotmember_zlfotmember_id' => $_POST['zlfotcard_id'],
                                                    'postoffice_postoffice_id' => $_POST['postoffice_postoffice_id']
                                                    ));
                                          }else if($_POST['sendcard_status'] =='N'){
                                              $rs = $db->insert('postoffice',array(
                                                    'sendcard_status' => $_POST['sendcard_status'],
                                                    'sendcard_date' => $_POST['sendcard_date'],
                                                    'zlfotmember_zlfotmember_id' => $_POST['zlfotcard_id'],
                                                    'postoffice_postoffice_id' => $_POST['postoffice_postoffice_id']
                                                    ));
                                          }
                                    }else if($_POST['zlfot_stsfw'] == 'C'){
                                        $data['zlfot_receiptfin'] = $_POST['zlfot_receiptfin'];
                                         $data['zlfotcard_stsfw'] = $_POST['zlfotcard_stsfw'];
                                           $rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['zlfotcard_id']);
                                    }else{
                                        $data['zlfotcard_stsfw'] = $_POST['zlfotcard_stsfw'];
                                           $rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['zlfotcard_id']);
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
                             $link = "admin_index.php?url=zlfot_show_checkmember.php&type=2";
                              header( "Refresh: 2; $link" );
                            break;
                          case "S":
                            $link = "admin_index.php?url=zlfot_show_checkmember.php&type=3";
                              header( "Refresh: 2; $link" );
                            break;
                          case "T":
                            $link = "admin_index.php?url=zlfot_show_checkmember.php&type=4";
                              header( "Refresh: 2; $link" );
                            break;
                        case "C":
                            $link = "admin_index.php?url=zlfot_show_member.php";
                            header( "Refresh: 2; $link" );
                            break;
                    }
            
}
?>
</html>
<?php
ob_end_flush();
?>
