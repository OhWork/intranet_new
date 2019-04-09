<?php
	ob_start();
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include 'database/db_tools.php';
	include 'connect.php';
	@$id = $_POST['new_id'];
	@$text = $_POST['text'];
	@$form_design = $_POST['form_design'];
	@$lastiddetail =$_POST['last_detail_id'];
	if($text == ''){
		if(!empty($_POST['last_detail_id'])){

// 		print_r($_POST);
			$data['newsDetails_name'] = $_POST['detail_news'];
			$rseditdetail = $db->update2con('newsdetails',$data,'newsDetails_position',1,'newsDetails_connect',$_POST['new_id']);
			if(!empty($_POST['detail_news2'])){
			$data2['newsDetails_name'] = $_POST['detail_news2'];
			$rseditdetail = $db->update2con('newsdetails',$data2,'newsDetails_position',2,'newsDetails_connect',$_POST['new_id']);
			}
		}else{
				$rs = $db->insert('newsdetails',array(
					'newsDetails_name' => $_POST['detail_news'],
					'newsDetails_position' => 1,
					'newsDetails_connect' => $_POST['new_id']

				));
				if(!empty($_POST['detail_news2'])){
					$rs2 = $db->insert('newsdetails',array(
					'newsDetails_name' => $_POST['detail_news2'],
					'newsDetails_position' => 2,
					'newsDetails_connect' => $_POST['new_id']

				));
				}

		}
		if(@$rs || @$rs2 || @$rseditdetail){
			$data['news_dateupdate'] = $_POST['date_time'];
			$rseditdate = $db->update('news',$data,'news_id',$_POST['new_id']);
				$selectiddetail = $db->findAllDESC('newsdetails','newsDetails_id')->executeAssoc();
				$lastiddetail = $selectiddetail['newsDetails_id'];
				$rsshowdetail = $db->findByPK12('newsdetails','newsDetails_position',1,'newsDetails_connect',$_POST['new_id'])->executeAssoc();
				if($form_design == 4){
					$rsshowdetail2 = $db->findByPK('newsdetails','newsDetails_connect',$_POST['new_id'])->execute();
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
		$rsshowdetail = $db->findByPK('newsdetails','newsDetails_id',$_POST['last_detail_id'])->executeAssoc();
		if(!empty($_POST['last_detail_id'])){
			if($form_design == 4){
				$rsshowdetail2 = $db->findByPK('newsdetails','newsDetails_connect',$_POST['new_id'])->execute();
				foreach($rsshowdetail2 as $abc){
					$json_data[]=array(
					 'detail'=>$abc['newsDetails_name'],
					 'lastiddetail'=>$abc['newsDetails_id'],
					 );
				}
				$json= json_encode($json_data);
				echo $json;
			}
			else{
				echo $rsshowdetail['newsDetails_name'];
			}
		}
		else{
			echo 'หากต้องการเพิ่มรายละเอียดกรุณาคลิกที่กล่อง';
		}

	}


ob_end_flush();
?>
