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

		$rs = $db->update('hrctf',$data,'hrctf_id',$_POST['hrctf_id'])->execute();

	}else{
      if($_POST['subzoo_zoo_zoo_id'] == '' || $_POST['subtypetools_subtypetools_id'] == 0 || $_POST['subtypetools_typetools_typetools_id'] == 0 || $_POST['subzoo_subzoo_id'] == 0 || $_POST['subzoo_zoo_zoo_id'] == 0){
          echo("กรุณาติดต่อเจ้าหน้าที่ไอที Call 1043");
      }else{
        	$rs = $db->insert('hrctf',array(
        	'hrctf_name' => $_POST['hrctf_name'],
        	'hrctf_position' => $_POST['hrctf_position'],
        	'hrctf_datestart' => $_POST['hrctf_datestart'],
            'hrctf_datereg' => $_POST['hrctf_datereg'],
            'hrctf_dateupdate' => $_POST['hrctf_dateupdate'],
        	'hrctf_familytype' => $_POST['hrctf_familytype'],
        	'hrctf_familyname' => $_POST['hrctf_familyname'],
        	'hrctf_hosname' => $_POST['hrctf_hosname'],
        	'hrctf_recipient' => $_POST['hrctf_recipient'],
        	'hrctf_educationname' => $_POST['hrctf_educationname'],
        	'hrctf_salary' => $_POST['hrctf_salary'],
        	'hrctf_ctfname' => $_POST['hrctf_ctfname'],
        	'hrctf_whoname' => $_POST['hrctf_whoname'],
        	'hrctf_whofu' => $_POST['hrctf_whofu'],
        	'typectf_typectf' => $_POST['typectf_typectf'],
        	'zoo_zoo_id' => $_POST['zoo_zoo_id']
    	));
	    }
	}
// 	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "cs_index.php?url=cs_add_hrctf.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
