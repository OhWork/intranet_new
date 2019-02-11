<script>
            $(document).ready(function() {

                $('table.table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                },
                "autoWidth": false
    } );
} );
</script>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	  <!-- Nav tabs -->
	  <nav class="nav nav-tabs" role="tablist" style="margin-top: 16px;">
			<a class="nav-item nav-link active" href="#zpo" aria-controls="zpo" role="tab" data-toggle="tab" style="color:#EC7063;" aria-selected="true">องค์การสวนสัตว์</a>
			<a class="nav-item nav-link" href="#dusitzoo" aria-controls="dusitzoo" role="tab" data-toggle="tab" style="color:#AF7AC5;" aria-selected="false">สวนสัตว์ดุสิต</a>
			<a class="nav-item nav-link" href="#khaokeawzoo" aria-controls="khaokeawzoo" role="tab" data-toggle="tab" style="color:#5DADE2;" aria-selected="false">สวนสัตว์เปิดเขาเขียว</a>
			<a class="nav-item nav-link" href="#chiangmaizoo" aria-controls="chiangmaizoo" role="tab" data-toggle="tab" style="color:#48C9B0;" aria-selected="false">สวนสัตว์เชียงใหม่</a>
			<a class="nav-item nav-link" href="#korachzoo" aria-controls="korachzoo" role="tab" data-toggle="tab"style="color:#58D68D;" aria-selected="false">สวนสัตว์นครราชสีมา</a>
			<a class="nav-item nav-link" href="#songkhlazoo" aria-controls="songkhlazoo" role="tab" data-toggle="tab" style="color:#F4D03F;" aria-selected="false">สวนสัตว์สงขลา</a>
			<a class="nav-item nav-link" href="#ubonzoo" aria-controls="ubonzoo" role="tab" data-toggle="tab" style="color:#EB984E;" aria-selected="false">สวนสัตว์อุบลราชธานี</a>
			<a class="nav-item nav-link" href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab"  style="color:#45B39D;" aria-selected="false">สวนสัตว์ขอนแก่น</a>
			<a class="nav-item nav-link" href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab"  style="color:#FF6E40;" aria-selected="false">คชอาณาจักร จ.สุรินทร์</a>
	  </nav>
	  <!-- Tab panes -->
	  <div class="tab-content">
		<div role="tabpanel" class="tab-pane fade show active inf1" role="tabpanel" id="zpo" style="padding-left:16;padding-right:16px;">
		   <?php
				$columns = array('reguser_name_th','reguser_date','subzoo_name');
				$rs = $db->findByPK34DESC('reguser','subzoo','zoo','reguser.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_type','1','reguser_status',"'N'",'reguser_date')->execute();
				$grid = new gridView();
				$grid->pr = 'reguser_id';
				$grid->sts = 'reguser_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="dusitzoo" style="padding-left:16;padding-right:16px;">
		<?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','11','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
	</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="khaokeawzoo" style="padding-left:16;padding-right:16px;">
		<?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','12','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="chiangmaizoo" style="padding-left:16;padding-right:16px;">
	   <?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','13','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="korachzoo" style="padding-left:16;padding-right:16px;">
		<?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','14','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="songkhlazoo" style="padding-left:16;padding-right:16px;">
	   <?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','15','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		<div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="ubonzoo" style="padding-left:16;padding-right:16px;">
		<?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','16','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
		 <div role="tabpanel" class="tab-pane fade inf1" role="tabpanel" id="khonkeanzoo" style="padding-left:16;padding-right:16px;">
		 <?php
				$columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
				$rs = $db->findByPK56DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','17','problem_status,problem_date')->execute();
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		 </div>
	  </div>
</div>
<?php
include_once 'cs_viewdetail.php';
		?>
