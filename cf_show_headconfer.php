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

    $columns = array('headncf_name','headncf_no');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
            $rs = $db->findAll('headncf')->execute();



			$grid = new gridView();
			$grid->pr = 'headncf_id';
			$grid->header = array('<b><center>ชื่อหัวข้อข่าว</center></b>','<b><center>ลำดับ</center></b>','<b><center>#</center></b>');
			$grid->width = array('80%','10%','10%');
			$grid->edit = 'admin_index.php?url=admin_cf_index.php&url2=cf_add_headnameconfer.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
            </div>
