<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbwork = new label('งาน');
    $lbposition = new label('ตำแหน่ง');
    $lbcall = new label('โทรศัพท์');
    $lbdevision = new label('สำนัก/สวน');
    $lbdetail = new label('รายละเอียดเพิ่มเติม');
    $lbproblem = new label('ปัญหา');
    $lbtime = new label('วันที่และเวลาแจ้ง');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $txtwork = new textfield('problem_work','problem_work','form-control','','');
    $txttime = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $year = date("Y")+543;
    $md = date("m-d");
    $time = date("H:i");
    @$id = $_GET['id'];
    $txttime->value = $year."-".$md." ".$time;
    $txtcall = new textfield('problem_tel','','form-control','','');
    $txtposition = new textfield('problem_position','problem_position','form-control','','');
    $txtdetail = new textarea('problem_detail','aprob','','','','','');
    $txtdetail->rows = 5;
    $button = new buttonok("ส่งแบบฟอร์มแจ้งซ่อม","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    ?>
    <script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','null')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?php
			$intRows = 0;
			$rs = $db->findPK1ASC('subzoo','subzoo_enable',1,'subzoo_no')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["zoo_zoo_id"];?>;
				strGroup2 = <?=$objResult["subzoo_enable"];?>;
				strValue = "<?=$objResult["subzoo_id"];?>";
				strItem = "<?=$objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strGroup2;
				mySubList[x,3] = strValue;
				if ((mySubList[x,1] == SelectValue) && (mySubList[x,2] == 1)){
					var myOption = new Option(mySubList[x,0], mySubList[x,3])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
				}
			<?php
			}
			?>
		}
		//**** List subtypetools(Start) ***//
		function ListSubtypetools(SelectValue)
		{
			frmMain.ddlsubtypetools.length = 0
			var myOption = new Option('โปรดระบุ','null')
			frmMain.ddlsubtypetools.options[frmMain.ddlsubtypetools.length]= myOption

			<?php
			$intRows = 0;
			$rs = $db->orderASC('subtypetools','subtypetools_id')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["typetools_typetools_id"];?>;
				strValue = "<?=$objResult["subtypetools_id"];?>";
				strItem = "<?=$objResult["subtypetools_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlsubtypetools.options[frmMain.ddlsubtypetools.length]= myOption
				}
			<?php
			}
			?>
		}
			function setDefault()
		{
			<?php
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$r2 = $db->findByPK('user','user_id',$id)->executeRow();
				$strZoo = $r2['subzoo_zoo_zoo_id'];
				$strSubzoo = $r2['subzoo_subzoo_id'];

			?>

				<?php
				/*** Default Zoo  ***/
				if($strZoo != "")
				{
				?>
					var objZoo=document.frmMain.ddlZoo;
					for (x=0;x<objZoo.length;x++)
					{
						if (objZoo.options[x].value=="<?=$strZoo?>")
						{
							objZoo.options[x].selected = true;
							break;
						}
					}

					ListSubzoo(<?=$strZoo;?>)
				<?php
				}
				?>

				<?php
				/*** Default Subzoo  ***/
				if($strSubzoo != "")
				{
				?>
					var objSubZoo=document.frmMain.ddlSubzoo;
					for (x=0;x<objSubZoo.length;x++)
					{
						if (objSubZoo.options[x].value=="<?=$strSubzoo?>")
						{
							objSubZoo.options[x].selected = true;
							break;
						}
					}
				<?php
				}
				?>

		}
		//typetools
			function setDefault()
		{
			<?php
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$r2 = $db->findByPK('user','user_id',$id)->executeRow();
				$strZoo = $r2['subzoo_zoo_zoo_id'];
				$strSubzoo = $r2['subzoo_subzoo_id'];

			?>

				<?php
				/*** Default typetools  ***/
				if($strZoo != "")
				{
				?>
					var objZoo=document.frmMain.ddltypetools;
					for (x=0;x<objZoo.length;x++)
					{
						if (objZoo.options[x].value=="<?=$strZoo?>")
						{
							objZoo.options[x].selected = true;
							break;
						}
					}

					ListSubzoo(<?=$strZoo;?>)
				<?php
				}
				?>

				<?php
				/*** Default Subtypetools  ***/
				if($strSubzoo != "")
				{
				?>
					var objSubZoo=document.frmMain.ddlsubtypetools;
					for (x=0;x<objSubZoo.length;x++)
					{
						if (objSubZoo.options[x].value=="<?=$strSubzoo?>")
						{
							objSubZoo.options[x].selected = true;
							break;
						}
					}
				<?php
				}
				?>

		}
	</script>
<?php echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","cs_insert_problem.php","");?>
	<div class="row">
	<div class="col-xl-2 col-lg-2 col-md-2"></div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
				<h4>แบบฟอร์มแจ้งซ่อม</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8' style="border-right:solid 1px #f5f5f5;">
						<div class='row'>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
								<label>สำนัก/สวน</label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test' style="float: left;">
								<select class='form-control' id="ddlZoo" name="subzoo_zoo_zoo_id" onchange = "ListSubzoo(this.value)">
									<option selected value="">โปรดระบุ</option>
										<? $rs = $db->findAllASC('zoo','zoo_no')->execute();
											while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
										{
										?>
											<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
										<?
										}
										?>
								</select>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label>ฝ่าย</label>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test">
								<select class='form-control' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbwork; ?></label>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group test">
								<?php echo $txtwork; ?>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="ipzpo_user">ชื่อ - นามสกุล</label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>
								<input class='form-control' name="problem_name" type="text" id="ipzpo_user" size="50" />
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbposition; ?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group test'>
								<?php echo $txtposition; ?>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="ipzpo_address">หมายเลขไอพี</label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>
								<input type="text" class="form-control disabledTextInput" name="problem_ip" id="ipzpo_address" readonly/>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbtime; ?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group input-group date test'>
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="problem_date"  id='date1' readonly/>
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbcall; ?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group test'>
								<?php echo $txtcall; ?>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbtypetools;?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>
								<select class='form-control' id="ddltypetools" name="subtypetools_typetools_typetools_id" onchange = "ListSubtypetools(this.value)">
									<option selected value="">โปรดระบุ</option>
											<?
												$rs = $db->orderASC('typetools','typetools_id')->execute();
												while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
											?>
									<option value="<?=$objResult["typetools_id"];?>"><?=$objResult["typetools_name"];?></option>
											<?
												}
											?>
								</select>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<label><?php echo $lbproblem;?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>
								<select class='form-control' id="ddlsubtypetools" name="subtypetools_subtypetools_id"></select>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ohter">
								<label><?php echo $lbdetail;?></label>
							</div>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group test ohter'>
								<?php echo $txtdetail;?>
							</div>
								<input type='hidden' name='problem_status' value='N'>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class='row'>
									<div class='col-xl-3 col-lg-3 col-md-2 col-sm-2 col-2'></div>
									<div class='col-xl-6 col-lg-6 col-md-8 col-sm-8 col-8 form-group'>
										<?php echo $button;?>
									</div>
									<div class='col-xl-3 col-lg-3 col-md-2 col-sm-2 col-2'></div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4' style="color:#f44336;">
						<div class='row'>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
								<h3>*** คำเตือน ***</h3>
								<p>1.เพื่อความปลอดภัยของข้อมูล ผู้ขอใช้บริการต้องทำการสำรองข้อมูล ให้แล้วเสร็จก่อนนำเครื่องมาใช้บริการ</p>
								<p>2.สำนักเทคโนโลยีสารสนเทศ ไม่รับผิดชอบต่อความเสียหายของข้อมูลทุกกรณี</p>
								<p>3.กรุณา Print แบบฟอร์มแจ้งซ่อมให้สำนักเทคโนโลยีสารสนเทศ เพื่อขออนุมัติ ผู้อำนวยการสำนักเทคโนโลยรสารสนเทศดำเนินการแก้ไขต่อ</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-2 col-lg-2 col-md-2"></div>
	</div>
<?php echo $form->close();?>
<script language = "JavaScript">

$( document ).ready( function () {
		$('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD H:mm',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        defaultDate: moment().add(543, 'year'),
	        ignoreReadonly: true,
	        showClose:true,
	        locale:moment.locale('th')
        });
		$("#datetimepicker1").on("dp.change", function (e) {
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("dp.hide");
                    $(this).find(".form-control").blur();
                }
        });

});
	$("#form_reg").validate({
		rules: {
			subzoo_zoo_zoo_id: "required",
			subzoo_subzoo_id: "required",
			problem_name: "required",
			eventservice_start: "required",
			subtypetools_typetools_typetools_id: "required",
			subtypetools_subtypetools_id: "required",
			problem_detail : "required"

		},
		messages: {
			subzoo_zoo_zoo_id:'*กรุณาเลือกข้อมูลสำนักหรือสวนสัตว์*',
			subzoo_subzoo_id:'*กรุณากรอกข้อมูลผู้ใช้*',
			problem_name:'*กรุณากรอกข้อมูลผู้ใช้*',
			eventservice_start:'กรุณาเลือกปัญหา*',
			subtypetools_typetools_typetools_id:'*กรุณาเลือกชนิดของอุปกรณ์*',
			subtypetools_subtypetools_id:'*กรุณาเลือกปัญหา',
			problem_detail:'กรุณากรอกปัญหาอื่นๆ'

		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".test" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".test" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});
				        $('.ohter').hide();
$('#ddlsubtypetools').on("change",function(e) {
	var check =  $("#ddlsubtypetools>option:selected").html();
	console.log(check.match("ปัญหาอื่นๆ"));
	if(check.match("ปัญหาอื่นๆ")){
		$('.ohter').show("slow");
		}
	else {
		$('.ohter').hide("slow");
	}
	});

	function make_autocom(autoObj,showObj){
    var mkAutoObj=autoObj;
    var mkSerValObj=showObj;
    new Autocomplete(mkAutoObj, function() {
        this.setValue = function(id) {
            document.getElementById(mkSerValObj).value = id;
        }
        if ( this.isModified )
            this.setValue("");
        if ( this.value.length < 1 && this.isNotClick )
            return ;
        return "outsource/autocompletedata.php?q=" +encodeURIComponent(this.value);
    });
}

// การใช้งาน
// make_autocom(" id ของ input ตัวที่ต้องการกำหนด "," id ของ input ตัวที่ต้องการรับค่า");
make_autocom("ipzpo_user","ipzpo_address");
 </script>
