<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
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
    $id = $_GET['id'];
    $cfrs = $db->findByPK('confer','conferroom_id',$id)->executeAssoc();
    $conferroom_name = $cfrs['conferroom_name'];
    if (!empty($_SESSION['user_name'])):
    $columns = array('eventconfer_uname','eventconfer_story','eventconfer_psname','eventconfer_start','eventconfer_end','zoo_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $rs = $db->findByPK34('eventconfer','confer','zoo','confer_conferroom_id','conferroom_id','conferroom_id',$id,'zoo_zoo_id','zoo_id','eventconfer_status',"'N'")->execute();   
            echo "<div class='col-md-12'>"."<h2>".$conferroom_name."</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'eventconferroom_id';
			$grid->header = array('<b><center>ผู้ขอใช้ห้องประชุม</center></b>','<b><center>เรื่อง</center></b>','<b><center>ประธานในที่ประชุม</center></b>','<b><center>เวลาเริ่มประชุม</center></b>','<b><center>เวลาสิ้นสุดการประชุม</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
			$grid->width = array('10%','20%','10%','10%','10%','14%','5%');
			$grid->edit = 'admin_index.php?url=cf_status.php';
			$grid->name = 'table';
			$grid->edittxt ='สถานะ';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
