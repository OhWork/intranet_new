<?php
 	$rs = $db->findByPK21DESC('news','user','user_user_id','user_id','news_id')->execute();
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class='row'>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ทt-2" style="background-color:#ffffff;">
			<div class='row'>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 alltxh">
					<h4>ข่าวสารภายในองค์การสวนสัตว์</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
					<div class="row">
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
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ml-5">
								<div class='row'>
									<a href="index.php?url=<?php echo $design;?>.php&id=<?php echo $show['news_id']?>" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class='row'>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
												<div class='row'>
															<?php
																if(!empty($show['news_cover'])){
															?>
																	<img class="w-100" height="150" src='images/news/<?php echo $show['news_cover']; ?>' />
																<?php
																	}else{
																if($show['subzoo_zoo_zoo_id'] == 11){
																?>
		                                                        	<img class="w-100" height="150" src='images/logo/Dusitzoo.png' />
		                                                        <?php
			                                                    }else if($show['subzoo_zoo_zoo_id'] == 12){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/KKOzoo.png' />
				                                                <?php
			                                                     }else if($show['subzoo_zoo_zoo_id'] == 13){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/chiangmai.png' />
				                                                <?php
			                                                     }else if($show['subzoo_zoo_zoo_id'] == 14){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/Nakhonrachsimazoo.png' />
				                                                <?php
			                                                     }else if($show['subzoo_zoo_zoo_id'] == 15){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/Songkhlazoo.png' />
				                                                <?php
			                                                     }else if($show['subzoo_zoo_zoo_id'] == 16){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/Ubonzoo.png' />
				                                                <?php
			                                                     }else if($show['subzoo_zoo_zoo_id'] == 17){
				                                                ?>
				                                                   	<img class="w-100" height="150" src='images/logo/KKzoo.png' />
				                                                <?php
			                                                     }else{
		                                                        ?>
		                                                        	<img class="w-100" height="150" src='images/logo/ZPO.png' />
		                                                        <?php
			                                                    }
			                                                    }
		                                                        ?>
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
												<h5 style="color:#111;"><?php echo $show['news_head']; ?></h5>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#aaa;">
												<span data-feather="user"></span><?php echo ' ',$show['user_name'],' ',$show['user_last'],' ',$show['news_date']; ?>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
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
