<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
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
<?php
    if (!empty($_SESSION['user_name'])):
    $selectzoo = new SelectFromDB();
    $selectzoo->name = 'typeNews_id';
    $selectzoo->lists = 'โปรดระบุ';
    $columns = array('typeNews_name','typeNews_no');
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
    $form = new form();
echo $form->open('form_reg','myform','col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','',''); ?>
	<div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="margin-top: 16px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="float:left;"></div>
					<div class="col-md-2" style="float:left;">
						<a href="admin_index.php?url=news_add_typenews.php" class="btn btn-success col-12">เพิ่มชนิดข่าวสาร</a>
					</div>
				</div>
            </div>
            <div class="col-12 mt-3">
				<?php $rs = $db->findAll('typenews')->execute();
					$grid = new gridView();
					$grid->pr = 'typeNews_id';
					$grid->header = array('<b><center>ชนิดข่าวสาร</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
					$grid->width = array('80%','10%','10%');
					$grid->edit = 'admin_index.php?url=news_add_typenews.php';
					$grid->name = 'table';
					$grid->edittxt ='แก้ไข';
					$grid->renderFromDB($columns,$rs);
				?>
            </div>
		</div>
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
<?php echo $form->close();
	endif; ?>
