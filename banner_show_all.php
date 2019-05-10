<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2 alltxh">
	<h4>ลิงค์ระบบงาน และ เว็บไซต์ของหน่วยงานที่เกี่ยวข้อง</h4>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pb-3">
	<div class="row">
		<?php
			$rs = $db->findbyPK('bn','bn_enable',1)->execute();
			foreach($rs as $showrs){
		?>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" href="<?php echo $showrs['bn_link'];?>">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bcmn bner"><h5><?php echo $showrs['bn_name'];?></h5></div>
		</div>
		<?php }?>
	</div>
</div>
