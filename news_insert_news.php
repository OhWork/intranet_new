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

	if(!empty($_POST['id'])){

		$data['news_head'] = $_POST['news_head'];
		$data['news_detail'] = $_POST['news_detail'];
		$data['news_date'] = $_POST['news_date'];
		$data['user_user_id'] = $_POST['user_user_id'];
		$rsfix = $db->update('news',$data,'news_id',$_POST['id']);
	
	}else{
	$rs = $db->insert('news',array(
	'news_head' => $_POST['news_head'],
	'news_detail' => $_POST['news_detail'],
	'news_date' => $_POST['news_date'],
	'user_user_id' => $_POST['user_user_id']
	));
	}	
	
	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=admin_news_index.php&user_id=".$_POST['user_user_id'];
            header( "Refresh: 2; $link" );
}		
ob_end_flush();		
?>