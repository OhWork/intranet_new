<?php
    date_default_timezone_set('Asia/Bangkok');
    $form = new form();
    $lbsend = new label('เรียน');
    $lbname = new label('ชื่อ - นามสกุล');
    $lbposition = new label('ตำแหน่ง');
    $lbdevision = new label('สังกัด');
    $lbdatework = new label('บรรจุเป็นพนักงานเมื่อวันที่');
    $lbsalary = new label('เงินเดือนปัจจุบัน');
    $lbtypetools = new label('ชนิดของอุปกรณ์');
    $txtwork = new textfield('problem_work','problem_work','form-control','','');
    $txttime = new textfieldcalendarreadonly('problem_date','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtcall = new textfield('problem_tel','','form-control','','');
    $txtposition = new textfield('problem_position','problem_position','form-control','','');
    $txtdetail = new textarea('problem_detail','aprob','','');
    $txtdetail->rows = 5;
    $button = new buttonok("ส่งแบบฟอร์มแจ้งซ่อม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    
 ?>
 <h4>หนังสือรับรอง</h4>
 <?php
     echo $lbsend;
     echo $lbname;
     echo $lbposition;
     echo $lbdevision;
     echo $lbdatework;
     echo $lbsalary;
 ?>