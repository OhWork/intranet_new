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
    $columns = array('zlfot_code','zlfot_nameth','zlfot_tel','zlfot_datestart');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');
    $rs = $db->conditions("zlfot","DATEDIFF(zlfot_dateend,CURRENT_DATE()) <=30")->execute();  ?>     
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                        <h4>รายสมาชิกสโมสรผู้รักสวนสัตว์ที่กำลังจะหมดอายุ</h4>
		</div>
		<div class="ml-auto">
                                        <a href="admin_index.php?url=zlfot_add_member.php&id=<?php echo $id; ?>" class="btn btn-success col-12"><span data-feather="user-plus"></span></a>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'zlfot_id';
                                                                    $grid->header = array('<b><center>รหัส</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>เบอร์โทรศัพท์</center></b>','<b><center>วันที่</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    $grid->edit = 'admin_index.php?url=zlfot_change_status.php';
                                                                    $grid->name = 'table';
                                                                    $grid->edittxt ='ต่ออายุ';
                                                                    $grid->renderFromDB($columns,$rs);
                                                                    endif;
                                                            ?>
                                        </div>
		</div>
                        </div>
	</div>
        </div>
</div>