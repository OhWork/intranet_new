<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
		$target_dir = 'temp/';
		$target_file = $target_dir.basename($_FILES['news_picdetail']['name']);
		$path = 'images/news/newsImg/';
		$target_dir_save = $path.basename($_FILES['news_picdetail']['name']);
		move_uploaded_file($_FILES['news_picdetail']['tmp_name'], $target_dir_save);

		$rspic = $db->insert('newsImg',array(
			'newsImg_name' => basename($_FILES['news_picdetail']['name']),
			'newsImg_path' => $path,
			'newsImg_position' => 1,
			'newsImg_connect' => $_POST['new_id']
		));
		if(!empty($_FILES['news_picdetail2'])){
			for($i = 0; $i<count($_FILES['news_picdetail2']['name']); $i++){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail2']['name'][$i]);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail2']['name'][$i]);
				move_uploaded_file($_FILES['news_picdetail2']['tmp_name'][$i], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail2']['name'][$i]),
					'newsImg_path' => $path,
					'newsImg_position' => 2,
					'newsImg_connect' => $_POST['new_id']
				));
			}
		}
		if(@$rspic || $rspic2){
	    	 echo "<div class='statusok'>บันทึกเสร็จสิ้น</div>";
			 $link = "admin_index.php?url=news_show_news.php";
    	     header( "Refresh: 1; $link" );
    	    }
?>
