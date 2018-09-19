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
	include 'inc_js.php';
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
// 	'news_datestart' => $_POST['newsdatestart'],
// 	'news_dateend' => $_POST['newsdateend'],
// 	'news_cover' => basename($_FILES['news_cover']['name']),
	'typeNews_typeNews_id' => $_POST['typeNews_typeNews_id'],
	'typeDesignnews_typeDesignnews_id' => $_POST['typeDesignnews_id'],
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
	    	?>
			<div class="progress">
			  <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
			    <span id="current-progress"></span>
			  </div>
			</div>
			<input id="typedesignew" type="hidden" value="<?php echo $_POST['typeDesignnews_id'];?>">
  <?php
/*
    	    if($_POST['typeDesignnews_id'] == 1 ){
    	    $link = "index.php?url=news_designtype1.php";
    	    }else if($_POST['typeDesignnews_id'] == 2 ){
            $link = "index.php?url=news_designtype2.php";
    	    }
    	}else if(@$rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
//             $link = "url=admin_index.php?url=admin_news_index.php&user_id=".$_POST['user_user_id'];
            header( "Refresh: 200; $link" );
*/
}}
ob_end_flush();
?>
<script>
	$(function() {
  var current_progress = 0;
  var interval = setInterval(function() {
      current_progress += 20;
      $("#dynamic")
      .css("width", current_progress + "%")
      .attr("aria-valuenow", current_progress)
      .text(current_progress + "% Complete");
      if (current_progress == 100){
          clearInterval(interval);
          var Typedesignnews = $('#typedesignew').val();
        if(Typedesignnews == 1 ){
			window.location.href = 'index.php?url=news_designtype1.php';
        }
        else if(Typedesignnews == 2){
	        window.location.href = 'index.php?url=news_designtype/.php';
        }
      }
  }, 500);
});
</script>
