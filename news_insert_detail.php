<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
	$id = $_POST['new_id'];
	$text = $_POST['text'];
	$form_design = $_POST['form_design'];
	if($text == ''){
		if(!empty($_POST['last_detail_id'])){
			$last_id_detail = $_POST['last_detail_id'];
			$idfirstinnewimg = $db->findByPKLimit('newsImg','newsImg_connect',$id,1)->executeAssoc();
			$firstidimg = $idfirstinnewimg['newsImg_id'];
			if($form_design == 1){
				$pic = $db->specifytable('COUNT(*)','newsImg',"newsImg_connect = '$id'")->executeAssoc();
				for($i = 0; $i<$pic['COUNT(*)']; $i++){
					$newimg_id = $firstidimg+$i;
					$target_dir = 'temp/';
					$target_file = $target_dir.basename($_FILES['news_picdetail']['name'][$i]);
					$path = 'images/news/newsImg/';
					$name_img = basename($_FILES['news_picdetail']['name'][$i]);
					$target_dir_save = $path.$name_img;
					move_uploaded_file($_FILES['news_picdetail']['tmp_name'][$i], $target_dir_save);
					$data['newsImg_name'] = $name_img;
					$rseditpic = $db->update2con('newsImg',$data,'newsImg_connect',$id,'newsImg_id',$newimg_id);
					$data2['newsDetails_name'] = $_POST['detail_news'];
					$rseditdetail = $db->update('newsDetails',$data2,'newsDetails_id',$last_id_detail);
				}
			}
			else if($form_design == 2){
				$data['newsDetails_name'] = $_POST['detail_news'];
				$rseditdetail = $db->update('newsDetails',$data,'newsDetails_id',$last_id_detail);
			}
			else if($form_design == 3){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_videodetail']['name']);
				$path = 'images/news/newsVideo/';
				$name_video = basename($_FILES['news_videodetail']['name']);
				$target_dir_save = $path.$name_video;
				move_uploaded_file($_FILES['news_videodetail']['tmp_name'], $target_dir_save);

				$data['newsDetails_name'] = $_POST['detail_news'];
				$data2['newsVideo_name'] = $name_video;
				$rseditdetail = $db->update('newsDetails',$data,'newsDetails_id',$last_id_detail);
				$rseditvideo = $db->update('newsVideo',$data2,'newsVideo_connect',$id);
			}
			else if($form_design == 4){
				$pic = $db->specifytable('COUNT(*)','newsImg',"newsImg_connect = '$id'")->executeAssoc();
				$detail = $db->specifytable('COUNT(*)','newsDetails',"newsDetails_connect = '$id'")->executeAssoc();
				for($i = 0; $i<$detail['COUNT(*)']; $i++){
					$data['newsDetails_name'] = $_POST['detail_news'][$i];
					$rseditdetail = $db->update2con('newsImg',$data,'newsImg_connect',$id,'newsImg_id',$newimg_id);
				}
					$target_dir = 'temp/';
					$target_file = $target_dir.basename($_FILES['news_videodetail']['name']);
					$path = 'images/news/newsVideo/';
					$name_video = basename($_FILES['news_videodetail']['name']);
					$target_dir_save = $path.$name_video;
					move_uploaded_file($_FILES['news_videodetail']['tmp_name'], $target_dir_save);
					$data2['newsVideo_name'] = $name_video;
					$rseditvideo = $db->update('newsVideo',$data2,'newsVideo_connect',$id);

				for($i = 0; $i<$pic['COUNT(*)']; $i++){
					$target_dir = 'temp/';
				    $target_file = $target_dir.basename($_FILES['news_picdetail']['name'][$i]);
				    $path = 'images/news/newsImg/';
				    $target_dir_save = $path.basename($_FILES['news_picdetail']['name'][$i]);
				    move_uploaded_file($_FILES['news_picdetail']['tmp_name'][$i], $target_dir_save);
					$data3['newsImg_name'] = $name_img;
					$rseditpic = $db->update2con('newsImg',$data3,'newsImg_connect',$id,'newsImg_id',$newimg_id);
				}
			}
			else if($form_design == 5){
				$pic = $db->specifytable('COUNT(*)','newsImg',"newsImg_connect = '$id'")->executeAssoc();

				$data['newsDetails_name'] = $_POST['detail_news'];
				$rseditdetail = $db->update('newsDetails',$data,'newsDetails_id',$last_id_detail);

				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_videodetail']['name']);
				$path = 'images/news/newsVideo/';
				$name_video = basename($_FILES['news_videodetail']['name']);
				$target_dir_save = $path.$name_video;
				move_uploaded_file($_FILES['news_videodetail']['tmp_name'], $target_dir_save);
				$data2['newsVideo_name'] = $name_video;
				$rseditvideo = $db->update('newsVideo',$data2,'newsVideo_connect',$id);

				for($i = 0; $i<$pic['COUNT(*)']; $i++){
					$target_dir = 'temp/';
				    $target_file = $target_dir.basename($_FILES['news_picdetail']['name'][$i]);
				    $path = 'images/news/newsImg/';
				    $target_dir_save = $path.basename($_FILES['news_picdetail']['name'][$i]);
				    move_uploaded_file($_FILES['news_picdetail']['tmp_name'][$i], $target_dir_save);
					$data3['newsImg_name'] = $name_img;
					$rseditpic = $db->update2con('newsImg',$data3,'newsImg_connect',$id,'newsImg_id',$newimg_id);
				}
			}
			if(@$rseditpic){
			$data['news_dateupdate'] = $_POST['date_time'];
			$rseditdate = $db->update('news',$data,'news_id',$_POST['new_id']);
			if(@$rseditpic){
				$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
				$selectidpic = $db->findAllDESC('newsImg','newsImg_id')->executeAssoc();
				$selectidvideo = $db->findAllDESC('newsVideo','newsVideo_id')->executeAssoc();
				$lastiddetail = $selectiddetail['newsDetails_id'];
				$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$lastiddetail)->executeAssoc();
				$json_data[]=array(
					 'detail'=>$rsshowdetail['newsDetails_name'],
					 'lastiddetail'=>$lastiddetail,
					 );
				$json= json_encode($json_data);
				echo $json;

			}
		}
		}else{
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
		else if($form_design == 3){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_videodetail']['name']);
				$path = 'images/news/newsVideo/';
				$target_dir_save = $path.basename($_FILES['news_videodetail']['name']);
				move_uploaded_file($_FILES['news_videodetail']['tmp_name'], $target_dir_save);

				$rspic = $db->insert('newsVideo',array(
					'newsVideo_name' => basename($_FILES['news_videodetail']['name']),
					'newsVideo_link' => $path,
					'newsVideo_position' => 2,
					'newsVideo_connect' => $_POST['new_id']
				));
				$rs = $db->insert('newsDetails',array(
					'newsDetails_name' => $_POST['detail_news']
				));
			}
		else if($form_design == 4){
				for($i = 0; $i<count($_POST['detail_news']); $i++){
					$rs = $db->insert('newsDetails',array(
						'newsDetails_name' => $_POST['detail_news'][$i],
						'newsDetails_position' => $i,
						'newsDetails_connect' => $_POST['new_id']

					));
				}
				$rspic = $db->insert('newsVideo',array(
					'newsVideo_name' => basename($_FILES['news_videodetail']['name']),
					'newsVideo_link' => $path,
					'newsVideo_position' => 2,
					'newsImg_connect' => $_POST['new_id']
				));
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
			}
		else if($form_design == 5){
					$rs = $db->insert('newsDetails',array(
						'newsDetails_name' => $_POST['detail_news'],
					));
				$rspic = $db->insert('newsVideo',array(
					'newsVideo_name' => basename($_FILES['news_videodetail']['name']),
					'newsVideo_link' => $path,
					'newsVideo_position' => 2,
// 					'newsImg_connect' => $_POST['new_id']
				));
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
			}

		}
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


ob_end_flush();
?>
