<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
	$id = $_POST['new_id'];
	$text = $_POST['text'];
	$form_design = $_POST['form_design'];
	$lastiddetail =$_POST['last_detail_id'];
	if($text == ''){
		if(!empty($_POST['last_detail_id'])){

// 		print_r($_POST);
			$data['newsDetails_name'] = $_POST['detail_news'];
			$rseditdetail = $db->update2con('newsDetails',$data,'newsDetails_position',1,'newsDetails_connect',$_POST['new_id']);
			if(!empty($_POST['detail_news2'])){
			$data2['newsDetails_name'] = $_POST['detail_news2'];
			$rseditdetail = $db->update2con('newsDetails',$data2,'newsDetails_position',2,'newsDetails_connect',$_POST['new_id']);
			}
		}else{
				$rs = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news'],
					'newsDetails_position' => 1,
					'newsDetails_connect' => $_POST['new_id']

				));
				if(!empty($_POST['detail_news2'])){
					$rs2 = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news2'],
					'newsDetails_position' => 2,
					'newsDetails_connect' => $_POST['new_id']

				));
				}

		}
		if(@$rs || @$rs2 || @$rseditdetail){
			$data['news_dateupdate'] = $_POST['date_time'];
			$rseditdate = $db->update('news',$data,'news_id',$_POST['new_id']);
				$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
				$lastiddetail = $selectiddetail['newsDetails_id'];
				$rsshowdetail = $db->findByPK12('newsDetails','newsDetails_position',1,'newsDetails_connect',$_POST['new_id'])->executeAssoc();
				if($form_design == 4){
					$rsshowdetail2 = $db->findByPK('newsDetails','newsDetails_connect',$_POST['new_id'])->execute();
					foreach($rsshowdetail2 as $abc){
						$json_data[]=array(
						 'detail'=>$abc['newsDetails_name'],
						 'lastiddetail'=>$abc['newsDetails_id'],
						 );
					}
				}
				else{
					$json_data[]=array(
					 'detail'=>$rsshowdetail['newsDetails_name'],
					 'lastiddetail'=>$rsshowdetail['newsDetails_id'],
					 );
				}
				$json= json_encode($json_data);
				echo $json;
		}
	}
	else{
		$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$_POST['last_detail_id'])->executeAssoc();
		if(!empty($_POST['last_detail_id'])){
			echo $rsshowdetail['newsDetails_name'];
		}
		else{
			echo 'หากต้องการเพิ่มรายละเอียดกรุณาคลิกที่กล่อง';
		}

	}


ob_end_flush();
?>
