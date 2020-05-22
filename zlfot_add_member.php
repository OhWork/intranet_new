<?php
    if (!empty($_SESSION['user_name'])):
     $id = $_SESSION['subzoo_zoo_zoo_id'];

    $form = new form();
    $lbnameth = new label('ชื่อ - นามสกุล (ไทย)');
    $lbnameen = new label('ชื่อ - นามสกุล (อังกฤษ)');
    $lbcode = new label('เลขที่สมาชิก');
    $lbtel = new label('เบอร์โทรศัพท์');
    $lbaddress = new label('ที่อยู่');
    $lbdatereg = new label('วันที่สมัคร');
    $lbdateend  = new label('วันที่หมดอายุ');
    $lbtype = new label('ประเภทสมาชิก');
     $lbzoo = new label('สมัครจาก');
     $lbreceipt = new label('เลขที่ใบเสร็จ');
    $lbemail = new label('อีเมล');
    $txtnameth = new textfield('zlfot_nameth','','form-control','','');
    $txtnameen = new textfield('zlfot_nameen','','form-control','','');
    $txtreceipt = new textfield('zlfot_receipt','','form-control','','');
     $txtemail = new textfield('zlfot_email','','form-control','','');
     $txttel = new textfield('zlfot_tel','data2','form-control','');
     $txttel->functions = "onkeyup='autoTab2(this,2)'";
     $txtaddress = new textArea('zlfot_address','form-control','','','5','5','');
    $radiotypezlfot = new radioGroup();
    $radiotypezlfot->name = 'typezlfot_typezlfot_id';
           $rstype = $db->findAll('typezlfot')->execute();
           foreach($rstype as $type){
    	$radiotypezlfot->add($type['typezlfot_name'],$type['typezlfot_code'],'','');
           }
     if($id >= 1 && $id <= 10){
            $zoo_code = '001';
            $zoo = "องค์การสวนสัตว์ ในพระบรมราชูปถัมภ์";
    }else{
         $rszoo =$db->findByPK('zoo','zoo_id',$id)->executeAssoc();
             $zoo_code = $rszoo['zoo_code'];
            $zoo = $rszoo['zoo_name'];
    }
    $button = new buttonok("ส่งใบสมัคร","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");

    ?>
 <script>
          function autoTab2(obj,typeCheck){
    /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
    หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
    4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
    รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
    หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
    ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
    */
        if(typeCheck==1){
            var pattern=new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }else{
            var pattern=new String("___-___-____"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }
        var returnText=new String("");
        var obj_l=obj.value.length;
        var obj_l2=obj_l-1;
        for(i=0;i<pattern.length;i++){
            if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                returnText+=obj.value+pattern_ex;
                obj.value=returnText;
            }
        }
        if(obj_l>=pattern.length){
            obj.value=obj.value.substr(0,pattern.length);
        }
    }
 </script>
 <?php
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","zlfot_insert_member.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;" id="maincontent">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
					<h4>สมัครสมาชิกสโมสรผู้รักสวนสัตว์</h4>
				</div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbzoo."   ".$zoo;  ?>
				</div>
                                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbtype; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $radiotypezlfot;?>
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
					<?php echo $lbtel; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txttel; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbaddress; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $txtaddress; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbreceipt; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtreceipt; ?>
				</div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbemail ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
    				<?php echo $txtemail; ?>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                                                                <input type='hidden' name='zoo_code' value='001'/>
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
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
</div>
<?php echo $form->close();
              endif;
              ?>
<script>
 
		$('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
   $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        sideBySide: true,
            allowInputToggle: true,
	        ignoreReadonly: true,
	        locale:moment.locale('th')
        })
         $("#datetimepicker1").on("change.datetimepicker", function (e) {
            $('#datetimepicker2').datetimepicker('minDate', e.date);
             var widget = $(this).find(".bootstrap-datetimepicker-widget");
        });
        $("#datetimepicker2").on("change.datetimepicker", function (e) {
            $('#datetimepicker1').datetimepicker('maxDate', e.date);
            var widget = $(this).find(".bootstrap-datetimepicker-widget");
        });
		$("#maincontent").on("click", function (e) {
		 		var widget = $(this).find(".bootstrap-datetimepicker-widget");
                    widget.hide();
		});

   });
</script>
