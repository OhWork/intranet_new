<?php
	$form = new form();
	$lbzoo = new label('สวนสัตว์ : ');
    $lbconfername = new label('ชื่อห้องประชุม : ');
    $lbdetailconfername = new label('รายละเอียด : ');
    $lbpp = new label('รองรับได้สูงสุด : ');
	$txtconfername = new textfield('confer_name','','form-control css-require','');
	$button = new buttonok("บันทึก","","btn btn-success btn-lg btn-block","");
	if(!empty($_GET['id'])){
	include_once('database/db_tools.php');
	include_once('connect.php');

	$id = $_GET['id'];
	$r = $db->findByPK('brand','idbrand',$id)->executeRow();
	$brand->value = $r['bName'];
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
						<div class='col-md-3 statustext'><?php echo $lbconfername ?></div>
						<div class='col-md-9'><?php echo $txtconfername ?></div>
					</div>
				</div>
				<div class='col-md-12' style="margin-top:8px;">
					<div class="row">
						<div class='col-md-3 statustext'><?php echo $lbdetailconfername ?></div>
						<div class='col-md-9'>
							<textarea name="editor" id="editor" rows="10" cols="80">
						 		This is my textarea to be replaced with CKEditor.
						 	</textarea>
						</div>
					</div>
				</div>
				<div class='col-md-12' style="margin-top:8px;">
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
	echo "<input type='hidden' name='id' value='$_GET[id]'/>";
	echo "<input type='hidden' name='zoo_zoo_id' value='$_SESSION[subzoo_zoo_zoo_id]'/>";
	echo $form->close();
?>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
