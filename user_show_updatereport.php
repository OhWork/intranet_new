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
    $columns = array('updatereport_date','updatereport_version','updatereport_detail');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

            $rs = $db->findALLDESC('updatereport','updatereport_date')->execute(); ?>   
            
            <div class='col-md-12' style="margin-top: 10px;">
                <h3>รายการอัพเดทของระบบ</h3>
<!--
                <div class='col-sm-4 col-md-offset-3'><?php echo $searchipzpo ?>
                </div>
-->
            </div>
        <?php
			$grid = new gridView();
			$grid->pr = 'user_id';
			$grid->header = array('<b><center>วัน/เดือน/ปี</center></b>','<b><center>เวอร์ชั่น</center></b>','<b><center>รายละเอียด</center></b>');
			$grid->width = array('20%','20%','60%');
			$grid->name = 'table';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
