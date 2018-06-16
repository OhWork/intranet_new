<!-- <div class="content"> -->


<?php
	$url = $_GET['url2'];

	if(empty($_SESSION['user_name'])){
		include_once 'login.php';
		}
	if(!empty($url)){
		include_once $url;
}else{
    include_once 'user_show_updatereport.php';
}
    
?>
<!-- </div> -->