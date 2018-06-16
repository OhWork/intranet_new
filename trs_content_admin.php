<?php
	$url = $_GET['url2'];

	if(!empty($url)){
            include_once $url;
}else{
    if(($user_zoo) >= 11 && ($user_zoo <= 18)){
    include_once 'trs_add_trs.php';
    }else{ ?>
        <div class='row'>
            <div class="col-md-4" style="float: left;">
            </div>
            <div class="col-md-4 loginwrong" style="float: left;">
                <p>สามารถเพิ่มข้อมูลได้เฉพาะสวนสัตว์เท่านั้น</p>
            </div>
            <div class="col-md-4" style="float: left;">
            </div>
        </div>
   <?php }
}
    
?>
