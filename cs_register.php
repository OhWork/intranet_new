<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbname = new label('ชื่อ - นามสกุล');
    $lbname_eng = new label('ชื่อ - นามสกุล (ภาษาอังกฤษ)');
    $lbposition = new label('ตำแหน่ง');
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
			var myOption = new Option('โปรดระบุ','');
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption;

			<?php
			$intRows = 0;
			$rs = $db->findPK1ASC('subzoo','subzoo_enable',1,'subzoo_no')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?php echo $intRows;?>;
				mySubList = new Array();

				strGroup = <?php echo $objResult["zoo_zoo_id"];?>;
				strValue = "<?php echo $objResult["subzoo_id"];?>";
				strItem = "<?php echo $objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
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
</script>
<?php echo $form->open("","frmMain","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","hrs_insert_hospital.php",""); ?>
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
				<?php echo $lbname_eng; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbposition; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php echo $lbdevision; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
							<select class='form-control css-require' id="ddlZoo" name="subzoo_zoo_zoo_id" onChange = "ListSubzoo(this.value)">
							<option selected value="">-----โปรดระบุ-----</option>
							<?php
								$rs = $db->orderASC('zoo','zoo_id')->execute();
								while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
								{
							?>
								<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
							<?php
								}
								?>
							</select>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<label>ฝ่าย</label>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
					<select class='form-control css-require' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
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
				
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test'>

			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback test' style="float: left;">
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_internet_use" id="parent1" value="1"> ระบบอินเทอร์เน็ตองค์การสวนสัตว์
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_minternet_use"  id="parent2" value="2"> ระบบอินเทอร์เน็ตโมบาย
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_intranet_use"  id="parent3" value="3"> ระบบ ZPO data center
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="checkbox" name="reguser_eproject_use" id="parent4" value="4"> ระบบ E-Project
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_animal_use" id="parent5" value="5"> ระบบทะเบียนสัตว์
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_hrsys_use" id="parent5" value="5"> ระบบบริหารงานบุคคล
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_website_use" id="parent5" value="5"> www.zoothailand.org
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<input type="checkbox" name="reguser_esarabun_use" id="parent5" value="5"> ระบบสารบรรณอิเล็กทรอนิกส์ สรอ.
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
										<input type="checkbox" name="reguser_userpasslost" id="forgetusercheck" value="5"> Username และ Password ในกรณีทำหายของระบบ
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
										<input type="text" name="reguser_sent_email" id="forgetuser" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
										<input type="checkbox" name="reguser_other" id="ohter" value="5"> อื่นๆ
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
										<input type="text" name="reguser_other_detail" id="textohter" class="form-control">
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
<script>
	$('#forgetuser').prop("disabled", true);
	$('#textohter').prop("disabled", true);
	$('#forgetusercheck').click(function() {
	  if ($(this).is(':checked')) {
	    // Do stuff
	    $('#forgetuser').prop("disabled", false);
	  }else{
	  	$('#forgetuser').prop("disabled", true);
	  }
	});
	$('#ohter').click(function() {
		console.log(123);
	  if ($(this).is(':checked')) {
	    // Do stuff
	    $('#textohter').prop("disabled", false);
	  }else{
	  	$('#textohter').prop("disabled", true);
	  }
	});
</script>
