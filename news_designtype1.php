<?php
    $id = $_GET['id'];
	    $rs = $db->findByPK33('news','newsDetails','user','news_newsDetails_id','newsDetails_id','user_user_id','user_id','news_id',$id)->executeAssoc();
?>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 newborder' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h3> <?php echo $rs['news_head'];?> </h3>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1' style="color:#BDBDBD;">
		<?php
			echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
		?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4'>
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
						<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'>
							<?php
								$rscover = $db->findByPK12('newsImg','newsImg_position',1,'newsImg_connect',$id)->executeAssoc();
								<?php
								if(!empty($rscover['newsImg_name'])){
							?>
							<img height="250" class="pop w-100" src='<?php echo $rscover['newsImg_path'],$rscover['newsImg_name'];?>' />
							<?php
								}
/*
								else{
									if($rs['subzoo_zoo_zoo_id'] == 11){
									?>
                                       <img height="250" class="pop w-100" src='images/logo/Dusitzoo.png' />
                                    <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 12){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/KKOzoo.png' />
		                            <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 13){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/chiangmai.png' />
		                            <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 14){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/Nakhonrachsimazoo.png' />
		                            <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 15){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/Songkhlazoo.png' />
		                            <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 16){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/Ubonzoo.png' />
		                            <?php
	                                }else if($rs['subzoo_zoo_zoo_id'] == 17){
		                            ?>
		                               <img height="250" class="pop w-100" src='images/logo/KKzoo.png' />
		                            <?php
	                                }else{
                                    ?>
                                       <img height="250" class="pop w-100" src='images/logo/ZPO.png' />
                                    <?php
	                                }
	                            }
*/
	                        ?>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
					<div class='row'>
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
						<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="color:#616161;">
							<?php echo $rs['newsDetails_name'];?>
						</div>
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mb-3'>
			<div class='row'>
				<?php
					$rsimg = $db->findByPK12('newsImg','newsImg_position',2,'newsImg_connect',$id)->executeAssoc();
					$rsimg2 = $db->findByPK12('newsImg','newsImg_position',3,'newsImg_connect',$id)->executeAssoc();
					$rsimg3 = $db->findByPK12('newsImg','newsImg_position',4,'newsImg_connect',$id)->executeAssoc();
					$rsimg4 = $db->findByPK12('newsImg','newsImg_position',5,'newsImg_connect',$id)->executeAssoc();
					$rsimg5 = $db->findByPK12('newsImg','newsImg_position',6,'newsImg_connect',$id)->executeAssoc();
				?>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<?php
						if($rsimg != ''){
					?>
					<img height="100" width="100%" class="pop" src='<?php echo $rsimg['newsImg_path'],$rsimg['newsImg_name'] ; ?>' />
					<?php
						}else{}
					?>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<?php
						if($rsimg2 != ''){
					?>
					<img height="100" width="100%" class="pop" src='<?php echo $rsimg2['newsImg_path'],$rsimg2['newsImg_name'] ; ?>' />
					<?php
						}else{}
					?>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<?php
						if($rsimg3 != ''){
					?>
					<img height="100" width="100%" class="pop" src='<?php echo $rsimg3['newsImg_path'],$rsimg3['newsImg_name'] ; ?>' />
					<?php
						}else{}
					?>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<?php
						if($rsimg4 != ''){
					?>
					<img height="100" width="100%" class="pop" src='<?php echo $rsimg4['newsImg_path'],$rsimg4['newsImg_name'] ; ?>' />
					<?php
						}else{}
					?>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<?php
						if($rsimg5 != ''){
					?>
					<img height="100" width="100%" class="pop" src='<?php echo $rsimg5['newsImg_path'],$rsimg5['newsImg_name'] ; ?>' />
					<?php
						}else{}
					?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<img src="" class="imagepreview" style="width: 100%; height:100%;">
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
          $('.pop').on('click', function() {
	          console.log($(this).attr('src'));
              $('.imagepreview').attr('src', $(this).attr('src'));
              $('#imagemodal').modal('show');
          });
  });
</script>
