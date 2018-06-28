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
    $columns = array('zoo_name','subzoo_no');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
    $form = new form();
    
    
    echo $form->open('form_reg','myform','','',''); ?>
    
            <div class="col-md-12" style="float: left;margin-top: 10px;">
                <div class="col-md-2" style="float: left;"><a href="admin_index.php?url=user_add_zoo.php" class="btn btn-success">เพิ่มสวนสัตว์</a>
                </div>
                <div class="col-md-6" style="float: left;"><?php echo $selectzoo->selectFromTB('zoo','zoo_id','zoo_name',$r['typetools_typetools_id']);?>
                </div>
                <div class="col-md-2" style="float: left;"><?php echo $button; ?>
                </div>
                <div class="col-md-2" style="float: left;">
                </div>
            </div>
            <div class="col-md-12" style="float: left;margin-top: 10px;">            
        <?php
            $rs = $db->findAll('zoo')->execute();  
             
    echo $form->close(); ?>
            
         <?php
			$grid = new gridView();
			$grid->pr = 'zoo_id';
			$grid->header = array('<b><center>สวน/สำนัก</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
			$grid->width = array('80%','10%','10%');
			$grid->edit = 'admin_index.php?url=user_add_zoo.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
            </div>
