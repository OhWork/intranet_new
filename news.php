<?php
 			$rs = $db->findByPKDESCLimit21('news','user','user_user_id','user_id','news_id',4)->execute();
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class='row'>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#ffffff;">
			<div class='row'>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 alltxh">
					<h4>ข่าวสารภายในองค์การสวนสัตว์</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow" style="background-color:#ffffff;">
										<div class='row'>
											<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="margin-right:10px;">
												<div class='row'>
<!-- 													<img height="100" src='images/news/<?php echo $show['news_cover']; ?>' /> -->
														<?php
														if($show['subzoo_zoo_zoo_id'] == 11){
														?>
                                                        	<img height="100" src='images/logo/Dusitzoo.png' />
                                                        <?php
	                                                    }else if($show['subzoo_zoo_zoo_id'] == 12){
		                                                ?>
		                                                   	<img height="100" src='images/logo/KKOzoo.png' />
		                                                <?php
	                                                     }else if($show['subzoo_zoo_zoo_id'] == 13){
		                                                ?>
		                                                   	<img height="100" src='images/logo/chiangmai.png' />
		                                                <?php
	                                                     }else if($show['subzoo_zoo_zoo_id'] == 14){
		                                                ?>
		                                                   	<img height="100" src='images/logo/Nakhonrachsimazoo.png' />
		                                                <?php
	                                                     }else if($show['subzoo_zoo_zoo_id'] == 15){
		                                                ?>
		                                                   	<img height="100" src='images/logo/Songkhlazoo.png' />
		                                                <?php
	                                                     }else if($show['subzoo_zoo_zoo_id'] == 16){
		                                                ?>
		                                                   	<img height="100" src='images/logo/Ubonzoo.png' />
		                                                <?php
	                                                     }else if($show['subzoo_zoo_zoo_id'] == 17){
		                                                ?>
		                                                   	<img height="100" src='images/logo/KKzoo.png' />
		                                                <?php
	                                                     }else{
                                                        ?>
                                                        	<img height="100" src='images/logo/ZPO.png' />
                                                        <?php
	                                                    }
                                                        ?>
												</div>
											</div>
											<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
												<div class='row'>
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
														<a href="index.php?url=<?php echo $design;?>.php&id=<?php echo $show['news_id']?>" style="color:#000000;"><?php echo $show['news_head']; ?></a>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
														<span data-feather="user"></span><?php echo ' ',$show['user_name'],' ',$show['user_last'],' ',$show['news_date']; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
				<?php } ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pb-4">
					<div class='row'>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<a class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 btn btn-success" style="color:#ffffff;">ดูทั้งหมด</a>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});
</script>
