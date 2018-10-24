<?php
	$datetime = date("Y-m-d H:i");
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbheadnews = new label('หัวข้อ : ');
	$txtheadnews = new textfield('news_head','','form-control','','');
	$lbpic = new label('ภาพหน้าปกปัจจุบัน');
	$lbpic2 = new label('ภาพข่าว');
	$filepic = new inputFile('news_picdetail','file','file_id');
	$filepic2 = new inputFile('news_picdetail2','file','file_id2');
	$filepic3 = new inputFile('news_picdetail3','file','file_id3');
	$filepic4 = new inputFile('news_picdetail4','file','file_id4');
	$filepic5 = new inputFile('news_picdetail5','file','file_id5');
	$filepic6 = new inputFile('news_picdetail6','file','file_id6');
	$detailnews = new textAreareadonly('detail_news','form-control','text_editer','','5','5','');
	$last_detail_id = new hiddenfield('last_detail_id','last_detail_id','form-control','','');
	$button = new buttonok("บันทึก","submit","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button1 = new buttonok("บันทึก","submit1","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button2 = new buttonok("บันทึก","submit2","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button3 = new buttonok("บันทึก","submit3","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button4 = new buttonok("บันทึก","submit4","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button5 = new buttonok("บันทึก","submit5","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$r2 = $db->findByPK('news','news_id',$id)->executeRow();
		$txtheadnews->value = $r2['news_head'];
		$r = $db->findByPK('newsDetails','newsDetails_id',$r2['news_newsDetails_id'])->executeRow();
		if($r2['news_newsDetails_id'] == '' || $r2['news_newsDetails_id'] != $r['newsDetails_id']){
			$detailnews->value = 'หากต้องการเพิ่มรายละเอียดกรุณาคลิก';
			$last_detail_id->value = '';
		}
		else{
			$detailnews->value = $r['newsDetails_name'];
			$last_detail_id->value = $r['newsDetails_id'];
		}
	}
	echo $form->open("form_detail","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","","");
?>
<div class='row'>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 pb-3' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h5><?php echo $lbheadnews, $r2['news_head'];?></h5>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1' style="color:#007bff;">
			<?php $rs = $db->findByPK22('news','user','user_user_id','user_id','news_id',$_GET['id'])->executeAssoc();
				echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
			?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='row'>
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
							<div class='row'>
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4'>
									<?php echo $lbpic; ?>
								</div>
							</div>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
							<div class='row'>
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
									<?php
										$rsshowimg = $db->findByPK12('newsImg','newsImg_position',1,'newsImg_connect',$_GET['id'])->executeAssoc();
									?>
									<input type="hidden" id="pic_id" name="pic_id" value="<?php echo $rsshowimg['newsImg_id'];?>" />
									<?php
									if(!empty($rsshowimg['newsImg_id'])){
									?>
									<img id="preimg" class="preimg" src="<?php echo $rsshowimg['newsImg_path'],$rsshowimg['newsImg_name'];?>" width="100px" height="100px">
									<?php
									}else{
									?>
									<img id="preimg" class="preimg" src="images/no_pic.png" width="100px" height="100px">
									<?php
									} ?>
								</div>
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1'>
									<?php echo $filepic; ?>
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
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class='row'>
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
						<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' id="text_detail">
							<?php
								echo $lbdetailnews;
								echo $detailnews;?>
							<input type="submit" id="button_adddetail" value="บันทึก">
							<input type="button" id="button_canceletail" value="ยกเลิก">
						</div>
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
													<?php echo $button4; ?>
												</div>
												<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pl-0'>
													<button class="btn btn-danger col-12" type="button" id="cancel_pic" value="ยกเลิก">ยกเลิก</button>
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
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class='row'>
			<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'></div>
			<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
				<input  type="hidden" id="new_id" name="new_id" value="<?php echo $id;?>" />
				<input  type="hidden" id="datetime" name="date_time" value="<?php echo $datetime;?>" />
				<input  type="hidden" name="form_design" value="1" />
				<?php echo $last_detail_id;?>
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
                $('#text_detail').on('click',function(){
	                if(!CKEDITOR.instances['text_editer']){
	                CKEDITOR.replace( 'text_editer', {
					    uiColor: '#9AB8F3',
					    removeButtons : 'Styles,Scayt,Format,Source,Strike,Maximize,About,Image',
					    enterMode : CKEDITOR.ENTER_BR
					});
					}
					$('#button_adddetail').show();
					$('#button_canceletail').show();
					$("#text_editer").removeAttr("readonly");
					$("form").on('submit',function(e) {
						e.preventDefault();
						CKEDITOR.instances[ 'text_editer' ].updateElement();
						$.ajax({
							url: "news_insert_detail.php",
							type: "POST",
							data:  new FormData(this),
							contentType: false,
							cache: false,
							processData:false,
							dataType: 'json',
							success: function(data) {
								console.log(1234);
								console.log(data);
								$('#text_editer').val(data[0].detail);
								$('#last_detail_id').val(data[0].lastiddetail);
								if(CKEDITOR.instances['text_editer']){
									CKEDITOR.instances['text_editer'].destroy(true);
									$('#text_editer').attr('readonly', true);
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
					        data: {text : 'cancel'},
					        type: "POST",
					        success: function(data) {
						       var json1 = JSON.parse(data);
						       console.log(json1.detail);
						        $('#text_editer').val(data.detail);
						        if(CKEDITOR.instances['text_editer']){
							    		CKEDITOR.instances['text_editer'].destroy(true);
										$('#text_editer').attr('readonly', true);
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
    });
    $("#file_id2").on('change',function(){
        readURL(this,'#preimg2');
    });
    $("#file_id3").on('change',function(){
        readURL(this,'#preimg3');
    });
    $("#file_id4").on('change',function(){
        readURL(this,'#preimg4');
    });
    $("#file_id5").on('change',function(){
        readURL(this,'#preimg5');
    });
    $("#file_id6").on('change',function(){
        readURL(this,'#preimg6');
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
	    var pic_id5 = $('#pic_id5').val();
	    if(pic_id5 == ""){
        $('#preimg5').attr('src', 'images/no_pic.png');
	    }
	    else{
		  $('#preimg5').attr('src', '<?php echo $rsshowimg5['newsImg_path'],$rsshowimg5['newsImg_name'] ;?>');
	    }
	});
</script>

