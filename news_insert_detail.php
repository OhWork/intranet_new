<?php  ob_start();?>
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
	$rs = $db->insert('newsDetails',array(
	'newsDetails_name' => $_POST['news_detail']
	));

	}
	if(@$rs || @$rsfix){

    	if(@$rs){
	    	$selectiddetail = $db->findAllDESC('newsDetails','newsDetails_id')->executeAssoc();
	    	$lastiddetail = $selectiddetail['newsDetails_id'];
	    	$rsshowdetail = $db->findByPK('newsDetails','newsDetails_id',$lastiddetail)->executeAssoc();
	    	echo $rsshowdetail['newsDetails_name'];
    	}else if(@$rsfix){
        }
}
ob_end_flush();
?>
