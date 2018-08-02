<?php  ob_start();
    include 'database/db_tools.php';
	include 'connect.php';

	if(!empty($_POST['hrctf_id'])){

		$data['hrctf_name'] = $_POST['hrctf_name'];
		$data['hrctf_position'] = $_POST['hrctf_position'];
		$data['hrctf_datestartwork'] = $_POST['hrctf_datestartwork'];
		$data['hrctf_datestarthos'] = $_POST['hrctf_datestarthos'];
		$data['hrctf_dateupdate'] = $_POST['hrctf_dateupdate'];
		$data['hrctf_familytype'] = $_POST['hrctf_familytype'];
		$data['hrctf_familyname'] = $_POST['hrctf_familyname'];
        $data['hrctf_educationname'] = $_POST['hrctf_educationname'];
        $data['hrctf_salary'] = $_POST['hrctf_salary'];
        $data['hrctf_whoname'] = $_POST['hrctf_whoname'];
        $data['hrctf_whofu'] = $_POST['hrctf_whofu'];
        $data['hrctf_status'] = $_POST['hrctf_status'];
		$data['subtypetools_subtypetools_id'] = $_POST['subtypetools_subtypetools_id'];
		$data['typectf_typectf_id'] = $_POST['typectf_typectf_id'];
		$data['zoo_zoo_id'] = $_POST['zoo_zoo_id'];

		$rsfix = $db->update('hrctf',$data,'hrctf_id',$_POST['hrctf_id'])->execute();

	}else{
        	$rs = $db->insert('hrctf',array(
        	'hrctf_name' => $_POST['hrctf_name'],
        	'hrctf_position' => $_POST['hrctf_position'],
        	'hrctf_datestartwork' => $_POST['hrctf_datestartwork'],
        	'hrctf_datestarthos' => $_POST['hrctf_datestarthos'],
            'hrctf_datereg' => $_POST['hrctf_datereg'],
            'hrctf_dateupdate' => $_POST['hrctf_dateupdate'],
        	'hrctf_familytype' => $_POST['hrctf_familytype'],
        	'hrctf_familyname' => $_POST['hrctf_familyname'],
        	'hrctf_hosname' => $_POST['hrctf_hosname'],
        	'hrctf_educationname' => $_POST['hrctf_educationname'],
        	'hrctf_salary' => $_POST['hrctf_salary'],
        	'hrctf_whoname' => $_POST['hrctf_whoname'],
        	'hrctf_whofu' => $_POST['hrctf_whofu'],
        	'hrctf_status' => $_POST['hrctf_status'],
        	'typectf_typectf_id' => $_POST['typectf_typectf_id'],
        	'zoo_zoo_id' => $_POST['zoo_zoo_id']
    	));
	    }


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
