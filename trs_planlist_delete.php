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
    $id = $_GET['id'];
    $columns = array('plan_date','plan_count');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();

            $rs = $db->findAll('plan')->execute();
            echo "<div class='col-md-12'>"."<h2>รายการแผน</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'plan_id';
			$grid->sts = 'plan_status';
			$grid->header = array('<b><center>วันที่</center></b>','<b><center>ครั้งที่</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
			$grid->width = array('30%','30%','20%','10%','10%');
			$grid->edit = 'admin_index.php?url=trs_addplan.php';
			$grid->name = 'table';
			$grid->change = '#';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
