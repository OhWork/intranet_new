<?php
	$form = new form();
    $lbdevision = new label('สวน : ');
    $lbconfername = new label('ชื่อห้องประชุม : ');
    $lbpp = new label('รองรับได้สูงสุด : ');
	$txtconfername = new textfield('confer_name','','form-control css-require','');
	$txtnum = new textfield('confer_num','','form-control css-require','');
	$filepic = new inputFile('confer_pic1','file','file_id');
	$filepic2 = new inputFile('confer_pic2','file','file_id2');
	$filepic3 = new inputFile('confer_pic3','file','file_id3');
	$button = new buttonok("บันทึก","submit","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button1 = new buttonok("บันทึก","submit1","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$button2 = new buttonok("บันทึก","submit2","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
	$buttonok = new buttonok("บันทึก","","btn btn-success btn-lg btn-block","");
	if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('confer','confer_id',$id)->executeRow();
	$txtconfername->value = $r['confer_name'];
	$txtnum->value = $r['confer_people'];
	}
	echo $form->open("form_reg","frmMain","","cf_insertconfer.php","");
?>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h2>เพิ่มรายชื่อห้องประชุม</h2>
				</div>
				<div class="col-md-12"><hr></div>
				<div class='col-md-12' style="margin-top:8px;">
					<div class="row">
						<div class='col-md-3 statustext'><?php echo $lbdevision ?></div>
						<div class='col-md-9'>
								<select class='form-control' id="ddlZoo" name="subzoo_zoo_zoo_id" onchange = "ListSubzoo(this.value)">
									<option selected value="">โปรดระบุ</option>
										<?php $rs = $db->findAllASC('zoo','zoo_no')->execute();
											while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
										{
										?>
											<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
										<?php
										}
										?>
								</select>
							</div>
					</div>
				</div>

				<div class='col-md-12' style="margin-top:8px;">
					<div class="row">
						<div class='col-md-3 statustext'><?php echo $lbconfername ?></div>
						<div class='col-md-9'><?php echo $txtconfername ?></div>
					</div>
				</div>
				<div class='col-md-12' style="margin-top:8px;">
					<div class="row">
						<div class='col-md-3 statustext'><?php echo $lbpp; ?></div>
						<div class='col-md-9'><?php echo $txtnum ?></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
					<div class='row'>
						<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
							<div class='row'>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ml-5'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg1 = $db->findByPK12('conferimg','conferimg_position',1,'confer_confer_id',$_GET['id'])->executeAssoc();
											if(!empty($rsshowimg1['conferimg_id'])){
											?>
												<img id="preimg" class="preimg" src="images/confer/<?php echo $rsshowimg1['conferimg_name'];?>" width="100px" height="100px">
												<?php
											}else{
											?>
												<img id="preimg" class="preimg" src="images/no_pic.png" width="100px" height="100px">
											<?php
											} ?>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
											<?php echo $filepic; ?>
										</div>
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ml-5'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg1 = $db->findByPK12('conferimg','conferimg_position',2,'confer_confer_id',$_GET['id'])->executeAssoc(); ?>
											<input  type="hidden" id="pic_id2" name="pic_id2" value="<?php echo $rsshowimg1['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg1['conferimg_id'])){
											?>
												<img id="preimg2" class="preimg" src="images/confer/<?php echo $rsshowimg1['conferimg_name'];?>" width="100px" height="100px">
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
									</div>
								</div>
								<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 ml-5'>
									<div class='row'>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" align="center">
											<?php $rsshowimg1 = $db->findByPK12('conferimg','conferimg_position',3,'confer_confer_id',$_GET['id'])->executeAssoc(); ?>
											<input  type="hidden" id="pic_id2" name="pic_id3" value="<?php echo $rsshowimg1['newsImg_id'];?>" />
											<?php
											if(!empty($rsshowimg1['conferimg_id'])){
											?>
												<img id="preimg3" class="preimg" src="images/confer/<?php echo $rsshowimg1['conferimg_name'];?>" width="100px" height="100px">
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='col-md-12 mt-5'>
					<div class="row">
						<div class='col-md-4'></div>
						<div class='col-md-4'>
							<?php echo $button; ?>
						</div>
						<div class='col-md-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php
	echo "<input type='hidden' name='confer_id' value='$_GET[id]'/>";
	echo $form->close();
?>
<script>
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

</script>
