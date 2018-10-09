<?php
	$datetime = date("Y-m-d H:i");
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbheadnews = new label('หัวข้อข่าวสาร');
	$txtheadnews = new textfield('news_head','','form-control','','');
	$lbpic = new label('ภาพ');
	$lbvdo = new label('วีดีโอ');
	$filevideo = new inputFile('news_videodetail','','file_id');
	$filepic = new inputFile('news_picdetail[]','','file_id');
	$detailnews = new textAreareadonly('detail_news[]','form-control','text_editer','','5','5','');
	$detailnews2 = new textAreareadonly('detail_news[]','form-control','text_editer2','','5','5','');
	$last_detail_id = new hiddenfield('last_detail_id','last_detail_id','form-control','','');
	$last_detail_id2 = new hiddenfield('last_detail_id2','last_detail_id2','form-control','','');
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$r2 = $db->findByPK('news','news_id',$id)->executeRow();
		$txtheadnews->value = $r2['news_head'];
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
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 pb-3' style="background-color:#ffffff;">
	<div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<?php
				echo $lbheadnews;
				echo $txtheadnews;
			?>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
				<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="color:#007bff;">
							<?php $rs = $db->findByPK22('news','user','user_user_id','user_id','news_id',$_GET['id'])->executeAssoc();
								echo 'เพิ่มข่าวสารโดยคุณ ',$rs['user_name'],' ',$rs['user_last'],' ',$rs['news_dateupdate'];
							?>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<?php
										echo $lbvdo;
										echo $filevideo;
									?>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 text_detail">
							<?php
								echo $lbdetailnews;
								echo $detailnews;
							?>
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
							<div class='row'>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
									<?php
										echo $lbpic;
										echo $filepic;
									?>
								</div>
								<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2 text_detail">
							<?php
								echo $lbdetailnews;
								echo $detailnews2;
							?>
							<input type="submit" id="button_adddetail" value="บันทึก">
							<input type="button" id="button_canceletail" value="ยกเลิก">
						</div>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
								<span id="mySpan">
								</span>
					</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" id="add">
							<input class="btn btn-primary col-12" name="btnButton" id="btnButton" type="button" value="เพิ่ม" onClick="JavaScript:fncCreateElement();">
						</div>

					</div>
					</div>
				</div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'></div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class='row'>
				<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'></div>
				<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2'>
					<input  type="hidden" id="new_id" name ="new_id" value="<?php echo $id;?>" />
					<input  type="hidden" id="datetime" name="date_time" value="<?php echo $datetime;?>" />
					<input  type="hidden" id="datetime" name="form_design" value="4" />
					<?php echo $last_detail_id;
						  echo $last_detail_id2;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
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
					        data: {text : 'cancel'},
					        type: "POST",
					        success: function(data) {
						        console.log(data);
						        $('#text_editer').val(data);
						        $('#text_editer2').val(data);
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
                   var i = 1 ;
		$('#btnButton').on('click',function(){
			i++;
			console.log(i);
			if(i == 6){
				document.getElementById("add").innerHTML = "เพิ่มรูปภาพได้ไม่เกิน 6 รูปภาพครับ";
				$('#add').addClass('text-danger');
			}
		});
           function fncCreateElement(){

		   		var mySpan = document.getElementById('mySpan');
				var myElement1 = document.createElement('input');
				myElement1.setAttribute('type',"file");
				myElement1.setAttribute('name',"news_picdetail[]");
				mySpan.appendChild(myElement1);
	}
</script>
