<?php
    if (!empty($_SESSION['user_name'])):
     $id = $_SESSION['subzoo_zoo_zoo_id'];

    $form = new form();
    $lbdatestart = new label('วันที่สมัคร');
    $lbnameth = new label('ชื่อ - นามสกุล (ไทย)');
    $lbnameen = new label('ชื่อ - นามสกุล (อังกฤษ)');
    $lbsubdistrict = new label('แขวง/ตำบล');
    $lbdistrict = new label('เขต/อำเภอ');
    $lbprovince = new label('จังหวัด');
    $lbtel = new label('เบอร์โทรศัพท์');
    $lbaddress = new label('ที่อยู่');
    $lbdatereg = new label('วันที่รับสมัคร');
     $lbline = new label('Line-ID');
     $lbbd = new label('วันเกิด');
    $lbemail = new label('อีเมล์');
    $lbdetail = new label('หมายเหตุ');
    $txtnameth = new textfield('zlfotmember_nameth','','form-control','','');
    $txtnameen = new textfield('zlfotmember_nameen','','form-control','','');
    $txtline = new textfield('zlfotmember_line','','form-control','','');
     $txtbd = new textfield('zlfotmember_bd','','form-control','','');
     $txtemail = new textfield('zlfotmember_email','','form-control','','');
     $txttel = new textfield('zlfotmember_tel','data2','form-control','');
     $txttel->functions = "onkeyup='autoTab2(this,2)'";
     $txtaddress = new textArea('zlfotmember_address','form-control','','','5','3','');
     $txtdetail = new textArea('zlfotmember_detail','form-control','','','5','5','');
     $txtbd = new datetimepicker('zlfotmember_bd','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','','');
    $button = new buttonok("ส่งใบสมัคร","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","zlfot_insert_member.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;" id="maincontent">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
					<h4>สมัครสมาชิกสโมสรผู้รักสวนสัตว์แห่งประเทศไทย</h4>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbzoo."   ".$zoo;  ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbnameth; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                                        <?php echo $txtnameth; ?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbnameen; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                                        <?php echo $txtnameen; ?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbbd; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                                    <div class="row">
                                        <?php echo $txtbd; ?>
                                    </div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbaddress; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $txtaddress; ?>
				</div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">           
                    <label for="province">จังหวัด</label>
					<select name="zlfotmember_province_id" id="province" class="form-control">
					<option value="">เลือกจังหวัด</option>
					<?php 
						$rs = $db->findAll('provinces')->execute();									
						while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC)){ ?>
						<option value="<?=$objResult["id"];?>"><?=$objResult["name_in_thai"];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1"> 
					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-0">
							<label for="district">อำเภอ</label>
							<select name="zlfotmember_districts_id" id="district" class="form-control">
							<option value="">เลือกอำเภอ</option>
							</select>
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-0">
							<label for="subdistrict">ตำบล</label>
							<select name="zlfotmember_subdistricts_id" id="subdistrict" class="form-control">
							<option value="">เลือกตำบล</option>
							</select>
						</div>
                    </div>        
                </div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1"> 
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mt-1">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $lbtel; ?>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									 <?php echo $txttel; ?>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mt-1">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $lbline; ?>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
									<?php echo $txtline; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbemail ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                    <?php echo $txtemail; ?>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $txtdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                <input type='hidden' name='zlfotmember_datereg' value='<?php echo date("Y-m-d"); ?>'/>
    						<input type='hidden' name='user_user_id' value='<?php echo $_SESSION['user_id']; ?>'/>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
					</div>
				</div> 
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
<?php echo $form->close();
              endif;
              ?>
<script>
	$(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
    });
    
    $(function(){
var provinceObject = $('#province');
var districtObject = $('#district');
var subdistrictObject = $('#subdistrict');
// on change province
provinceObject.on('change', function(){
var provinceId = $(this).val();
districtObject.html('<option value="">เลือกอำเภอ</option>');
subdistrictObject.html('<option value="">เลือกตำบล</option>');
$.get('zlfot_get_district.php?province_id=' + provinceId, function(data){
var result = JSON.parse(data);
$.each(result, function(index, item){
districtObject.append(
$('<option></option>').val(item.id).html(item.name_in_thai)
);
});
});
});
// on change district
districtObject.on('change', function(){
var districtId = $(this).val();
subdistrictObject.html('<option value="">เลือกตำบล</option>');
$.get('zlfot_get_subdistrict.php?district_id=' + districtId, function(data){
var result = JSON.parse(data);
$.each(result, function(index, item){
subdistrictObject.append(
$('<option></option>').val(item.id).html(item.name_in_thai)
);
});
});
});
});
    </script>