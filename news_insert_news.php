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
		$data['news_cover'] = $_POST['news_cover'];
		$data['user_user_id'] = $_POST['user_user_id'];
		$rsfix = $db->update('news',$data,'news_id',$_POST['id']);

	}else{

    $target_dir = 'temp/';
    $target_file = $target_dir.basename($_FILES['news_cover']['name']);
    $target_dir_save = 'images/news/'.basename($_FILES['news_cover']['name']);
    move_uploaded_file($_FILES['news_cover']['tmp_name'], $target_dir_save);


	$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
	$rs = $db->insert('news',array(
	'news_head' => $_POST['news_head'],
	'news_datestart' => $_POST['newsdatestart'],
	'news_dateend' => $_POST['newsdateend'],
	'news_cover' => basename($_FILES['news_cover']['name']),
	'typeNews_typeNews_id' => $_POST['typeNews_typeNews_id'],
	'typeDesignnews_id' => $_POST['typeDesignnews_id'],
	'news_newsDetails_id' => $selectiddetail['newsDetails_id']+1,
	'user_user_id' => $_POST['user_user_id']
	));

/*
	$rs2 = $db->insert('newsDetails',array(
	'newsDetails_name' => $_POST['news_detail']
	));
*/
	}
	if(@$rs || @$rsfix){

    	if(@$rs){
	    	 echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
	      	if($_POST['typeDesignnews_id'] == 1 ){
    	    $link = "index.php?url=news_formdesign1.php";
    	    }else if($_POST['typeDesignnews_id'] == 2 ){
            $link = "index.php?url=news_designtype2.php";
    	    }
    	}else if(@$rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
//             $link = "url=admin_index.php?url=admin_news_index.php&user_id=".$_POST['user_user_id'];
            header( "Refresh: 2; $link" );
}
ob_end_flush();
?>
