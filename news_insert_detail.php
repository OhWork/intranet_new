<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
	$id = $_POST['new_id'];
	$text = $_POST['text'];
	$form_design = $_POST['form_design'];
	$lastiddetail =$_POST['last_detail_id'];
// 	if($text == ''){
		if(!empty($_POST['last_detail_id'])){

		}else{
				$rs = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news']
				));

		}
/*
		if(@$rs){
			$data['news_dateupdate'] = $_POST['date_time'];
			$rseditdate = $db->update('news',$data,'news_id',$_POST['new_id']);
			if(@$rs){
				$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
				$selectidpic = $db->findAllDESC('newsImg','newsImg_id')->executeAssoc();
				$selectidvideo = $db->findAllDESC('newsVideo','newsVideo_id')->executeAssoc();
				$lastiddetail = $selectiddetail['newsDetails_id'];
				$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$lastiddetail)->executeAssoc();
				if($form_design == 4){
					$rsshowdetail2 = $db->findByPK('newsDetails','newsDetails_connect',$id)->execute();
					foreach($rsshowdetail2 as $abc){
						$json_data[]=array(
						 'detail'=>$abc['newsDetails_name'],
						 'lastiddetail'=>$lastiddetail,
						 );
					}
				}
				else{
					$json_data[]=array(
					 'detail'=>$rsshowdetail['newsDetails_name'],
					 'lastiddetail'=>$lastiddetail,
					 );
				}
				$json= json_encode($json_data);
				echo $json;

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
*/


ob_end_flush();
?>
