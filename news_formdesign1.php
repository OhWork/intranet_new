<?php
	$form = new form();
	$lbdetailnews = new label('รายละเอียด');
	$lbpic = new label('ภาพ');
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
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="color:#007bff;">
			post by choatchaw 22 aug 2561 10.00am
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class='row'>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
						<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 w-100'>
							<?php
								echo $lbpic;
								echo $filepic;?>
						</div>
						<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'></div>
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
			</div>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
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
<script>
                $('#button_adddetail').hide();
                $('#button_canceletail').hide();
                $('#text_detail').on('click',function(){
	                 CKEDITOR.replace( 'text_editer', {
					    uiColor: '#9AB8F3',
					    removeButtons : 'Styles,Scayt,Format'

					});;
					 $('#button_adddetail').show();
					 $('#button_canceletail').show();
					 $("#text_editer").removeAttr("readonly");
					 var id_news = $('#id').val();
 					 if(id_news == ''){
					 $('#text_editer').val('');
 					 }
					  $('#button_adddetail').on('click',function(){
						  var news_detetail = CKEDITOR.instances["text_editer"].getData();
						  $.ajax({
					            url: "news_insert_detail.php",
					            data: {news_detail : news_detetail },
					            type: "POST",
					            success: function(data) {
						           	console.log('ยู้หู้วววว');
					            }
					        });
					   });
                });
                $('#button_canceletail').on('click',function(){
						        console.log(1234);
								CKEDITOR.instances['text_editer'].destroy(true);
				});
</script>

