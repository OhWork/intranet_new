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
    $columns = array('eventzlfot_name','eventzlfot_place');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

            $rs = $db->findAll('eventzlfot')->execute();  ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                        <h4>รายการอีเว้น</h4>
		</div>
		<div class="ml-auto">
                                        <a href="admin_index.php?url=zlfot_add_eventzlfot.php&id=<?php echo $id; ?>" class="btn btn-success col-12"><i class="fas fa-plus"></i></a>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'eventzlfot_id';
                                                                    $grid->header = array('<b><center>ชื่อกิจกรรม</center></b>','<b><center>วันที่จัด</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    $grid->edit = 'admin_index.php?url=zlfot_add_eventzlfot.php';
                                                                    $grid->name = 'table';
                                                                    $grid->edittxt ='แก้ไข';
                                                                    $grid->renderFromDB($columns,$rs);
                                                                    endif;
                                                            ?>
                                        </div>
		</div>
                        </div>
	</div>
        </div>
</div>