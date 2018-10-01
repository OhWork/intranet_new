<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbname = new label('ข้าพเจ้า');
    $lblast = new label('นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbname_eng = new label('ชื่อภาษาอังกฤษ(First Name)');
    $lblast_eng = new label('นามสกุลภาษาอังกฤษ(Last Name)');
    $lbdevision = new label('สำนัก/สวน');
    $lbwork = new label('งาน');
    $lbidcard = new label('รหัสบัตรประชาชน');
    $lbtel = new label('เบอร์ติดต่อ');
    $button = new buttonok("ส่งแบบฟอร์ม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("","","col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10","hrs_insert_hospital.php","");
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
    <?php
    echo $lbname;
    echo $lblast;
    echo $lbposition;
    echo $lbname_eng;
    echo $lblast_eng;
    echo $lbdevision;
    echo $lbwork;
    echo $lbidcard;
    echo $lbtel;
    ?>
<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12' style="padding-top: 8px;float: left;"><label>สำนัก/สวน</label></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 form-group has-feedback test' style="float: left;">
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
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class='row'>
								<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12' style="padding-top: 8px;float: left;"><label>ฝ่าย</label></div>
								<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 form-group has-feedback test' style="float: left;">
									<select class='form-control' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
								</div>
							</div>
						</div>

    
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent1" value="1"> ระบบอินเทอร์เน็ตองค์การสวนสัตว์
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent2" value="2"> ระบบอินเทอร์เน็ตโมบาย
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype"  id="parent3" value="3"> ระบบ ZPO data center
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent4" value="4"> ระบบ E-Project
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบทะเบียนสัตว์
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบบริหารงานบุคคล
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> www.zoothailand.org
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> ระบบสารบรรณอิเล็กทรอนิกส์ สรอ.
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> Username และ Password ในกรณีทำหายของระบบ
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							(ช่องว่าง)
						</label>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<label class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input type="radio" name="hrhos_familytype" id="parent5" value="5"> อื่นๆ
						</label>
						<label class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							(ช่องว่าง)
						</label>
					</div>
				</div>
                <?php
                    echo $form->close();
                ?>