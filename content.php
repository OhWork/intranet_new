
<?php
	@$url = $_GET['url'];

	if(!empty($url)){
    	?>
    	<div class="col-10">
          <?php  include_once $url; ?>
    	</div>
            <?php
}else{
    include_once 'main.php';
    }
    
?>
