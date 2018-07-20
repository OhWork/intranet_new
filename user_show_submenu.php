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
    $selectmenu = new SelectFromDB();
    $selectmenu->name = 'menu_id';
    $selectmenu->lists = 'โปรดระบุ';
    $columns = array('submenu_name','submenu_no');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
    $form = new form();
    
    
    echo $form->open('form_reg','myform','','',''); ?>
    
            <div class="col-md-12" style="float: left;margin-top: 10px;">
                <div class="col-md-2" style="float: left;"><a href="admin_index.php?url=user_add_submenu.php" class="btn btn-success">เพิ่มเมนูย่อย</a>
                </div>
                <div class="col-md-6" style="float: left;"><?php echo $selectmenu->selectFromTB('menu','menu_id','menu_name',$r['typetools_typetools_id']);?>
                </div>
                <div class="col-md-2" style="float: left;"><?php echo $button; ?>
                </div>
                <div class="col-md-2" style="float: left;">
                </div>
            </div>
            <div class="col-md-12" style="float: left;margin-top: 10px;">            
        <?php
            @$zoo = $_POST['menu_id'];
            $rs = $db->findByPK('submenu','menu_menu_id',$zoo)->execute();  
            $rs2 = $db->findByPK('menu','menu_id',$zoo)->executeAssoc();
            $zoo_name = $rs2['menu_name'];
             
    echo $form->close(); ?>
            

<!--
            <div class="col-md-12">
                <h4><?php echo $zoo_name ?></h4>
            </div>
-->
<!--                 <div class='col-sm-4 col-md-offset-3'>".$searchipzpo.$rowend.$rowend; -->
         <?php
			$grid = new gridView();
			$grid->pr = 'submenu_id';
			$grid->header = array('<b><center>ฝ่าย</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
			$grid->width = array('80%','10%','10%');
			$grid->edit = 'admin_index.php?url=user_add_submenu.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
            </div>
