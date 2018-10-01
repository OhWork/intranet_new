<?php
	$url = $_GET['url2'];

	if(!empty($url)){
            include_once $url;
}else{
    include_once 'cs_summary.php';
    }
    
?>
