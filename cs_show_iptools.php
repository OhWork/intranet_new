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
    $columns = array('iptools_address','iptools_NAT','iptools_name','iptools_detail','subzoo_name','zoo_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();

            $rs = $db->findByPK44('iptools','subzoo','zoo','typetoolsforip','iptools.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','iptools.typetoolsforip_typetoolsforip_id','typetoolsforip.typetoolsforip_id','typetoolsforip.typetoolsforip_id',$id,'iptools_id')->execute();   
            echo "<div class='col-md-12'>"."<h2>รายการ IP address ของอุปกรณ์ต่างๆ</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'iptools_id';
// 			$grid->sts = 'event_status';
			$grid->header = array('<b><center>IP-Address</center></b>','<b><center>NAT</center></b>','<b><center>Name/System</center></b>','<b><center>Detail</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
			$grid->width = array('10%','10%','20%','15%','25%','15%','5%');
// 			$grid->delete = 'delete_confer.php';
			$grid->edit = 'admin_index.php?url=admin_cs_index.php&url2=cs_add_iptools.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
// 			echo pagination($rs2,$limit,$page,$url='admin_index.php?url=admin_cs_index.php&url2=cs_show_ip.php&id='.$id.'&');
			endif;
		?>