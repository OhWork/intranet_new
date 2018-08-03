<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbname = new label('ชื่อ-นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สำนัก/สวน');
    $lbwork = new label('งาน');
    $lbdetail = new label('รายละเอียด');
    $lbsystem = new label('ระบบงาน');
    $lbfile = new label('ไฟล์');
    $txtname = new textfield('upweb_name','','form-control','','');
    $txtwork = new textfield('upweb_work','','form-control','','');
    $txtposition = new textfield('upweb_position','','form-control','','');
    $txtdetail = new textarea('upweb_detail','form-control','','');
?>
    <script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
// 			frmMain.ddlAmphur.length = 0  (ไม่ใช้)

			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?
			$intRows = 0;
			$rs = $db->orderASC('subzoo','subzoo_id')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["zoo_zoo_id"];?>;
				strValue = "<?=$objResult["subzoo_id"];?>";
				strItem = "<?=$objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
				}
			<?
			}
			?>
		}
		function setDefault()
		{
			<?
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$strZoo = $zoo;
				$strSubzoo = $subzoo;
			?>

				<?
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
				<?
				}
				?>

				<?
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
				<?
				}
				?>
		}
	</script>
	<script language="javascript">
		$(document).ready(function() {
		var i = 1 ;
		$('#btnButton').on('click',function(){
			i++;
			console.log(i);
			if(i == 5){
				document.getElementById("add").innerHTML = "เพิ่มไฟล์ได้ไม่เกิน 5 ไฟล์ครับ";
				$('#add').addClass('text-danger');
			}
		});
	});
	function fncCreateElement(){

	   var mySpan = document.getElementById('mySpan');
				var myElement1 = document.createElement('input');
				myElement1.setAttribute('type',"file");
				myElement1.setAttribute('name',"filUpload[]");
				mySpan.appendChild(myElement1);
			   var myElement2 = document.createElement('<br>');
			   mySpan.appendChild(myElement2);
	}
	</script>
<?php echo $form->open("form_reg","frmMain","","cs_insert_upweb.php",""); ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"  style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"  style="border-bottom:solid 1px #E0E0E0;">
					<h4>ร้องขอขึ้นเว็บไซต์</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
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
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php echo $lbwork ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
					<?php echo $txtwork ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php echo $lbname ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
					<?php echo $txtname ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php echo $lbsystem ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
					<?php echo $txtname ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php echo $lbdetail ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
					<?php echo $txtdetail ?>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<div class="row">
						<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1' style="padding-top: 8px;">
							<?php echo $lbfile ?>
						</div>
						<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8' style="padding-top: 5px;">
							<input type="file" name="filUpload[]">
							<span id="mySpan"></span>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3" id="add">
							<input class="btn btn-primary col-12" name="btnButton" id="btnButton" type="button" value="เพิ่ม" onClick="JavaScript:fncCreateElement();">
						</div>
					</div>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<input class="btn btn-success col-12" name="btnSubmit" type="submit" value="Submit">
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
<?php $form->close(); ?>
