<?php

    if (!empty($_SESSION['user_name'])):
   	$form = new form();
   	$lbdevision = new label('สวน : ');
	$buttonok = new buttonok("ค้นหา","","btn btn-success btn-block","");
?>
<script>
$(document).ready(function() {
	 $('#table').DataTable( {
        "ordering": false,
		"lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
        "language": {
            "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
            "zeroRecords": "ไม่พบข้อมูล",
            "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
            "infoEmpty": "ไม่พบข้อมูล",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    } );
} );
</script>

<?php echo $form->open("","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","",""); ?>
<div class="row">
	<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
			<div class="row">
				<div class="col-md-2" style="float: left;"><a href="admin_index.php?url=cf_addconfer.php" class="btn btn-success">เพิ่มห้องประชุม</a></div>
				<div class='col-md-2 statustext'><?php echo $lbdevision ?></div>
				<div class='col-md-6'>
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
				<div class='col-md-2'><?php echo $buttonok ?></div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
<?php
	if($_POST){
?>
<?php
				$columns = array('confer_name','confer_people');
				$rs = $db->findByPK('confer','zoo_zoo_id',$_POST['subzoo_zoo_zoo_id'])->execute();
				$grid = new gridView();
				$grid->pr = 'confer_id';
				$grid->header = array('<b><center>ชื่อห้องประชุม</center></b>','<b><center>จำนวนที่สามารถเข้าร่วมประชุมได้</center></b>','<b><center>#</center></b>');
				$grid->width = array('60%','30%','10%');
				$grid->edit = 'admin_index.php?url=cf_addconfer.php';
				$grid->edittxt = 'แก้ไข';
				$grid->renderFromDB($columns,$rs);
				?>
				<?php
	}
endif;
	?>
		</div>
	</div>
	<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
</div>
<?php echo $form->close(); ?>