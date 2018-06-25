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
    if($id == 1){
        $type = 'zoo.zoo_type';
        $zoo_name = 'องค์การสวนสัตว์';
    }else{
        $type = 'zoo.zoo_id';
    $zrs = $db->findByPK('zoo','zoo_id',$id)->executeAssoc();
    $zoo_name = $zrs['zoo_name'];
    }
    if (!empty($_SESSION['user_name'])):
    $columns = array('ipzpo_address','ipzpo_user','typetools_name','ipzpo_detail','ipzpo_comname','ipzpo_comgroup','subzoo_name','zoo_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $rs = $db->findByPK44ASC('ipzpo','subzoo','zoo','typetools','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo.typetools_typetools_id','typetools.typetools_id',$type,$id,'ipzpo_id')->execute();   
            echo "<div class='col-md-12'>"."<h2>IP-address ของ ".$zoo_name."</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'ipzpo_id';
			$grid->header = array('<b><center>IP-Address</center></b>','<b><center>Name/System</center></b>','<b><center>Type</center></b>','<b><center>Detail</center></b>','<b><center>ComputerName</center></b>','<b><center>Workgroup</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
			$grid->width = array('6%','20%','10%','20%','7%','3%','15%','14%','5%');
			$grid->edit = 'admin_index.php?url=admin_cs_index.php&url2=cs_add_ip.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>