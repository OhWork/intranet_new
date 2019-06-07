<script type="text/javascript">
			$(function () {
				$('input#id_search').quicksearch('table#table_search tbody tr');
				});
</script>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="background-color:#ffffff;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="color:#424242;border-bottom:2px solid #F5F5F5;">
					<h3>แบบสอบถาม</h3>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php
    					$date = date('Y-m-d H:i');
                        $rs = $db->specifytable('*','qtn,user,zoo',"qtn.user_user_id = user.user_id AND user.subzoo_zoo_zoo_id = zoo.zoo_id AND qtn_enable = 1 AND '$date' BETWEEN qtn_datestart AND qtn_dateend")->execute();
						foreach($rs as $rsshow){
						?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding:16px;float:left;">
							<a class="btn btn-light col-12 qtnblock shadow" style="background-color:<?php echo $rsshow['qtn_color'];?>;" href="<?php echo $rsshow['qtn_link'];?>" role="button">
                                                            <?php echo $rsshow['qtn_name'];?><br>
                                                            ระหว่างวันที่ <?php echo $rsshow['qtn_datestart'];?> <br>ถึงวันที่ <?php echo $rsshow['qtn_dateend'];?><br>
                                                            โดย <?php echo $rsshow['zoo_name'];?>
                                                        </a>
						</div>
					<?php }
    					if(empty($rsshow['qtn_id'])){ ?>
        					<div class="col-12 pt-5 pb-5" style="text-align:center;color:#f44336;"><h4>ไม่มีแบบสอบถามในขณะนี้</h4></div>
    				<?php	}
    					 ?>

				</div>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
	</div>
</div>
