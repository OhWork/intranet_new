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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="color:#1DE9B6;border-bottom:2px solid #F5F5F5;">
					<h3>แบบสอบถาม</h3>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php
    					$date = date('Y-m-d');
                        $rs = $db->specifytable('*','qtn',"qtn_enable = 1 AND '$date' BETWEEN qtn_datestart AND qtn_dateend")->execute();
						foreach($rs as $rsshow){?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding:16px;float:left;">
							<a class="btn btn-light col-12 qtnblock shadow" style="background-color:<?php echo $rsshow['qtn_color'];?>;" href="<?php echo $rsshow['qtn_link'];?>" role="button"><?php echo $rsshow['qtn_name'];?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
	</div>
</div>