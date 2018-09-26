<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "ทุกหน้า"]],
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
    $columns = array('news_head','user_name');
    $form = new form();
    $rs = $db->findByPK32DESC('news','newsDetails','users','news_newsDetails_id','newsdetails_id','user_user_id','user_id','news_id')->execute();
    echo "คือ",$rs['news_head'];
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
	<div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4>ข่าวสาร</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php
				$grid = new gridView();
				$grid->pr = 'news_id';
				$grid->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>ผู้ลงข่าว</center></b>','<b><center>#</center></b>');
				$grid->width = array('6%','20%','10%');
				$grid->edit = 'admin_index.php?url=cs_add_ip.php';
				$grid->name = 'table';
				$grid->edittxt ='แก้ไข';
				$grid->renderFromDB($columns,$rs);
			?>
			</div>
		</div>
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>
<?php endif; ?>
