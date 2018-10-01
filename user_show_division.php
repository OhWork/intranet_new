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
    $columns = array('subzoo_name','subzoo_no');
    $button = new buttonok('ค้นหา','','btn btn-primary col-12','submit');
    $form = new form();
echo $form->open('form_reg','myform','col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','',''); ?>
    <div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="margin-top: 16px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
						<div class="col-md-2">
							<a href="admin_index.php?url=user_add_division.php" class="btn btn-success col-12">เพิ่มฝ่าย</a>
						</div>
						<div class="col-md-6">
							<?php echo $selectzoo->selectFromTB('zoo','zoo_id','zoo_name',$r['typetools_typetools_id']);?>
						</div>
						<div class="col-md-2">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
					</div>
				</div>
				<div class="col-md-12 mt-3">            
					<?php
						@$zoo = $_POST['zoo_id'];
						$rs = $db->findByPK('subzoo','zoo_zoo_id',$zoo)->execute();  
						$rs2 = $db->findByPK('zoo','zoo_id',$zoo)->executeAssoc();
						$zoo_name = $rs2['zoo_name']
					?>
<!--
            <div class="col-md-12">
                <h4><?php echo $zoo_name ?></h4>
            </div>
-->
<!--                 <div class='col-sm-4 col-md-offset-3'>".$searchipzpo.$rowend.$rowend; -->
					 <?php
						$grid = new gridView();
						$grid->pr = 'subzoo_id';
						$grid->header = array('<b><center>ฝ่าย</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
						$grid->width = array('80%','10%','10%');
						$grid->edit = 'admin_index.php?url=user_add_division.php';
						$grid->name = 'table';
						$grid->edittxt ='แก้ไข';
						$grid->renderFromDB($columns,$rs);
					?>
				</div>
            </div>
		</div>
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
<?php	echo $form->close(); 
		endif; ?>