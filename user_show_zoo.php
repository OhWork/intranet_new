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
    $selectzoo->name = 'zoo_id';
    $selectzoo->lists = 'โปรดระบุ';
    $columns = array('zoo_name','zoo_no');
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
    $form = new form();
echo $form->open('form_reg','myform','col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','',''); ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
        <div class="row">
	<div class="ml-auto">
                        <a href="admin_index.php?url=user_add_zoo.php" class="btn btn-success col-12">เพิ่มสวนสัตว์</a>
	</div>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                        <div class="table-responsive"> 
				<?php $rs = $db->findAll('zoo')->execute();
					$grid = new gridView();
					$grid->pr = 'zoo_id';
					$grid->header = array('<b><center>สวน/สำนัก</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
					$grid->width = array('80%','10%','10%');
					$grid->edit = 'admin_index.php?url=user_add_zoo.php';
					$grid->name = 'table';
					$grid->edittxt ='แก้ไข';
					$grid->renderFromDB($columns,$rs);
				?>
                        </div>
	</div>
        </div>
</div>
<?php echo $form->close(); 
	endif; ?>