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


	if(!empty($_POST['iptools_id'])){
		$data['iptools_address'] = $_POST['iptools_address'];
		$data['iptools_name'] = $_POST['iptools_name'];
		$data['iptools_detail'] = $_POST['iptools_detail'];
		$data['iptools_NAT'] = $_POST['iptools_NAT'];
		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];
		$data['subzoo_zoo_zoo_id'] = $_POST['subzoo_zoo_zoo_id'];
		$data['typetoolsforip_typetoolsforip_id'] = $_POST['typetoolsforip_typetoolsforip_id'];
        $rsfix = $db->update('iptools',$data,'iptools_id',$_POST['iptools_id']);

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
	}else{
	@$rs = $db->insert('iptools',array(
	'iptools_address' => $_POST['iptools_address'],
	'iptools_name' => $_POST['iptools_name'],
	'iptools_detail' => $_POST['iptools_detail'],
	'iptools_NAT' => $_POST['iptools_NAT'],
	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id'],
	'typetoolsforip_typetoolsforip_id' => $_POST['typetoolsforip_typetoolsforip_id']
	));

	}

	if(@$rs || $rsfix){
    	if(@$rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }

            $link = "url=admin_index.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
