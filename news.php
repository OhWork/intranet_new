<!--
<?php
            $columns = array('news_head','news_date','user_name');
            if(empty($_GET["subpage"])){
                 $_GET["subpage"] = 1;
            }
            $page = (int) (!isset($_GET["subpage"]) ? 0 : $_GET["subpage"]);
			$limit = 4; //จำนวนแสดงต่อหน้า
			$startpoint = ($page * $limit) - $limit;

			$rs2 = "problem,subzoo,typetools,subtypetools  where problem.subzoo_subzoo_id = subzoo.subzoo_id && problem.subtypetools_typetools_typetools_id = subtypetools.subtypetools_id && subtypetools.typetools_typetools_id = typetools.typetools_id";
			$rs = $db->findByPK2LimitDESC('news','user','news.user_user_id','user.user_id',$startpoint,$limit,'news_date')->execute();


			$grid2 = new gridView();
			$grid2->pr = 'news_id';
// 			$grid2->sts = 'problem_status';
			$grid2->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>วันและเวลา</center></b>','<b><center>เขียนโดย</center></b>');
			$grid2->width = array('50%','20%','20%');
            $grid2->link = 'index.php?url=news_detail.php';//for click tr
			$grid2->renderFromDB($columns,$rs);
// 			echo pagination($rs2,$limit,$page,$url='cs_index.php?url=show_problem.php&');
//             include_once 'cs_viewdetail.php';
		?>
-->
<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
<div class='row'>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="background-color:#ffffff;">
		<h4>ข่าวสารภายในองค์การสวนสัตว์</h4>
	</div>
    <!-- <div class="marketing mt-3">
    Three columns of text below the carousel -->
		<!--<div class="col-4" style="float:left">
            <img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h4>Heading</h4>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>.col-lg-4
        <div class="col-4" style="float:left">
            <img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h4>Heading</h4>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4
        <div class="col-4" style="float:left">
            <img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h4>Heading</h4>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4
	</div>-->
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
		<div class='row'>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 shadow" style="background-color:#ffffff;border-right:5px solid #f5f5f5;">
				<div class='row'>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<center><img height="250" src='images/Logo/ZPO.png' /></center>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<b>How Did van Gogh’s Turbulent Mind Depict One of the Most</b>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
						choatchaw on mar 29,2018 at 12:00 am
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
				<div class='row'>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow" style="background-color:#ffffff;">
						<div class='row'>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
								<center><img style="height:100px;width:100px;" src='images/Logo/ZPO.png' /></center>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<b>How Did van Gogh’s Turbulent Mind Depict One of the Most</b>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
										choatchaw on mar 29,2018 at 12:00 am
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow mt-2" style="background-color:#ffffff;">
						<div class='row'>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
								<center><img height="100" src='images/Logo/ZPO.png' /></center>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<b>How Did van Gogh’s Turbulent Mind Depict One of the Most</b>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
										choatchaw on mar 29,2018 at 12:00 am
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow mt-2" style="background-color:#ffffff;">
						<div class='row'>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
								<center><img height="100" src='images/Logo/ZPO.png' /></center>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<b>How Did van Gogh’s Turbulent Mind Depict One of the Most</b>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
										choatchaw on mar 29,2018 at 12:00 am
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 shadow mt-2" style="background-color:#ffffff;">
						<div class='row'>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
								<center><img height="100" src='images/Logo/ZPO.png' /></center>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='row'>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<b>How Did van Gogh’s Turbulent Mind Depict One of the Most</b>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:#8d8d8d;">
										choatchaw on mar 29,2018 at 12:00 am
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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