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
	echo "<pre>";
	print_r($_POST);
//เนื่องจากรับข้อมูลทางเดียว
//	if(!empty($_POST['iptools_id'])){
//		$data['iptools_address'] = $_POST['iptools_address'];
//		$data['iptools_name'] = $_POST['iptools_name'];
//		$data['iptools_detail'] = $_POST['iptools_detail'];
//		$data['iptools_NAT'] = $_POST['iptools_NAT'];
//		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];
//		$data['subzoo_zoo_zoo_id'] = $_POST['subzoo_zoo_zoo_id'];
//		$data['typetoolsforip_typetoolsforip_id'] = $_POST['typetoolsforip_typetoolsforip_id'];
//        $rsfix = $db->update('iptools',$data,'iptools_id',$_POST['iptools_id']);

    //Log
		if(getenv('HTTP_X_FORWARDED_FOR')){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    $ipshow = gethostbyaddr($ip);
    $log = $db->insert('log',array(
	'log_system' => 'IP-tools',
	'log_action' => 'Edit',
	'log_action_date' => date("Y-m-d H:i"),
	'log_action_by' => $_POST['log_user'],
	'log_ip' => $ipshow
	));
//	}else{
/*
	@$rs = $db->insert('reguser',array(
	'reguser_name_th' => $_POST['reguser_name_th'],
	'reguser_name_en' => $_POST['reguser_name_en'],
	'reguser_position' => $_POST['reguser_position'],
	'reguser_work' => $_POST['reguser_work'],
                'reguser_date' => $_POST['reguser_date'],
                'reguser_idcard' => $_POST['reguser_idcard'],
                'reguser_tel' => $_POST['reguser_tel'],
                'reguser_internet_use' => $_POST['reguser_internet_use'],
                'reguser_minternet_use' => $_POST['reguser_minternet_use'],
                'reguser_intranet_use' => $_POST['reguser_intranet_use'],
                'reguser_eproject_use' => $_POST['reguser_eproject_use'],
                'reguser_animal_use' => $_POST['reguser_animal_use'],
                'reguser_hrsys_use' => $_POST['reguser_hrsys_use'],
                'reguser_website_use' => $_POST['reguser_website_use'],
                'reguser_esarabun_use' => $_POST['reguser_esarabun_use'],
                'reguser_userpasslost' => $_POST['reguser_userpasslost'],
                'reguser_other' => $_POST['reguser_other'],
                'reguser_other_detail' => $_POST['reguser_other_detail'],
                'reguser_sent_email' => $_POST['reguser_sent_email'],
                'reguser_reson_detail' => $_POST['reguser_reson_detail'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id']
	));
*/

	//}

	if(@$rs || $rsfix){
    	if(@$rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}
            $link = "url=admin_index.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
