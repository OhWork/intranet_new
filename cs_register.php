<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbname_eng = new label('ชื่อ - นามสกุล (ภาษาอังกฤษ)');
    $lbdevision = new label('สำนัก/สวน');
    $lbwork = new label('งาน');
    $lbidcard = new label('รหัสบัตรประชาชน');
    $lbtel = new label('เบอร์ติดต่อ');
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    ?>
        <script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','null')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?
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
			<?
			}
			?>
		}
</script>
<?php echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","hrs_insert_hospital.php",""); ?>
<div class="row">
	<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
				<h4>แบบฟอร์ม การขอชื่อผู้ใช้และรหัสผ่านสำหรับใช้งานระบบเทคโนโลยีสารสนเทศ </h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<?php echo $lbname; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbposition; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbname_eng; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbdevision; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbwork; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbidcard; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbtel; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<label>สำนัก/สวน</label>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>
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
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test' style="float: left;">
				<select class='form-control' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype" id="parent1" value="1"> ระบบอินเทอร์เน็ตองค์การสวนสัตว์
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype"  id="parent2" value="2"> ระบบอินเทอร์เน็ตโมบาย
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype"  id="parent3" value="3"> ระบบ ZPO data center
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="radio" name="hrhos_familytype" id="parent4" value="4"> ระบบ E-Project
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบทะเบียนสัตว์
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบบริหารงานบุคคล
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype" id="parent5" value="5"> www.zoothailand.org
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบสารบรรณอิเล็กทรอนิกส์ สรอ.
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
										<input type="radio" name="hrhos_familytype" id="parent5" value="5"> Username และ Password ในกรณีทำหายของระบบ
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
										(ช่องว่าง)
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
										<input type="radio" name="hrhos_familytype" id="parent5" value="5"> อื่นๆ
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
										(ช่องว่าง)
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $form->close(); ?>