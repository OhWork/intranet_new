<?php
	$datetime = date("Y-m-d H:i");
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbheadnews = new label('หัวข้อข่าวสาร');
	$txtheadnews = new textfield('news_head','','form-control','','');
	$lbvdo = new label('วีดีโอ');
	$filepic = new inputFile('news_videodetail','','file_id');
	$txtlinkvdo = new textfield('news_vdo','news_vdo_id','form-control','กรุณาก็อบ link จาก YouTubeมาใส่','');
	$detailnews = new textAreareadonly('detail_news','form-control','text_editer','','5','5','');
	$last_detail_id = new hiddenfield('last_detail_id','last_detail_id','form-control','','');
	$button = new buttonok("บันทึก","submitvdo","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$r2 = $db->findByPK('news','news_id',$id)->executeRow();
		$txtheadnews->value = $r2['news_head'];
		$r3 = $db->findByPK('newsVideo','newsVideo_connect',$id)->executeRow();
		$txtlinkvdo->value = $r3['newsVideo_link'];
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
echo $form->open("form_detail","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","news_insert_medie.php","");
?>
<div class='row'>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 pb-3' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<h5><?php echo $lbheadnews, $r2['news_head'];?></h5>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="color:#007bff;">
			<?php $rs = $db->findByPK22('news','user','user_user_id','user_id','news_id',$_GET['id'])->executeAssoc();
				echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
			?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<?php echo $lbvdo; echo $txtlinkvdo;?>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" id="text_detail">
			<?php
				echo $lbdetailnews;
				echo $detailnews;?>
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
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
			<div class='row'>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4' id="text_detail">
					<?php echo $button;?>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class='row'>
			<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'></div>
			<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
				<input class="btn btn-secondary col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="button" type="button" value="กลับหน้าแรก">
				<input  type="hidden" id="new_id" name="new_id" value="<?php echo $id;?>" />
				<input  type="hidden" id="datetime" name="date_time" value="<?php echo $datetime;?>" />
				<input  type="hidden" id="datetime" name="form_design" value="3" />
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
					$("#text_editer").val('');
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
					        data: {text : 'cancel' , last_detail_id : $('#last_detail_id').val()},
					        type: "POST",
					        success: function(data) {
						        console.log(data);
						        $('#text_editer').val(data);
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
		$("#button").on('click',function(e){
	window.location.href="admin_index.php?url=news_show_news.php"
	});
</script>
