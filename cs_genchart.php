<?php
  if (!empty($_SESSION['user_name'])):
header("Content-type:application/json; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);  
// ส่วนติดต่อกับฐานข้อมูล

	include_once 'database/db_tools.php';
	include_once 'connect.php';
?>
<?php
// ในที่นี้เราจะใช้เป็นเดือน จึงมีการสร้าง array เก็บค่าเดือน
$thai_month=array(   
"ม.ค.",     
"ก.พ.",     
"มี.ค.",     
"เม.ย.",     
"พ.ค.",     
"มิ.ย.",      
"ก.ค.",     
"ส.ค.",     
"ก.ย.",     
"ต.ค.",     
"พ.ย.",     
"ธ.ค."                      
);  
// สร้างฟังก์ชั่น หายอดจำนวนที่ขายได้รวม ในแต่ละเดือน ของสินค้าใดๆ
// โดยจะสิ่งชื่อสินค้า และปี เข้าไปเพื่อตรวจสอบ และสร้างค่าตัวแปร array 
// ชุดข้อมูล
function getData($val,$year){
    $arr_data=array();
    // คำสั่ง sql เปลี่ยนไปตามความเหมาะสม ขึ้นกับว่าเป็นข้อมูลประเภทไหน
    // และต้องการใช้ข้อมูลในลักษณะใด ในที่นี้ เป็นการหายอดรวม ของสินค้า
    // แต่ละรายการ ในแต่ละเดือน ของปี ที่ส่งค่าตัวแปรมา 
    $rs1 = $db->specifytable("subtypetools.subtypetools_name AS STT,
    COUNT(problem.subtypetools_subtypetools_id) AS C_A,
    SUM(IF(problem_status = 'N',1,0)) AS C_N,
    SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_name = 'สำนักตรวจสอบ' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date BETWEEN '2562-01-01' AND '2562-12-31'
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
    $q="
    SELECT 
    SUM(quantity) as total_quantity 
    FROM tbl_sale WHERE name='".$val."' AND date LIKE '".$year."%'
    GROUP BY DATE_FORMAT( DATE,  '%Y-%m-01' ) 
    ";    
    
    while($rs=mysql_fetch_array($rs1)){    
        $arr_data[]=$rs['total_quantity'];
    }
    return $arr_data;  // ส่งค่ากลับชุด array ข้อมูล
}
// สร้างชุด array ข้อมูลของสินค้า A ปี เป็นตัวแปร $_GET['year'] ที่เราส่งมาในที่นี้คือปี 2014
$col_A=getData('A',$_GET['year']); // สร้างชุด array ข้อมูลของสินค้า A
$col_B=getData('B',$_GET['year']); // สร้างชุด array ข้อมูลของสินค้า B
$col_C=getData('C',$_GET['year']); // สร้างชุด array ข้อมูลของสินค้า C
// กำหนดตัวแปร $i ไว้อ้างอิง key ของชุดข้อมูล array
$i=0;
$q="
SELECT 
sale_id 
FROM tbl_sale 
GROUP BY DATE_FORMAT( DATE,  '%Y-%m-01' ) 
";
// การ query จะใช้ group by เดียวกัน เพื่อให้ key ของข้อมูล array ตรงและสัมพันธ์กัน
$qr=mysql_query($q);
while($rs=mysql_fetch_array($qr)){
    $json_data[]=array(
        $thai_month[$i],  // สร้างข้อมูลแถวที่สองขึั้นไป คอลัมน์แรก อันนี้คือ เดือนย่อ
        intval($col_A[$i]),  // สร้างข้อมูลแถวที่สองขึั้นไป คอลัมน์ที่สอง ข้อมูลยอดรวมของ สินค้า A
        intval($col_B[$i]),  // สร้างข้อมูลแถวที่สองขึั้นไป คอลัมน์ที่สาม ข้อมูลยอดรวมของ สินค้า B
        intval($col_C[$i])  // สร้างข้อมูลแถวที่สองขึั้นไป คอลัมน์ที่สี่ ข้อมูลยอดรวมของ สินค้า C
    );  
    $i++; // เพื่ม key ของตัวแปร arrray
}
// ใส่ชุดข้อมูลแถวแรกเข้าไปในตัวแปร array 
array_unshift($json_data,array("เดือน","สินค้า A","สินค้า B","สินค้า C"));
$json= json_encode($json_data); // แปลงข้อมูล array เป็น ข้อความ json object นำไปใช้งาน
echo $json;
?>