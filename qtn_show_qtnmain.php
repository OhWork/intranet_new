<script type="text/javascript">
			$(function () {
				$('input#id_search').quicksearch('table#table_search tbody tr');
				});
</script>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-left:150px;">
					<div class="jumbotron">
						<h3>แบบสอบถาม</h3>
						<div class="container marketing">

						<!-- Three columns of text below the carousel -->
						<div class="row">
							<?php
								$rs = $db->findByPK12BETWEEN('qtc','qtc_status','1','qtc_datestart','qtc_dateend')->execute();
								foreach($rs as $rsshow){?>
						  <div class="col-lg-12">
							<p><a class="btn btn-secondary" href="<?php echo $rsshow['qtn_link'];?>" role="button"><?php echo $rsshow['qtn_name'];?></a></p>
						  </div><!-- /.col-lg-4 -->
						<?php } ?>
						</div><!-- /.row -->
						</div>
					</div>
				</div>
