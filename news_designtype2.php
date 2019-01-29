<?php
    $id = $_GET['id'];
    $rs = $db->findByPK33('news','newsDetails','user','news_newsDetails_id','newsDetails_id','user_user_id','user_id','news_id',$id)->executeAssoc();
?>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h3> <?php echo $rs['news_head'];?></h3>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1' style="color:#BDBDBD;">
			<?php
				echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
			?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 pb-3" style="color:#616161;">
			<?php echo $rs['newsDetails_name'];?>
		</div>
		<!--<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mb-3'>
			<div class='row'>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view.jpg' />
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view2.jpg' />
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view.jpg' />
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view2.jpg' />
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view.jpg' />
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<img height="100" width="100%" src='images/view2.jpg' />
				</div>
			</div>
		</div>-->
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
