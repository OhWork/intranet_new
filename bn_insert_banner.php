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
		$data['news_datestart'] = $_POST['news_datestart'];
		$data['news_dateend'] = $_POST['news_dateend'];
		$data['user_user_id'] = $_POST['user_user_id'];
		$rsfix = $db->update('news',$data,'news_id',$_POST['id']);

	}else{

	    $target_dir = 'temp/';
	    $target_file = $target_dir.basename($_FILES['news_cover']['name']);
	    $target_dir_save = 'images/banner/'.basename($_FILES['news_cover']['name']);
	    move_uploaded_file($_FILES['news_cover']['tmp_name'], $target_dir_save);

		$rs = $db->insert('news',array(
		'news_head' => $_POST['news_head'],
		'news_datestart' => $_POST['newsdatestart'],
		'news_dateend' => $_POST['newsdateend'],
		'news_cover' => basename($_FILES['news_cover']['name']),
		'news_dateupdate' => $_POST['news_date'],
		'typeNews_typeNews_id' => $_POST['typeNews_typeNews_id'],
		'typeDesignnews_id' => $_POST['typeDesignnews_id'],
		'news_newsDetails_id' => $selectiddetail['newsDetails_id']+1,
		'news_newsImg_id' => $selectidpic['newsImg_id']+1,
		'news_newsVideo_id' => $selectidvideo['newsVideo_id']+1,
		'user_user_id' => $_POST['user_user_id']
		));

	}
	if(@$rs || @$rsfix){

    	if(@$rs){
	    	 echo "<div class='statusok'>รอซักครู่ กำลังไปหน้าถัดไป</div>";
	    	$selectiddetail = $db->findAllDESC('news','news_id')->executeAssoc();
			$idnew = $selectiddetail['news_id'];
	      	if($_POST['typeDesignnews_id'] == 1 ){
    	    $link = "admin_index.php?url=news_formdesign1.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 2 ){
            $link = "admin_index.php?url=news_formdesign2.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 3 ){
            $link = "admin_index.php?url=news_formdesign3.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 4 ){
            $link = "admin_index.php?url=news_formdesign4.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 5 ){
            $link = "admin_index.php?url=news_formdesign5.php&id=$idnew";
    	    }
    	}else if(@$rsfix){
            echo "<div class='statusok'>แก้ไขแล้ว กำลังไปหน้าถัดไป </div>";
            $selectiddetail = $db->findAllDESC('news','news_id')->executeAssoc();
			$idnew = $selectiddetail['news_id'];
            if($_POST['typeDesignnews_id'] == 1 ){
    	    $link = "admin_index.php?url=news_formdesign1.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 2 ){
            $link = "admin_index.php?url=news_formdesign2.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 3 ){
            $link = "admin_index.php?url=news_formdesign3.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 4 ){
            $link = "admin_index.php?url=news_formdesign4.php&id=$idnew";
    	    }else if($_POST['typeDesignnews_id'] == 5 ){
            $link = "admin_index.php?url=news_formdesign5.php&id=$idnew";
    	    }
        }
//             $link = "url=admin_index.php?url=admin_news_index.php&user_id=".$_POST['user_user_id'];
            header( "Refresh: 1; $link" );
}
ob_end_flush();
?>
