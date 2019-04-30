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
	$countfiles = count($_FILES);
		if(!empty($_POST['confer_id'])){

		$data['confer_name'] = $_POST['confer_name'];
		$data['confer_people'] = $_POST['confer_num'];

		$rsfix = $db->update('conferroom',$data,'confer_id',$_POST['confer_id']);
		if($rsfix){
			$select = $db->findByPK('conferimg','confer_confer_id',$_POST['confer_id'])->executeAssoc();
			print_r($select);
			if($select != ''){
				for($i=1; $i<=$countfiles; $i++){
						$target_dir = 'temp/';
						$target_file = $target_dir.basename($_FILES['confer_pic'.$i]['name']);
						$path = 'images/confer/';
						$target_dir_save = $path.basename($_FILES['confer_pic'.$i]['name']);
						move_uploaded_file($_FILES['confer_pic'.$i]['tmp_name'], $target_dir_save);
						$data['conferimg_name'] = basename($_FILES['confer_pic'.$i]['name']);
						$data['conferimg_position'] = $i;
						$rseditpic = $db->update('conferimg',$data,'confer_id',$_POST['confer_id']);

				}
			}
			else{
				for($i=1; $i<=$countfiles; $i++){
					$target_dir = 'temp/';
					$target_file = $target_dir.basename($_FILES['confer_pic'.$i]['name']);
					$path = 'images/confer/';
					$target_dir_save = $path.basename($_FILES['confer_pic'.$i]['name']);
					move_uploaded_file($_FILES['confer_pic'.$i]['tmp_name'], $target_dir_save);
					$rspic = $db->insert('conferimg',array(
						'conferimg_name' => basename($_FILES['confer_pic'.$i]['name']),
						'conferimg_position' => $i,
						'confer_confer_id' => $_POST['confer_id']
					));
				}
			}
		}

	}else{
		$rs = $db->insert('conferroom',array(
		'confer_name' => $_POST['confer_name'],
		'confer_people' => $_POST['confer_num'],
		'zoo_zoo_id'=>$_POST['subzoo_zoo_zoo_id'],
		));
		if($rs){
				$select = $db->findAllDESC('conferroom','confer_id')->executeAssoc();
				for($i=1; $i<=$countfiles; $i++){
					$target_dir = 'temp/';
					$target_file = $target_dir.basename($_FILES['confer_pic'.$i]['name']);
					$path = 'images/confer/';
					$target_dir_save = $path.basename($_FILES['confer_pic'.$i]['name']);
					move_uploaded_file($_FILES['confer_pic'.$i]['tmp_name'], $target_dir_save);
					$rspic = $db->insert('conferimg',array(
						'conferimg_name' => basename($_FILES['confer_pic'.$i]['name']),
						'conferimg_position' => $i,
						'confer_confer_id' => $select['confer_id']
					));
				}
			}

                //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Insert-ConferenceRoom',
        	'log_action' => 'Add',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}

	if(@$rs || @$rsfix){
    	if(@$rs && $rspic){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if(@$rsfix && $rspic){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "admin_index.php?url=cf_showconfer.php";
            header( "Refresh: 2; $link" );
	}
?>
</html>
<?php
ob_end_flush();
?>
