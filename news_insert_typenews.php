<?php  ob_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';


	if(!empty($_POST['typeNews_id'])){

		$data['typeNews_name'] = $_POST['typeNews_name'];
		$data['typeNews_no'] = $_POST['typeNews_no'];
		$data['typeNews_enable'] = $_POST['typeNews_enable'];

		$rsfix = $db->update('typenews',$data,'typeNews_id',$_POST['typeNews_id']);

	}else{
	$rs = $db->insert('typenews',array(
	'typeNews_name' => $_POST['typeNews_name'],
	'typeNews_no' => $_POST['typeNews_no'],
	'typeNews_enable' => $_POST['typeNews_enable']
	));

	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=news_show_typenews.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
