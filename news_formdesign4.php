<?php
	$datetime = date("Y-m-d H:i");
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbheadnews = new label('หัวข้อข่าวสาร');
	$txtheadnews = new textfield('news_head','','form-control','','');
	$lbpic = new label('ภาพ');
	$lbvdo = new label('วีดีโอ');
	$filepic = new inputFile('news_picdetail','file','file_id');
	$filepic2 = new inputFile('news_picdetail2','file','file_id2');
	$filepic3 = new inputFile('news_picdetail3','file','file_id3');
	$filepic4 = new inputFile('news_picdetail4','file','file_id4');
	$filepic5 = new inputFile('news_picdetail5','file','file_id5');
	$filepic6 = new inputFile('news_picdetail6','file','file_id6');
	$txtlinkvdo = new textfield('news_vdo','news_vdo_id','form-control','กรุณาcopy link จาก YouTubeมาใส่','');
	$detailnews = new textAreareadonly('detail_news','form-control','text_editer','','5','5','');
	$detailnews2 = new textAreareadonly('detail_news2','form-control','text_editer2','','5','5','');
	$last_detail_id = new hiddenfield('last_detail_id','last_detail_id','form-control','','');
	$last_detail_id2 = new hiddenfield('last_detail_id2','last_detail_id2','form-control','','');
	$buttonvdo = new buttonok("บันทึก","submitvdo","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button = new buttonok("บันทึก","submit","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","1234");
	$button1 = new buttonok("บันทึก","submit1","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button2 = new buttonok("บันทึก","submit2","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button3 = new buttonok("บันทึก","submit3","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button4 = new buttonok("บันทึก","submit4","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button5 = new buttonok("บันทึก","submit5","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$r2 = $db->findByPK('news','news_id',$id)->executeRow();
		$txtheadnews->value = $r2['news_head'];
		$r3 = $db->findByPK('newsVideo','newsVideo_connect',$id)->executeRow();
		$txtlinkvdo->value = $r3['newsVideo_link'];
		$r = $db->findByPK('newsDetails','newsDetails_connect',$id)->executeRow();
		if($r2['news_newsDetails_id'] == '' || $r2['news_newsDetails_id'] != $r['newsDetails_id']){
			$detailnews->value = 'หากต้องการเพิ่มรายละเอียดกรุณาคลิก';
			$detailnews2->value = 'หากต้องการเพิ่มรายละเอียดกรุณาคลิก';
			$last_detail_id->value = '';

		}
		else{
			$rsdetail = $db->findByPKLimit('newsDetails','newsDetails_connect',$id,1)->executeAssoc();
				$detailnews->value = $rsdetail['newsDetails_name'];
				$last_detail_id->value = $rsdetail['newsDetails_id'];
			$rsdetail2 = $db->findByPKDESC('newsDetails','newsDetails_connect',$id,'newsDetails_id')->executeAssoc();
				$detailnews2->value = $rsdetail2['newsDetails_name'];
				$last_detail_id2->value = $rsdetail2['newsDetails_id'];
		}
	}
	echo $form->open("form_detail","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","","");
?>
<div class='row'>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 pb-3' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h5><?php echo $lbheadnews,$r2['news_head'];?></h5>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="color:#007bff;">
			<?php $rs = $db->findByPK22('news','user','user_user_id','user_id','news_id',$_GET['id'])->executeAssoc();
				echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
			?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<?php echo $lbvdo;?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<?php echo $txtlinkvdo;?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
					<?php echo $buttonvdo;?>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 text_detail">
			<?php echo $lbdetailnews;
				  echo $detailnews;
			?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
					<div class='row'>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
							<?php
								$rsshowimg = $db->findByPK12('newsImg','newsImg_position',1,'newsImg_connect',$_GET['id'])->executeAssoc();
							?>
								<input  type="hidden" id="pic_id" name="pic_id" value="<?php echo $rsshowimg['newsImg_id'];?>" />
							<?php
								if(!empty($rsshowimg['newsImg_id'])){
							?>
								<img id="preimg" class="preimg" src="<?php echo $rsshowimg['newsImg_path'],$rsshowimg['newsImg_name'];?>" width="100px" height="100px">
							<?php
								}else{
							?>
								<img id="preimg" class="preimg" src="images/no_pic.png" width="100px" height="100px">
							<?php
								}?>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
							<?php echo $filepic;?>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
							<div class='row'>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
									<?php echo $button; ?>
								</div>
								<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
									<button class="btn btn-danger col-12" type="button" id="cancel_pic" value="ยกเลิก">ยกเลิก</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 text_detail">
			<?php
				echo $lbdetailnews;
				echo $detailnews2;
			?>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
				<div class='row'>
					<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'></div>
					<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
						<div class='row'>
							<button class="btn btn-success col-6" type="submit" id="button_adddetail" value="บันทึก">บันทึก</button>
							<button class="btn btn-danger col-6" type="button" id="button_canceletail" value="ยกเลิก">ยกเลิก</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='row'>
			<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
			<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
				<span id="mySpan"></span>
			</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg1 = $db->findByPK12('newsImg','newsImg_position',2,'newsImg_connect',$_GET['id'])->executeAssoc(); ?>
											<input  type="hidden" id="pic_id2" name="pic_id2" value="<?php echo $rsshowimg1['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg1['newsImg_id'])){
											?>
											<img id="preimg2" class="preimg" src="<?php echo $rsshowimg1['newsImg_path'],$rsshowimg1['newsImg_name'];?>" width="100px" height="100px">
											<?php
											}else{
											?>
											<img id="preimg2" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic2; ?>
										</div>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
											<div class='row'>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
													<?php echo $button1; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic2" value="ยกเลิก">ยกเลิก</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg2 = $db->findByPK12('newsImg','newsImg_position',3,'newsImg_connect',$_GET['id'])->executeAssoc();
											?>
											<input type="hidden" id="pic_id3" name="pic_id" value="<?php echo $rsshowimg2['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg2['newsImg_id'])){
											?>
											<img id="preimg3" class="preimg" src="<?php echo $rsshowimg2['newsImg_path'],$rsshowimg2['newsImg_name'];?>" width="100px" height="100px">
											<?php
											}else{
											?>
											<img id="preimg3" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic3; ?>
										</div>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
											<div class='row'>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
													<?php echo $button2; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic3" value="ยกเลิก">ยกเลิก</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg3 = $db->findByPK12('newsImg','newsImg_position',4,'newsImg_connect',$_GET['id'])->executeAssoc();
											?>
											<input  type="hidden" id="pic_id4" name="pic_id" value="<?php echo $rsshowimg3['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg3['newsImg_id'])){
											?>
											<img id="preimg4" class="preimg" src="<?php echo $rsshowimg3['newsImg_path'],$rsshowimg3['newsImg_name'];?>" width="100px" height="100px">
											<?php
											}else{
											?>
											<img id="preimg4" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic4; ?>
										</div>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
											<div class='row'>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
													<?php echo $button3; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic4" value="ยกเลิก">ยกเลิก</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg4 = $db->findByPK12('newsImg','newsImg_position',5,'newsImg_connect',$_GET['id'])->executeAssoc();
											?>
											<input  type="hidden" id="pic_id5" name="pic_id" value="<?php echo $rsshowimg4['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg4['newsImg_id'])){
											?>
											<img id="preimg5" class="preimg" src="<?php echo $rsshowimg4['newsImg_path'],$rsshowimg4['newsImg_name'];?>" width="100px" height="100px">
											<?php
											}else{
											?>
											<img id="preimg5" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic5; ?>
										</div>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
											<div class='row'>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
													<?php echo $button4; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic5" value="ยกเลิก">ยกเลิก</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 mt-2'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg5 = $db->findByPK12('newsImg','newsImg_position',6,'newsImg_connect',$_GET['id'])->executeAssoc();
											?>
											<input  type="hidden" id="pic_id6" name="pic_id" value="<?php echo $rsshowimg5['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg5['newsImg_id'])){
											?>
											<img id="preimg6" class="preimg" src="<?php echo $rsshowimg5['newsImg_path'],$rsshowimg5['newsImg_name'];?>" width="100px" height="100px">
											<?php
											}else{
											?>
											<img id="preimg6" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic6; ?>
										</div>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
											<div class='row'>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pr-0'>
													<?php echo $button5; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic6" value="ยกเลิก">ยกเลิก</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class='row'>
				<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'></div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<input class="btn btn-secondary col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="button" type="button" value="กลับหน้าแรก">
					<input  type="hidden" id="new_id" name ="new_id" value="<?php echo $id;?>" />
					<input  type="hidden" id="datetime" name="date_time" value="<?php echo $datetime;?>" />
					<input  type="hidden" id="form_design" name="form_design" value="4" />
					<?php echo $last_detail_id;
						  echo $last_detail_id2;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
</div>
<?php
    echo $form->close();
?>
<script>
                $('#button_adddetail').hide();
                $('#button_canceletail').hide();
                $('.text_detail').on('click',function(){
	                if(!CKEDITOR.instances['text_editer'] && !CKEDITOR.instances['text_editer2']){
	                CKEDITOR.replace( 'text_editer', {
					    uiColor: '#9AB8F3',
					    removeButtons : 'Styles,Scayt,Format,Source,Strike,Maximize,About,Image',
					    enterMode : CKEDITOR.ENTER_BR
					});
					CKEDITOR.replace( 'text_editer2', {
					    uiColor: '#9AB8F3',
					    removeButtons : 'Styles,Scayt,Format,Source,Strike,Maximize,About,Image',
					    enterMode : CKEDITOR.ENTER_BR
					});
					}
					$('#button_adddetail').show();
					$('#button_canceletail').show();
					$("#text_editer").removeAttr("readonly");
					$("#text_editer").val('');
					$("#text_editer2").removeAttr("readonly");
					$("#text_editer2").val('');
					$("form").on('submit',function(e) {
						e.preventDefault();
						CKEDITOR.instances[ 'text_editer' ].updateElement();
						CKEDITOR.instances[ 'text_editer2' ].updateElement();
						$.ajax({
							url: "news_insert_detail.php",
							type: "POST",
							data:  new FormData(this),
							contentType: false,
							cache: false,
							processData:false,
							dataType: 'json',
							success: function(data) {
								console.log(data);
								$("#text_editer").val(data[0].detail);
								$("#text_editer2").val(data[1].detail);
								$('#last_detail_id').val(data[0].lastiddetail);
								$('#last_detail_id2').val(data[1].lastiddetail);
								if(CKEDITOR.instances['text_editer'] || CKEDITOR.instances['text_editer2']){
									CKEDITOR.instances['text_editer'].destroy(true);
									CKEDITOR.instances['text_editer2'].destroy(true);
									$('#text_editer').attr('readonly', true);
									$('#text_editer2').attr('readonly', true);
									$('#button_adddetail').hide();
									$('#button_canceletail').hide();
								}

							}
						});
						e.stopImmediatePropagation();
					});
					$('#button_canceletail').on('click',function(e){
						if(CKEDITOR.instances['text_editer']){
							$.ajax({
					    	url: "news_insert_detail.php",
					        data: {text : 'cancel' , last_detail_id : $('#last_detail_id').val(), new_id: $('#new_id').val(), form_design : $('#form_design').val()},
					        type: "POST",
							dataType: 'json',
					        success: function(data) {
						        console.log(data);
						        $('#text_editer').val(data[0].detail);
						        $('#text_editer2').val(data[1].detail);
						       if(CKEDITOR.instances['text_editer'] || CKEDITOR.instances['text_editer2']){
									CKEDITOR.instances['text_editer'].destroy(true);
									CKEDITOR.instances['text_editer2'].destroy(true);
									$('#text_editer').attr('readonly', true);
									$('#text_editer2').attr('readonly', true);
									$('#button_adddetail').hide();
									$('#button_canceletail').hide();
										e.stopPropagation();
								}
					        	}
					    	});
						}
					});
                });
        $('#submit').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {
					$('#submit').hide();
					$('#cancel_pic').hide();
				}
			});
		});
        $('#submit1').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id2')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail2',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {

					$('#submit1').hide();
					$('#cancel_pic2').hide();
				}
			});
		});
		$('#submit2').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id3')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail3',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {

					$('#submit2').hide();
					$('#cancel_pic3').hide();
				}
			});
		});
		$('#submit3').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id4')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail4',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {

					$('#submit3').hide();
					$('#cancel_pic4').hide();
				}
			});
		});
		$('#submit4').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id5')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail5',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {

					$('#submit4').hide();
					$('#cancel_pic5').hide();
				}
			});
		});
	$('#submit5').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var files = $('#file_id6')[0].files[0];
			var new_id = $('#new_id').val();
			var last_detail_id = $('#last_detail_id').val();
			fd.append('news_picdetail6',files);
			fd.append('new_id',new_id);
			fd.append('last_detail_id',last_detail_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {

					$('#submit5').hide();
					$('#cancel_pic6').hide();
				}
			});
		});
		$('#submitvdo').on('click',function(e){
	        e.preventDefault();
	        var fd = new FormData();
			var linkvdo = $('#news_vdo_id').val();
			var new_id = $('#new_id').val();
			fd.append('news_vdo',linkvdo);
			fd.append('new_id',new_id);
			$.ajax({
				url: "news_insert_medie.php",
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {
				}
			});
		});
        function readURL(input,idimg) {
	        var nameidimg = idimg ;
	        if (input.files && input.files[0]) {
		            var reader = new FileReader();

		            reader.onload = function (e) {
		                	$(nameidimg).attr('src', e.target.result);

		            }

					reader.readAsDataURL(input.files[0]);
	        }
    	}
	$("#file_id").on('change',function(){
        readURL(this,'#preimg');
		$('#submit').show();
		$('#cancel_pic').show();
    });
    $("#file_id2").on('change',function(){
        readURL(this,'#preimg2');
		$('#submit1').show();
		$('#cancel_pic2').show();
    });
    $("#file_id3").on('change',function(){
        readURL(this,'#preimg3');
		$('#submit2').show();
		$('#cancel_pic3').show();
    });
    $("#file_id4").on('change',function(){
        readURL(this,'#preimg4');
		$('#submit3').show();
		$('#cancel_pic4').show();
    });
    $("#file_id5").on('change',function(){
        readURL(this,'#preimg5');
		$('#submit4').show();
		$('#cancel_pic5').show();
    });
    $("#file_id6").on('change',function(){
        readURL(this,'#preimg6');
		$('#submit5').show();
		$('#cancel_pic6').show();
    });
    $('#cancel_pic').on('click',function(e){
	    var pic_id = $('#pic_id').val();
	    if(pic_id == ""){
        $('#preimg').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg').attr('src', '<?php echo $rsshowimg['newsImg_path'],$rsshowimg['newsImg_name'] ;?>');
	    }
	});
	$('#cancel_pic2').on('click',function(e){
	    var pic_id2 = $('#pic_id2').val();
	    if(pic_id2 == ""){
        $('#preimg2').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg2').attr('src', '<?php echo $rsshowimg1['newsImg_path'],$rsshowimg1['newsImg_name'] ;?>');
	    }
	});
	$('#cancel_pic3').on('click',function(e){
	    var pic_id3 = $('#pic_id3').val();
	    if(pic_id3 == ""){
        $('#preimg3').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg3').attr('src', '<?php echo $rsshowimg2['newsImg_path'],$rsshowimg2['newsImg_name'] ;?>');
	    }
	});
	$('#cancel_pic4').on('click',function(e){
	    var pic_id4 = $('#pic_id4').val();
	    if(pic_id4 == ""){
        $('#preimg4').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg4').attr('src', '<?php echo $rsshowimg3['newsImg_path'],$rsshowimg3['newsImg_name'] ;?>');
	    }
	});
	$('#cancel_pic5').on('click',function(e){
	    var pic_id5 = $('#pic_id5').val();
	    if(pic_id5 == ""){
        $('#preimg5').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg5').attr('src', '<?php echo $rsshowimg4['newsImg_path'],$rsshowimg4['newsImg_name'] ;?>');
	    }
	});
	$('#cancel_pic6').on('click',function(e){
	    var pic_id6 = $('#pic_id6').val();
	    if(pic_id6 == ""){
        $('#preimg6').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg6').attr('src', '<?php echo $rsshowimg5['newsImg_path'],$rsshowimg5['newsImg_name'] ;?>');
	    }
	});
	$("#button").on('click',function(e){
	window.location.href="admin_index.php?url=news_show_news.php"
	});
</script>
