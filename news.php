<?php
 			$rs = $db->findByPKDESCLimit21('news','user','user_user_id','user_id','news_id',4)->execute();
	
     			

      		
?>
<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
<div class='row'>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="background-color:#ffffff;">
		<h4>ข่าวสารภายในองค์การสวนสัตว์</h4>
	</div>
   	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
        <?php foreach($rs as $show){ 
            if($show['typeDesignnews_id'] == 1){
                $design = "news_designtype1";
            }else if($show['typeDesignnews_id'] == 2){
                $design = "news_designtype2";
            }else if($show['typeDesignnews_id'] == 3){
                $design = "news_designtype3";
            }else if($show['typeDesignnews_id'] == 4){
                $design = "news_designtype4";
            }else if($show['typeDesignnews_id'] == 5){
                $design = "news_designtype5";
            }		
        ?>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
				<div class='row'>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow" style="background-color:#ffffff;">
						<div class='row'>
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="margin-right:10px;">
								<div class='row'>
									<img height="100" src='images/view.jpg' />
								</div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
										<a href="index.php?url=<?php echo $design;?>.php&id=1" style="color:#000000;"><?php echo $show['news_head']; ?></a>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
										choatchaw on aug 29,2018 at 12:00 am
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
<?php } ?>
				
            
        </div>
    </div>
    
</div>
</div>
</div>
<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
<script>
$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});
</script>
