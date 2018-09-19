<?php
	$lbdetailnews = new label('รายละเอียด');
	$lbpic = new label('ภาพ');
	$filepic = new inputFile('news_detail','','');
	$detailnews = new textArea('detail_news','form-control','textediter','','5','5','หากต้องการกรอกรายละเอียดกรุณาคลิก');
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
							<input type="button" id="button_adddetail" value="บันทึก">
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
			</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                $('#button_adddetail').hide();
                $('#text_detail').on('click',function(){
	                 CKEDITOR.replace( 'textediter' );
					 $('#button_adddetail').show();
                });
                $('#button_adddetail').on('click',function(){
	                var checktext = $('#textediter').val();
	                console.log(checktext);
                });
</script>
