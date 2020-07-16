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

        
	if(!empty($_POST['subzoo_id'])){
		$data['subzoo_name'] = $_POST['subzoo_name'];
		$data['subzoo_year'] = $_POST['subzoo_year'];
		$data['subzoo_no'] = $_POST['subzoo_no'];
		$data['subzoo_detail'] = $_POST['subzoo_detail'];
		$data['subzoo_enable'] = $_POST['subzoo_enable'];
		$rsfix = $db->update('subzoo',$data,'subzoo_id',$_POST['subzoo_id']);

	}else{
	$rs = $db->insert('zlfotmember',array(
	'zlfotmember_nameth' => $_POST['zlfotmember_nameth'],
	'zlfotmember_nameen' => $_POST['zlfotmember_nameen'],
                'zlfotmember_tel' => $_POST['zlfotmember_tel'],
               	'zlfotmember_address' => $_POST['zlfotmember_address'],
                'zlfotmember_subdistrict' => $_POST['zlfotmember_subdistricts_id'],
            'zlfotmember_subdistrict' => $_POST['zlfotmember_subdistricts_id'],
            'zlfotmember_districts_id' => $_POST['zlfotmember_districts_id'],
            'zlfotmember_province_id' => $_POST['zlfotmember_province_id'],
	'zlfot_datereg' => $_POST['zlfot_datereg'],
                
                'zlfot_dateend' => $dateend,
                'zlfot_status' => $_POST['zlfot_status'],
                'zlfot_email' => $_POST['zlfot_email'],
                'zlfot_detail' => $_POST['zlfot_detail'],
	'user_user_id' => $_POST['user_user_id']
	));
	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
           }
            $link = "url=admin_index.php?url=zlfot_show_checkmember.php&type=28c8edde3d61a0411511d3b1866f0636";
            header( "Refresh: 2; $link" );
        }else{
            echo "ข้อมูลไม่เข้าฐานข้อมูล";
        }
?>
</html>
<?php
ob_end_flush();
?>
