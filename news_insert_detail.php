<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
	$text = $_POST['text'];
	if($text == ''){
		if(!empty($_POST['id'])){
			$data['news_head'] = $_POST['news_head'];
			$data['news_detail'] = $_POST['news_detail'];
			$data['news_cover'] = $_POST['news_cover'];
			$data['user_user_id'] = $_POST['user_user_id'];
			$rsfix = $db->update('news',$data,'news_id',$_POST['id']);

		}else{
			$form_design = $_POST['form_design'];
			if($form_design == 1){
				for($i = 0; $i<count($_FILES['news_picdetail']['name']); $i++){
					$target_dir = 'temp/';
				    $target_file = $target_dir.basename($_FILES['news_picdetail']['name'][$i]);
				    $path = 'images/news/newsImg/';
				    $target_dir_save = $path.basename($_FILES['news_picdetail']['name'][$i]);
				    move_uploaded_file($_FILES['news_picdetail']['tmp_name'][$i], $target_dir_save);

					$rspic = $db->insert('newsImg',array(
						'newsImg_name' => basename($_FILES['news_picdetail']['name'][$i]),
						'newsImg_path' => $path,
						'newsImg_position' => 2,
						'newsImg_connect' => $_POST['new_id']
					));
				}
				$rs = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news']
				));
			}
			else if($form_design == 2){
				$rs = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news']
				));
			}
		}
		if(@$rs || @$rsfix){
			$data['news_dateupdate'] = $_POST['date_time'];
			$rseditdate = $db->update('news',$data,'news_id',$_POST['new_id']);
			if(@$rs){
				$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
				$lastiddetail = $selectiddetail['newsDetails_id'];
				$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$lastiddetail)->executeAssoc();
				echo $rsshowdetail['newsDetails_name'];
			}else if(@$rsfix){
			}
		}
	}
	else{
		$selectiddetail = $db->findAllDESC('news','news_id')->executeAssoc();
		$lastiddetailintbnew = $selectiddetail['news_newsDetails_id'];
		$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$lastiddetailintbnew)->executeAssoc();
		$lastiddetailintbdetail = $rsshowdetail['newsDetails_id']+1;
		if($lastiddetailintbnew != $lastiddetailintbdetail){
			echo 'หากต้องการเพิ่มรายละเอียดกรุณาคลิกที่กล่อง';
		}
		else if($lastiddetailintbnew != $rsshowdetail['newsDetails_id']){
			echo 'หากต้องการเพิ่มรายละเอียดกรุณาคลิกที่กล่อง';
		}
		else{
			echo $rsshowdetail['newsDetails_name'];
		}

	}


ob_end_flush();
?>
