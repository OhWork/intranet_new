<?php  
    include_once 'database/db_tools.php';
	include_once 'connect.php';
    require_once 'Classes/PHPExcel.php';  // เรียกใช้งาน class 
error_reporting(E_ALL);  
date_default_timezone_set('Asia/Bangkok');  
// http://php.net/manual/en/timezones.php  
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />'); // ส่วนนี้ไม่มีอะไรกำหนดค่าไว้ใช้ในการ echo  
$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;    
$rendererLibraryPath = "libraries/MPDF54";      
// โฟลเดอร์เก็บไฟล์ กรณีใช้ใน server ให้กำหนด permission เป็น 777  
$placeFilesSave="cs_exportreport/";  
// สร้าง PHPExcel object
// echo date('H:i:s') , " Create new PHPExcel object" , EOL;  
$objPHPExcel = new PHPExcel();  
// กำหนดค่าต่างๆ ของเอกสาร excel  
// echo date('H:i:s') , " Set document properties" , EOL;  
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
// if(!PHPExcel_Settings::setPdfRenderer(    
//         $rendererName,    
//         $rendererLibraryPath    
//     )) {    
//     die(    
//         'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .    
//         '<br />' .    
//         'at the top of this script as appropriate for your directory structure'    
//     );    
// }   
if(!empty($zoo == 2)){
    $rsexcel = $db->specifytable("subtypetools.subtypetools_name AS STT,COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,zoo',
'problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND
 problem_date '.$qua.' 
 GROUP BY subtypetools.subtypetools_name')->execute();
}else{
$rsexcel = $db->specifytable("subtypetools.subtypetools_name AS STT,COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,zoo',
'problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND
 '.$type.' = '.$zoo.' AND
 problem_date '.$qua.' 
 GROUP BY subtypetools.subtypetools_name')->execute();
 }
// การเพิ่มข้อมูล  
//echo date('H:i:s') , " Add some data" , EOL;  
$objPHPExcel->setActiveSheetIndex(0) 
            ->setCellValue('A1', 'รายงานการซ่อม/บริการคอมพิวเตอร์ของสำนักองค์การสวนสัตว์')  
            ->mergeCells('A1:E1')
            ->setCellValue('A2', $textqua)
            ->mergeCells('A2:B2') 
            ->setCellValue('C2', ' ปีงบประมาณ ')
            ->setCellValue('D2', $yearthai)
            ->mergeCells('D2:E2')
            ->setCellValue('A3', 'สรุป')
            ->setCellValue('B3', 'จำนวนการขอรับบริการทั้งหมด')
            ->setCellValue('D3', $counttotal)
            ->setCellValue('E3', 'ครั้ง')
            ->mergeCells('B3:C3')
            ->setCellValue('B4', 'จำนวนการให้บริการแล้วเสร็จทั้งหมด')
            ->setCellValue('D4', $CY)
            ->setCellValue('E4', 'ครั้ง')
            ->mergeCells('B4:C4')
            ->setCellValue('A5', 'ปัญหา')  
            ->setCellValue('B5', 'รอการดำเนินการ')
            ->setCellValue('C5', 'ระหว่างดำเนินการ')  
            ->setCellValue('D5', 'เสร็จสิ้นดำเนินการ')  
            ->setCellValue('E5', 'รวม');    
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:E4')->getFont()->setBold(true);
$start_row = 6;  
if($rsexcel){
while($rsf = mysql_fetch_array($rsexcel)){
$objPHPExcel->setActiveSheetIndex(0)  
            ->setCellValue('A'.$start_row, $rsf['STT'])  
            ->setCellValue('B'.$start_row, $rsf['C_N'])
            ->setCellValue('C'.$start_row, $rsf['C_S'])
            ->setCellValue('D'.$start_row, $rsf['C_Y'])
            ->setCellValue('E'.$start_row, $rsf['C_A']);  
    $start_row++;  
}
}
// กำหนดชื่อให้กับ worksheet ที่ใช้งาน  
//echo date('H:i:s') , " Rename worksheet" , EOL;  
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
$saveFileName="ComputerServicereport";  
// บันทึกเป็น Excel 2007 file  
//echo date('H:i:s') , " Write to Excel2007 format" , EOL;  
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
// echo date('H:i:s') , " Done writing files" , EOL;  
// echo 'Files have been created in ' , $placeFilesSave , EOL;  
// echo "<a href='".$pathSaveFile1."' target='_blank' class='btn btn-success'>Download Excel2007 format</a>",EOL;  
echo "<a href='".$pathSaveFile1."' target='_blank' class='btn btn-default totalexcel'><img src='images/Excel.png'></a>",EOL;
//echo "<a href='".$pathSaveFile2."' target='_blank' class='btn btn-default col-md-1 trspdf'><img src='images/PDF.png'></a>",EOL;  
?>  