<script type='text/javascript'>
        $(document).ready(function(){
            $('#table').DataTable({
                "ordering": false,
                "lengthMenu": false,
                "searching": false,
                "paging":   false,
                "ordering": false,
                "info":     false,

                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    });
});
</script>
<?php
   if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
    date_default_timezone_set('Asia/Bangkok');
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
        $zoo = $_GET['zoo'];
        $form = new form();
        $txtname = new textfield('zlfotmember_nameth','zlfotmember_nameth','form-control zlfot_inp','','');
	$button = new buttonok('','','btn btn-primary col-12 zloft_bt fas fa-search','submit');
	echo $form->open('','','col-12','','');
?>
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" id="maincontent" style="background-color: #FFFFFF;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
                <h4 style="color: #4e555b">ค้นหาสมาชิก</h4>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
		<div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <p class="pt-4 pl-3 mb-0" style="color: #4e555b">กรุณากรอกชื่อสมาชิก</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mt-3">
                                <?php echo $txtname ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" id="" class="btn btn-primary col-12 zloft_bt" name="submit" value=""><i class="fas fa-search"></i></button>
                    </div>
		</div>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['submit'])){
    isset($_POST['zlfotmember_nameth'])?$zlfotmember_nameth  = $_POST['zlfotmember_nameth']:$zlfotmember_nameth='';
        $rs = $db->findByPK44('zlfotmember','subdistricts','districts','provinces',
                'zlfotmember.zlfotmember_provinces_id','provinces.provinces_id',
                'zlfotmember.zlfotmember_districts_id','districts.districts_id',
                'zlfotmember.zlfotmember_subdistricts_id','subdistricts.subdistricts_id',
                'zlfotmember_nameth',"'$zlfotmember_nameth'")->executeAssoc();  
        if($rs){
            if($rs['zlfotmember_id']){
                $member_id =  $rs['zlfotmember_id'];
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3" style="background-color: #FFFFFF;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <h4 style="color: #4e555b">ประวัติสมาชิกสโมสรผู้รักสวนสัตว์</h4>
    </div>
<?php } ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-1"></div>
            <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>ชื่อ-นามสกุล :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>ชื่อ-นามสกุล(ภาษาอังกฤษ) :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_nameen']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>เบอร์โทรศัพท์ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_tel']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>วันเกิด :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_bd']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>อีเมล์ :</p>
                            </div>
                            <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_email']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>LINE ID :</p>
                            </div>
                            <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8 form-control">
                                <p><?php echo $rs['zlfotmember_line']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>ที่อยู่ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php  echo $rs['zlfotmember_address']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>แขวง/ตำบล :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php  echo $rs['subdistricts_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>เขต/อำเภอ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php  echo $rs['districts_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>จังหวัด :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php  echo $rs['provinces_nameth']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4 pt-2">
                                <p>หมายเหตุ :</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8 form-control">
                                <p><?php  echo $rs['zlfotmember_detail']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-1"></div>
        </div>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 pb-3" style="background-color: #FFFFFF;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
        <div class="row">
        <h4 style="color: #4e555b">ประวัติการเป็นสมาชิก</h4>
        <a href="admin_index.php?url=zlfot_add_card.php&id=<?php echo $rs['zlfotmember_id'];?>" class="btn btn-success pl-4 pr-4 ml-auto" title="เพิ่มบัตรสมาชิกสโมสรผู้รักสวนสัตว์"><i class="fas fa-plus"></i><i class="far fa-id-card ml-2"></i></a>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<?php
    $columns = array('zlfotcard_code','typezlfot_name','zlfotcard_datestart','zlfotcard_dateend');
    $rs = $db->findByPK34DESC('zlfotmember','zlfotcard','typezlfot','zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_id','zlfotmember_zlfotmember_id',$member_id,'zlfotcard_stsfw','"C"','zlfotcard_id')->execute();
    $grid = new gridView();
        $grid->header = array('<b><center>รหัสสมาชิก</center></b>','<b><center>ประเภทสมาชิก</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>');
        $grid->width = array('25%','25%','25%','25%');
        $grid->name = 'table';
        $grid->renderFromDB($columns,$rs);
        }else{
?>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-3"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 alert alert-danger text-center" role="alert">
                ไม่พบข้อมูลของการค้นหา
            </div>
            <div class="col-xl-4 col-lg-4 col-md-3"></div>
        </div>
    </div>
        <?php
        }
        }
        
?>   
</div>
</div> 
<?php endif;
    echo $form->close();?>
<script>
        $( "#zlfotmember_nameth" ).autocomplete({ // ใช้งาน autocomplete กับ input text id=tags
            minLength: 0, // กำหนดค่าสำหรับค้นหาอย่างน้อยเป็น 0 สำหรับใช้กับปุ่ใแสดงทั้งหมด
            source: "zlfot_get_member.php", // กำหนดให้ใช้ค่าจากการค้นหาในฐานข้อมูล
            open:function(){ // เมื่อมีการแสดงรายการ autocomplete
                var valInput=$(this).val(); // ดึงค่าจาก text box id=tags มาเก็บที่ตัวแปร
                if(valInput!=""){ // ถ้าไม่ใช่ค่าว่าง
                    $(".ui-menu-item a").each(function(){ // วนลูปเรียกดูค่าทั้งหมดใน รายการ autocomplete
                        var matcher = new RegExp("("+valInput+")", "ig" ); // ตรวจสอบค่าที่ตรงกันในแต่ละรายการ กับคำค้นหา
                        var s=$(this).text();
                        var newText=s.replace(matcher, "<b>$1</b>");    //      แทนค่าที่ตรงกันเป็นตัวหนา
                        $(this).html(newText); // แสดงรายการ autocomplete หลังจากปรับรูปแบบแล้ว
                    });
                }
            },
            select: function( event, ui ) {
                // สำหรับทดสอบแสดงค่า เมื่อเลือกรายการ
              //console.log( ui.item ?
               //   "Selected: " + ui.item.label :
                //  "Nothing selected, input was " + this.value);
                $("#ipzpo_address").val(ui.item.id); // เก็บ id ไว้ใน hiden element ไว้นำค่าไปใช้งาน
                //setTimeout(function(){
                 // $("#h_input_q").parents("form").submit(); // เมื่อเลือกรายการแล้วให้ส่งค่าฟอร์ม ทันที
           //},500);
            }
        });
</script>

