<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/main.css">
</head>
<?php  
    include_once 'database/db_tools.php';
	include_once 'connect.php';
    require_once 'Classes/PHPExcel.php';  // เรียกใช้งาน class 
	$zoo = $_GET['zoo'];
	$qua=$_GET['quarter'];      //เก็บค่า 1   2   3   4   5
    $yearthai  = $_GET['year'];    // แปลง ปีไทย เป็น ปีฝรั่ง
    $yearthaiez = $yearthai-1;
	$wrapper = '<div class="wrapper">';
	$wrapperend = '</div>';
	$box = '<div class="row">';
	$end = '</div>';
     if($zoo == 1){
        $type = 'zoo.zoo_type';
    }else{
        $type = 'zoo.zoo_id';
        }
  switch ($qua){
  case 0:
     echo "<div class='totalselect'><center><h2>กรุณาระบุปีงบประมาณ และ เลือกไตรมาสก่อนทำการค้นหา</h2></center></div>";
     exit();
  case 1:
     $qua="BETWEEN '$yearthaiez-10-1' AND '$yearthai-9-30' ";
     $textqua = "";   
     break;
  case 2:
     $qua="BETWEEN '$yearthaiez-10-1' AND '$yearthaiez-12-31' ";
     $textqua = "ไตรมาสที่ 1 (1 ต.ค. - 31 ธ.ค.)";   
     break;
  case 3:
     $qua="BETWEEN '$yearthai-01-1' AND '$yearthai-3-31' ";
     $textqua = "ไตรมาสที่ 2 (1 ม.ค. - 31 มี.ค.)";   
     break;
  case 4:
     $qua="BETWEEN '$yearthai-04-1' AND  '$yearthai-06-30' ";
     $textqua = "ไตรมาสที่ 3 (1 เม.ย. - 30 มิ.ย.)";   
     break;
  case 5:
     $qua="BETWEEN '$yearthai-07-01' AND  '$yearthai-09-30' ";
     $textqua = "ไตรมาสที่ 4 (1 ก.ค. - 30 ก.ย.)";   
     break;
}
    if(!empty($zoo == 2)){
    $CY = $db->countTableBETWEEN12('problem','problem_status',"'Y'",'problem_date',$qua)->executeRowcount();
    $CS = $db->countTableBETWEEN12('problem','problem_status',"'S'",'problem_date',$qua)->executeRowcount();
    $CN = $db->countTableBETWEEN12('problem','problem_status',"'N'",'problem_date',$qua)->executeRowcount();
    $rs = $db->specifytable("subtypetools.subtypetools_name AS STT,COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,zoo',
'problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND
 problem_date '.$qua.' 
 GROUP BY subtypetools.subtypetools_name')->execute();
}else{
$rs = $db->specifytable("subtypetools.subtypetools_name AS STT,COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,zoo',
'problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND
 '.$type.' = '.$zoo.' AND
 problem_date '.$qua.' 
 GROUP BY subtypetools.subtypetools_name')->execute();
$CY = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id',$type,$zoo,'problem_date',$qua,'problem_status',"'Y'")->executeRowcount();
$CS = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id',$type,$zoo,'problem_date',$qua,'problem_status',"'S'")->executeRowcount();
$CN = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id',$type,$zoo,'problem_date',$qua,'problem_status',"'N'")->executeRowcount();
 }
$counttotal =  $CS+$CY+$CN;

/** Error reporting */  
error_reporting(E_ALL);  
ini_set('display_errors', TRUE);  
ini_set('display_startup_errors', TRUE);  
date_default_timezone_set('Asia/Bangkok');  
// http://php.net/manual/en/timezones.php  
  
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />'); // ส่วนนี้ไม่มีอะไรกำหนดค่าไว้ใช้ในการ echo  
 
$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;    
$rendererLibraryPath = "libraries/MPDF54";      

  
// โฟลเดอร์เก็บไฟล์ กรณีใช้ใน server ให้กำหนด permission เป็น 777  
$placeFilesSave="cs_exportreport/";  
  
// สร้าง PHPExcel object
echo $wrapper;
echo $box;
echo date('H:i:s') , " Create new PHPExcel object" , EOL;  
$objPHPExcel = new PHPExcel();  
  
// กำหนดค่าต่างๆ ของเอกสาร excel  
echo date('H:i:s') , " Set document properties" , EOL;  
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")  
                             ->setLastModifiedBy("Maarten Balliauw")  
                             ->setTitle("PHPExcel Test Document")  
                             ->setSubject("PHPExcel Test Document")  
                             ->setDescription("Test document for PHPExcel, generated using PHP classes.")  
                             ->setKeywords("office PHPExcel php")  
                             ->setCategory("Test result file");  
  
// การจัดรูปแบบของ cell  
$objPHPExcel->getDefaultStyle()  
                        ->getAlignment()  
                        ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)  
                        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);   
                        //HORIZONTAL_CENTER //VERTICAL_CENTER  

if(!PHPExcel_Settings::setPdfRenderer(    
        $rendererName,    
        $rendererLibraryPath    
    )) {    
    die(    
        'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .    
        '<br />' .    
        'at the top of this script as appropriate for your directory structure'    
    );    
}    
  
// การเพิ่มข้อมูล  
echo date('H:i:s') , " Add some data" , EOL;  
$objPHPExcel->setActiveSheetIndex(0) 
            ->setCellValue('A1', 'รายงานการซ่อม/บริการคอมพิวเตอร์ของสำนักองค์การสวนสัตว์')  
            ->mergeCells('A1:E1')
            ->setCellValue('A2', 'สรุป')
            ->setCellValue('B2', 'จำนวนการขอรับบริการทั้งหมด')
            ->setCellValue('D2', $counttotal)
            ->setCellValue('E2', 'ครั้ง')
            ->mergeCells('B2:C2')
            ->setCellValue('B3', 'จำนวนการให้บริการแล้วเสร็จทั้งหมด')
            ->setCellValue('D3', $CY)
            ->setCellValue('E3', 'ครั้ง')
            ->mergeCells('B3:C3')
            ->setCellValue('A4', 'ปัญหา')  
            ->setCellValue('B4', 'รอการดำเนินการ')
            ->setCellValue('C4', 'ระหว่างดำเนินการ')  
            ->setCellValue('D4', 'เสร็จสิ้นดำเนินการ')  
            ->setCellValue('E4', 'รวม');    
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:E4')->getFont()->setBold(true);
// เราจะทดสอบเพิ่มข้อมูลในตาราง excel อย่างง่าย  
$start_row=5;  
// for($i=1;$i<=10;$i++){  
while($rsf = mysql_fetch_array($rs)){
$objPHPExcel->setActiveSheetIndex(0)  
            ->setCellValue('A'.$start_row, $rsf['STT'])  
            ->setCellValue('B'.$start_row, $rsf['C_N'])
            ->setCellValue('C'.$start_row, $rsf['C_S'])
            ->setCellValue('D'.$start_row, $rsf['C_Y'])
            ->setCellValue('E'.$start_row, $rsf['C_A']);  
    $start_row++;  
}  
   
  
// กำหนดชื่อให้กับ worksheet ที่ใช้งาน  
echo date('H:i:s') , " Rename worksheet" , EOL;  
$objPHPExcel->getActiveSheet()->setTitle('ComputerService');  
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
for($row = 1; $row !== 100; $row++) {
$objPHPExcel->getActiveSheet()->getRowDimension($row)->setRowHeight(20);
}
// กำหนด worksheet ที่ต้องการให้เปิดมาแล้วแสดง ค่าจะเริ่มจาก 0 , 1 , 2 , ......  
$objPHPExcel->setActiveSheetIndex(0);  
  
// ชื่อไฟล์  
$saveFileName="report";  
  
// บันทึกเป็น Excel 2007 file  
echo date('H:i:s') , " Write to Excel2007 format" , EOL;  
$callStartTime = microtime(true);  
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
$saveFileNameFull=$saveFileName.".xlsx";  
$pathSaveFile1=$placeFilesSave.$saveFileNameFull;  
$objWriter->save($pathSaveFile1);  
  
  
  
// บันทึกเป็น PDF
// echo date('H:i:s') , " Write to PDF format" , EOL;  
// $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');    
// $saveFileNameFull=$saveFileName.".pdf";  
// $pathSaveFile2=$placeFilesSave.$saveFileNameFull;  
// $objWriter->save($pathSaveFile2);  

// echo date('H:i:s') , " Done writing files" , EOL;  
// echo 'Files have been created in ' , $placeFilesSave , EOL;    

// แสดงการเขียนไฟล์เรียกร้อยแล้ว และมีลิ้งค์ให้ดาวโหลด  
echo date('H:i:s') , " Done writing files" , EOL;  
echo 'Files have been created in ' , $placeFilesSave , EOL;  
echo "<a href='".$pathSaveFile1."' target='_blank' class='btn btn-success'>Download Excel2007 format</a>",EOL;  
// echo "<a href='".$pathSaveFile2."' target='_blank' class='btn btn-danger'>Download PDF</a>",EOL;  
echo $end;
echo $wrapperend;
?>  