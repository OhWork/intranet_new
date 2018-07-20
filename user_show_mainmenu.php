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
    $selectmainmenu = new SelectFromDB();
    $selectmainmenu->name = 'menu_id';
    $selectmainmenu->lists = 'โปรดระบุ';
    $columns = array('menu_name','menu_no');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
    $form = new form();
    
    
    echo $form->open('form_reg','myform','','',''); ?>
    
            <div class="col-md-12" style="float: left;margin-top: 10px;">
                <div class="col-md-2" style="float: left;"><a href="admin_index.php?url=user_add_mainmenu.php" class="btn btn-success">เพิ่มเมนูหลัก</a>
                </div>
            </div>
            <div class="col-md-12" style="float: left;margin-top: 10px;">            
        <?php
            $rs = $db->findAll('menu')->execute();  
             
    echo $form->close(); ?>
            
         <?php
			$grid = new gridView();
			$grid->pr = 'menu_id';
			$grid->header = array('<b><center>เมนูหลัก</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
			$grid->width = array('80%','10%','10%');
			$grid->edit = 'admin_index.php?url=user_add_mainmenu.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
            </div>