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


	if(!empty($_POST['typeWorkupweb_id'])){

		$data['typeWorkupweb_name'] = $_POST['typeWorkupweb_name'];

		$rsfix = $db->update('typeWorkupweb',$data,'typeWorkupweb_id',$_POST['typeWorkupweb_id']);

	}else{
	$rs = $db->insert('typeWorkupweb',array(
	'typeWorkupweb_name' => $_POST['typeWorkupweb_name']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=cs_add_typeworkupweb.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
