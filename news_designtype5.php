<?php
    $id = $_GET['id'];
    $rs = $db->findByPK44('news','newsDetails','newsVideo','user','news_newsDetails_id','newsDetails_id','news_newsVideo_id','newsVideo_id','user_user_id','user_id','news_id',$id)->executeAssoc();
?>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h3> <?php echo $rs['news_head'];?> </h3>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="color:#007bff;">
						<?php
								echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
							?>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<video width="320" height="240" controls>
										<source src="<?php echo $rs['newsVideo_link'],$rs['newsVideo_name'] ;?>" type="video/mp4">
								  	</video>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<?php echo $rs['newsDetails_name'];?>
						</div>
					</div>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mb-3'>
			<div class='row'>
				<?php
					$rsimg = $db->findByPK12('newsImg','newsImg_position',2,'newsImg_connect',$id)->execute();
					foreach($rsimg as $showimg){
				?>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" class='pop' src='<?php echo $showimg['newsImg_path'],$showimg['newsImg_name'] ; ?>' />
				</div>
				<?php  } ?>
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
