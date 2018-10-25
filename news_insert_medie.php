<meta charset="UTF-8">
<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ob_start();
    include 'database/db_tools.php';
	include 'connect.php';
	$rs = $db-> findByPK12('newsImg','newsImg_position',1,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	$rs2 = $db-> findByPK12('newsImg','newsImg_position',2,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	$rs3 = $db-> findByPK12('newsImg','newsImg_position',3,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	$rs4 = $db-> findByPK12('newsImg','newsImg_position',4,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	$rs5 = $db-> findByPK12('newsImg','newsImg_position',5,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	$rs6 = $db-> findByPK12('newsImg','newsImg_position',6,'newsImg_connect',$_POST['new_id'])->executeAssoc();
	if(!empty($rs['newsImg_id'])){
		if(!empty($_FILES['news_picdetail'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',1,'newsImg_connect',$_POST['new_id']);
		}
	}
	if(!empty($rs2['newsImg_id'])){
		if(!empty($_FILES['news_picdetail2'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail2']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',2,'newsImg_connect',$_POST['new_id']);
		}
	}
	if(!empty($rs3['newsImg_id'])){
		if(!empty($_FILES['news_picdetail3'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail3']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',3,'newsImg_connect',$_POST['new_id']);
		}
	}
	if(!empty($rs4['newsImg_id'])){
		if(!empty($_FILES['news_picdetail4'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail4']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',4,'newsImg_connect',$_POST['new_id']);
		}
	}
	if(!empty($rs5['newsImg_id'])){
		if(!empty($_FILES['news_picdetail5'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail5']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',5,'newsImg_connect',$_POST['new_id']);
		}
	}
	if(!empty($rs6['newsImg_id'])){
		if(!empty($_FILES['news_picdetail6'])){
			$data['newsImg_name'] = basename($_FILES['news_picdetail6']['name']);
			$rseditpic = $db->update2con('newsImg',$data,'newsImg_position',6,'newsImg_connect',$_POST['new_id']);
		}
	}
	else{
		if(!empty($_FILES['news_picdetail'])){
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
		}
		if(!empty($_FILES['news_picdetail2'])){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail2']['name']);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail2']['name']);
				move_uploaded_file($_FILES['news_picdetail2']['tmp_name'], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail2']['name']),
					'newsImg_path' => $path,
					'newsImg_position' => 2,
					'newsImg_connect' => $_POST['new_id']
				));
		}
		if(!empty($_FILES['news_picdetail3'])){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail3']['name']);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail3']['name']);
				move_uploaded_file($_FILES['news_picdetail2']['tmp_name'], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail3']['name']),
					'newsImg_path' => $path,
					'newsImg_position' => 3,
					'newsImg_connect' => $_POST['new_id']
				));
		}

		if(!empty($_FILES['news_picdetail4'])){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail4']['name']);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail4']['name']);
				move_uploaded_file($_FILES['news_picdetail2']['tmp_name'], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail4']['name']),
					'newsImg_path' => $path,
					'newsImg_position' => 4,
					'newsImg_connect' => $_POST['new_id']
				));
		}

		if(!empty($_FILES['news_picdetail5'])){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail5']['name']);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail5']['name']);
				move_uploaded_file($_FILES['news_picdetail5']['tmp_name'], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail5']['name']),
					'newsImg_path' => $path,
					'newsImg_position' => 5,
					'newsImg_connect' => $_POST['new_id']
				));
		}
		if(!empty($_FILES['news_picdetail6'])){
				$target_dir = 'temp/';
				$target_file = $target_dir.basename($_FILES['news_picdetail6']['name']);
				$path = 'images/news/newsImg/';
				$target_dir_save = $path.basename($_FILES['news_picdetail6']['name']);
				move_uploaded_file($_FILES['news_picdetail6']['tmp_name'], $target_dir_save);

				$rspic2 = $db->insert('newsImg',array(
					'newsImg_name' => basename($_FILES['news_picdetail6']['name']),
					'newsImg_path' => $path,
					'newsImg_position' => 6,
					'newsImg_connect' => $_POST['new_id']
				));
		}
		if($_POST['news_vdo'] != ''){
					$rsvdo = $db->insert('newsVideo',array(
// 					'newsVideo_name' => $_POST['detail_news'],
					'newsVideo_link' => $_POST['news_vdo'],
					'newsVideo_position' => 1,
					'newsVideo_connect' => $_POST['new_id'],
				));
		}
	}
		if(@$rspic || $rspic2 || $rseditpic || $rsvdo){
			if(@$rseditpic){
				echo "<div class='statusok'>แก้ไขเสร็จสิ้น</div>";
// 				$link = "admin_index.php?url=news_show_news.php";
			}
			else{
	    	 echo "<div class='statusok'>บันทึกเสร็จสิ้น</div>";
// 			 $link = "admin_index.php?url=news_show_news.php";
			 }
//     	     header( "Refresh: 1; $link" );
    	    }
?>
