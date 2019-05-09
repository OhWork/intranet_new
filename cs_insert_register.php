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
	if(@$_POST['reguser_internet_use'] == ''){
		$reg_internet_use = 0 ;
	}else{
		$reg_internet_use = $_POST['reguser_internet_use'] ;
	}
	if(@$_POST['reguser_minternet_use'] == ''){
		$reguser_minternet_use = 0 ;
	}else{
		$reguser_minternet_use = $_POST['reguser_minternet_use'] ;
	}
	if(@$_POST['reguser_intranet_use'] == ''){
		$reguser_intranet_use = 0 ;
	}else{
		$reguser_intranet_use = $_POST['reguser_intranet_use'] ;
	}
	if(@$_POST['reguser_eproject_use'] == ''){
		$reguser_eproject_use = 0 ;
	}else{
		$reguser_eproject_use = $_POST['reguser_eproject_use'] ;
	}
	if(@$_POST['reguser_animal_use'] == ''){
		$reguser_animal_use = 0 ;
	}else{
		$reguser_animal_use = $_POST['reguser_animal_use'] ;
	}
	if(@$_POST['reguser_hrsys_use'] == ''){
		$reguser_hrsys_use = 0 ;
	}else{
		$reguser_hrsys_use = $_POST['reguser_hrsys_use'] ;
	}
	if(@$_POST['reguser_website_use'] == ''){
		$reguser_website_use = 0 ;
	}else{
		$reguser_website_use = $_POST['reguser_website_use'] ;
	}
	if(@$_POST['reguser_esarabun_use'] == ''){
		$reguser_esarabun_use = 0 ;
	}else{
		$reguser_esarabun_use = $_POST['reguser_esarabun_use'] ;
	}
	if(@$_POST['reguser_userpasslost'] == ''){
		$reguser_userpasslost = 0 ;
	}else{
		$reguser_userpasslost = $_POST['reguser_userpasslost'] ;
	}
	if(@$_POST['reguser_other'] == ''){
		$reguser_other = 0 ;
	}else{
		$reguser_other = $_POST['reguser_other'] ;
	}
	$datenow = date("Y-m-d");
//	}else{
	@$rs = $db->insert('reguser',array(
	'reguser_name_th' => $_POST['reguser_name_th'],
	'reguser_name_en' => $_POST['reguser_name_en'],
	'reguser_position' => $_POST['reguser_position'],
	'reguser_work' => $_POST['reguser_work'],
        'reguser_date' => $datenow,
        'reguser_idcard' => $_POST['reguser_idcard'],
        'reguser_tel' => $_POST['reguser_tel'],
        'reguser_internet_use' => $reg_internet_use,
        'reguser_minternet_use' => $reguser_minternet_use,
        'reguser_intranet_use' => $reguser_intranet_use,
        'reguser_eproject_use' => $reguser_eproject_use,
        'reguser_animal_use' => $reguser_animal_use,
        'reguser_hrsys_use' => $reguser_hrsys_use,
        'reguser_website_use' => $reguser_website_use,
        'reguser_esarabun_use' => $reguser_esarabun_use,
        'reguser_userpasslost' => $reguser_userpasslost,
        'reguser_other' => $reguser_other,
        'reguser_other_detail' => $_POST['reguser_other_detail'],
        'reguser_sent_email' => $_POST['reguser_sent_email'],
        'reguser_reason_detail' => $_POST['reguser_reason_detail'],
        'reguser_other' => $_POST['reguser_other'],
        'reguser_status' => $_POST['reguser_status'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id']
	));

	//}

	if(@$rs){
    	if(@$rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}
            $link = "url=index.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
