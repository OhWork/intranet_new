<?php  ob_start();
    include 'database/db_tools.php';
	include 'connect.php';

	if(!empty($_POST['hrctf_id'])){

		$data['hrctf_name'] = $_POST['hrctf_name'];
		$data['hrctf_position'] = $_POST['hrctf_position'];
		$data['hrctf_ip'] = $_POST['hrctf_ip'];
		$data['hrctf_tel'] = $_POST['hrctf_tel'];
		$data['hrctf_detail'] = $_POST['hrctf_detail'];
		$data['hrctf_date'] = $_POST['hrctf_date'];
		$data['hrctf_detail'] = $_POST['hrctf_detail'];
        $data['hrctf_adminfix'] = $_POST['hrctf_adminfix'];
		$data['subtypetools_subtypetools_id'] = $_POST['subtypetools_subtypetools_id'];
		$data['subtypetools_typetools_typetools_id'] = $_POST['subtypetools_typetools_typetools_id'];
		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];

		$rsfix = $db->update('hrctf',$data,'hrctf_id',$_POST['hrctf_id'])->execute();

	}else{
        	$rs = $db->insert('hrctf',array(
        	
        	'typectf_typectf' => $_POST['typectf_typectf'],
        	'zoo_zoo_id' => $_POST['zoo_zoo_id']
    	));
	    }

// 	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "hrs_index.php?url=hrs_add_certificate.php";
            header( "Refresh: 2; $link" );
}

ob_end_flush();
?>
