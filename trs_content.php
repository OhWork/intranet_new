
<?php
	isset($_GET['url2'])?$url = $_GET['url2'] : $url='';//tak
	if(!empty($url)){
            include_once $url;
}else{
    include_once 'trs_showallzoo.php';
    }
    
?>
