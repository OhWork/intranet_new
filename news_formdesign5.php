<?php
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbvdo = new label('วีดีโอ');
	$filepic = new inputFile('news_detail','','');
	$detailnews = new textAreareadonly('detail_news','form-control','text_editer','','5','5','หากต้องการใส่รายละเอียดกรุณาคลิก');
	if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$r = $db->findByPK('newsDetails','newsDetails_id',$id)->executeRow();
	$detailnews->value = $r['newsDetails_name'];
	}
?>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 pb-3' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<input class="form-control" type="text" value="Head NEWS"/>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="color:#007bff;">
							post by choatchaw 22 aug 2561 10.00am
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<?php
										echo $lbvdo;
										echo $filepic;
									?>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
							<?php
								echo $lbdetailnews;
								echo $detailnews;
							?>
						</div>
					</div>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
			</div>
		</div>
		<!--	<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
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
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class='row'>
				<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'></div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<input class="btn btn-success w-100" type="submit" value="submit" />
					<input  type="hidden" id="id" value="<?php echo $id;?>" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>